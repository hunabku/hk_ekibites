<?php
/**
 * Debug function with die() after
 * dd($var);
 */
function dd($var)
{
    var_dump($var);
    die();
}

function get_string_between($string, $start, $end){
	$string = ' ' . $string;
	$ini = strpos($string, $start);
	if ($ini == 0) return '';
	$ini += strlen($start);
	$len = strpos($string, $end, $ini) - $ini;
	return substr($string, $ini, $len);
}

function everything_in_tags($string, $lang, $tagname, $endtagname)
{
	//$pattern = "#<\s*?$tagname\b[^>]*>(.*?)</$tagname\b[^>]*>#s";
	$pattern = "#$tagname(.*?)$endtagname#s";
	preg_match($pattern, $string, $matches);
	$r = isset($matches[1]) ? $matches[1] : '';
    //$r = lang_parse($r,$lang);
	return $r;
}

function lang_parse($string,$lang)
{

    $lang_data = [];
    foreach (glob( LANG.$lang."/*.php") as $key => $filename) {
        $path_parts = pathinfo($filename);
        $lang_data[$path_parts['filename']] = (object) require_once($filename);
    }
    $langs = (object) $lang_data['home'];
    //echo "<pre>"; print_r($langs); echo "</pre>";
    echo "<pre>"; print_r($langs->{'hello'}); echo "</pre>"; return false;


    return preg_replace_callback('/{{\s*__\(([\'"])(.*?)\1\)\s*}}/', function($m) use ($lang,$lang_data){
        $r = trim($m[0]);
        $start = strpos($r, '\'') + 1 ;
        $end = strrpos($r, '\'');
        $length = $end-$start;
        $rest = mb_substr($r, $start, $length ); 
        $arr = explode(".", $rest);
        $lang_file = file_exists(LANG.$lang.'/'.$arr[0].".php") ? require(LANG.$lang.'/'.$arr[0].".php") : [];
        
        if( $lang_file ){
            $search = $lang_file[ $arr[1] ] ?? '';
            return $search;

        }
        return '';
    }, $string);
}

function search_pageID($string)
{
	$pattern = "#@body_pageID\(\'(.*?)\'\)#s";
	preg_match($pattern, $string, $matches);
	$r = isset($matches[1]) ? $matches[1] : '';
	if($r==''){
		$pattern = "#@body_pageID\(\"(.*?)\"\)#s";
		preg_match($pattern, $string, $matches);
		$r = isset($matches[1]) ? $matches[1] : '';
	}
	return $r;
}

if(!function_exists('asset')) {
    function asset($url = '')
    {
        return $url != '' ? IMG . $url : '#';
    }
}

if(!function_exists('url')) {
    function url($url = '')
    {
        return $url != '' ? URL . $url : '#';
    }
}

if(!function_exists('whatsapp_link')) {
    /*
     * Whatsapp
     * link
     */
    function whatsapp_link($phone,$message){

        $wab_phone = $phone;
        $wab_text = $message;

        $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
        $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
        $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
        $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
        // check if is a mobile
        if ($iphone || $android || $palmpre || $ipod || $berry == true)
        {
            $wab_link =  "https://api.whatsapp.com/send?phone=";
        } else {
            $wab_link =  "https://web.whatsapp.com/send?phone=";
        }
        $wab_link =  "https://api.whatsapp.com/send?phone=";

        return $wab_link.$wab_phone."&text=".$wab_text."";

    }
}

if(!function_exists('hkImageTagWebP')) {
    /**
     * Crea tag picture compatibilidad para webp
     */
    function hkImageTagWebP($attr=null)
    {

        $class = $attr["class"]??'';
        $src = $attr["src"]??'';
        $webp= $attr["webp"]??'';
        $width = $attr["width"]??'100%';
        $height = $attr["height"]??'auto';
        $alt = $attr["alt"]??'';
        $extra_attr = $attr["extra-attr"]??'';


        $lazy = strpos($class, "lazy") !== false ? true : false;
        $img = "<picture>
					<source
						type='image/webp'
						srcset='".asset($webp)."'
					  />
					<img 
					    class='".$class." " .
                        ($lazy?'data-':'') . "' src='".asset($src).
                        "' alt='". strip_tags($alt) .
					    "' width='". $width .
					    "' $height='". $height .
					    " ". $extra_attr .

                        "'/>
				</picture>";
        return $img;

    }
}


