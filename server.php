<?php

//Root folder
defined('DS') or define('DS',DIRECTORY_SEPARATOR);
$root = dirname(__FILE__);
set_include_path( $root . PATH_SEPARATOR . get_include_path());
define('ROOT'  , $root. DS );

//.env data
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');
$dotenv->load();

//include functions
include_once(ROOT."config/functions.php");

//Errors Show/Hide
if($_ENV['APP_DEBUG']==true){
    error_reporting(E_ALL); ini_set('display_startup_errors',1); ini_set('display_errors',1); error_reporting(-1);
}else{
    error_reporting(0);
}

// Include and instantiate the class.
$detect = new Mobile_Detect;
$IsMobile = '';
// Exclude tablets.
if( $detect->isMobile() && !$detect->isTablet() ){
    $IsMobile = "is-mobile";
}

define( 'APP_URL', $_ENV['APP_URL'] );
define( 'URL'    , APP_URL );
define( 'LANG'  , ROOT.'resources/lang/' );
define( 'VIEWS'  , ROOT.'resources/views/' );
define( 'APP'    , ROOT.'app/' );
define( 'IMG'    , APP_URL.'images/' );
define( 'DEBUG'  , $_ENV['APP_DEBUG']=='true'?1:0 );
define( 'IsMobile'  , $IsMobile );

/**
 * Get Route's
 */
    $base = '';
    if($_ENV['APP_BASE']!=''){
        $base = $_ENV['APP_BASE'];
    }
    define( 'APP_BASE', $base );

/**
 * Language page control
 * 'index' => 'page-name-es', 'page-name-en'
 */
    $lang_arr = [
        'home' => ['inicio',''],
        'privacy' => ['aviso-de-privacidad',''],
        'contact_send' => ['contacto_send',''],
        '404' => ['404',''],
        '405' => '405',
    ];

/**
 * Routes page control
 * 'index' => 'page-name-es', 'page-name-en'
 */
    $__WEBROUTES = [
        [ 'url' => '/', 'file' =>'home', 'method' => 'GET',
            'slug' => 'portada', 'name' => 'inicio'
        ],
        [ 'url' => '/aviso-de-privacidad', 'file' =>'privacy', 'method' => 'GET',
            'slug' => 'aviso-de-privacidad', 'name' => 'privacy'
        ],
        [ 'url' => '/contacto-enviar', 'file' =>'contact_send', 'method' => 'POST',
            'slug' => 'contacto_send', 'name' => 'contacto_send'
        ],
    ];
/**
 * FastRoute
 * $r->addRoute( Method, url, fileLoad );
 */
    #region fastroute
    $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) use ($__WEBROUTES) {

        foreach( $__WEBROUTES as $route ){
            $r->addRoute( $route['method'], $route['url'], $route['file']);
        }
        
    });

    // Fetch method and URI from somewhere
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    // Strip query string (?foo=bar) and decode URI
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri); //print_r($routeInfo); //return false;
    $vars = [];
    $handler = null;
    
    switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            $handler = "404";
            $vars = [];
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            $handler = "405";
            break;
        case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            break;
        default:
            $handler = "404";
            $vars = [];
            break;
    }
    
    $view_name = $handler;
    $view_file = VIEWS.$view_name;
    $pageID = $handler; 
    $__ROUTEURI = $vars;

    //var_dump($view_file); var_dump($vars); return false;
    #endregion fastroute

/**
 * lang process
 */
    #region lang
    $pos = strrpos($handler, "-en");
    if ($pos === false) {
        $id = $handler;
        $lang = "es";
    }else{
        $id = substr($handler, 0, strlen($handler)-3);
        $lang = "en";
    }
    $lang_link_es = APP_URL.$lang_arr[$id][0];
    $lang_link_en = APP_URL.$lang_arr[$id][1];
    
    //all-pages-global
    $__ = file_exists(LANG.$lang."/default.php") ? require(LANG.$lang."/default.php") : [];
    //individual-single-page
    $__sp = file_exists(LANG.$lang.'/'.$id.".php") ? require(LANG.$lang.'/'.$id.".php") : [];
    #endregion lang
/**
 * Ajax request's
 */
    if($view_name=='contact_send'){
        include_once(APP."bat/rd-contactform.php");
        return; exit(0);
    }
/**
 * Parse
 */
    ob_start();
    include_once($view_file.".php");
    $ob_view_file = ob_get_clean();

    $file_contents = html_entity_decode( $ob_view_file, ENT_QUOTES | ENT_XML1, 'UTF-8');

    $METATAG = everything_in_tags($ob_view_file, $lang, '@metatag', '@endmetatag');
    $CONTENT = everything_in_tags($ob_view_file, $lang, '@section', '@endsection');
    $PAGE_ID = search_pageID($ob_view_file);
    $PAGE_ID = $PAGE_ID ? $PAGE_ID : $pageID;
    
    include_once(VIEWS."layout/app.php")
?>
