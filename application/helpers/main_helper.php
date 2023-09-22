<?php
function dd($var_dump){

	echo '<pre>';
	var_dump($var_dump);
	echo '</pre>';
	echo '<hr>';

};

function ddd($var_dump){
	echo '<pre>';
	var_dump($var_dump);
	echo '</pre>';
	die();
};
function printError($type){
	switch ($type){
		case 'ticket_not_valid':
			return '<h2>Tento tiket nie je valídny! <a href="https://smerovka.sk">Naspäť na smerovku</a> </h2> ';
		case 'link_not_valid':
			return '<h2>Tento odkaz nie je valídny! <a href="https://smerovka.sk">Naspäť  na smerovku</a></h2> ';
	}
}
function makeNiceTime($time){
	return date("H:i", strtotime($time));
}
function makeNiceDate($time){
	return date("d.M.Y H:i", strtotime($time));
}
function return_object_from_array($data){
	foreach ($data as $d){
		return $d;
	}
}
function randomHash($bytes = 16){

	return bin2hex(random_bytes($bytes));
}
function niceUrl($data){

	return base_url($data);
}
function url_oprava($str, $separator = '-', $lowercase = FALSE)
{
	if ($separator === 'dash')
	{
		$separator = '-';
	}
	elseif ($separator === 'underscore')
	{
		$separator = '_';
	}

	$q_separator = preg_quote($separator, '#');

	$trans = array(
		'ľ'									=> 'l',
		'š'									=> 's',
		'č'									=> 'c',
		'ť'									=> 't',
		'ž'									=> 'z',
		'ý'									=> 'y',
		'á'									=> 'a',
		'í'									=> 'i',
		'é'									=> 'e',
		'ú'									=> 'u',
		'ä'									=> 'a',
		'ň'									=> 'n',
		'ô'									=> 'o',
		'ó'									=> 'o',
		'ĺ'									=> 'l',
		'ď'									=> 'd',
		'Ľ'									=> 'l',
		'Š'									=> 's',
		'Č'									=> 'c',
		'Ť'									=> 't',
		'Ž'									=> 'z',
		'Ý'									=> 'y',
		'Á'									=> 'a',
		'Í'									=> 'i',
		'É'									=> 'e',
		'Ú'									=> 'u',
		'Ä'									=> 'a',
		'Ň'									=> 'n',
		'Ô'									=> 'o',
		'Ó'									=> 'o',
		'Ĺ'									=> 'l',
		'ě'									=> 'e',
		'ö'									=> 'o',
		'Ď'									=> 'd',
		'ř'									=> 'r',
		'ŕ'									=> 'r',
		'Ŕ'									=> 'R',
		'ů'									=> 'u',
		'Ř'									=> 'r',
		'Ě'									=> 'e',
		'&.+?;'			=> '',
		'[^\w\d _-]'		=> '',
		'\s+'			=> $separator,
		'('.$q_separator.')+'	=> $separator
	);
	$str = strip_tags($str);
	foreach ($trans as $key => $val)
	{
		$str = preg_replace('#'.$key.'#i'.(UTF8_ENABLED ? 'u' : ''), $val, $str);
	}

	if ($lowercase === TRUE)
	{
		$str = strtolower($str);
	}

	return trim(trim($str, $separator));
}
function str_oprava($str, $separator = '-', $lowercase = FALSE)
{
	if ($separator === 'dash')
	{
		$separator = '-';
	}
	elseif ($separator === 'underscore')
	{
		$separator = '_';
	}

	$q_separator = preg_quote($separator, '#');

	$trans = array(
		'ľ'									=> 'l',
		'š'									=> 's',
		'č'									=> 'c',
		'%C4%8D'							=> 'c',
		'ť'									=> 't',
		'ž'									=> 'z',
		'ý'									=> 'y',
		'á'									=> 'a',
		'í'									=> 'i',
		'é'									=> 'e',
		'ú'									=> 'u',
		'ä'									=> 'a',
		'ň'									=> 'n',
		'ô'									=> 'o',
		'ó'									=> 'o',
		'ĺ'									=> 'l',
		'ď'									=> 'd',
		'Ľ'									=> 'l',
		'Š'									=> 's',
		'Č'									=> 'c',
		'Ť'									=> 't',
		'Ž'									=> 'z',
		'Ý'									=> 'y',
		'Á'									=> 'a',
		'Í'									=> 'i',
		'É'									=> 'e',
		'Ú'									=> 'u',
		'Ä'									=> 'a',
		'Ň'									=> 'n',
		'Ô'									=> 'o',
		'Ó'									=> 'o',
		'Ĺ'									=> 'l',
		'ě'									=> 'e',
		'ö'									=> 'o',
		'Ď'									=> 'd',
		'ř'									=> 'r',
		'ŕ'									=> 'r',
		'Ŕ'									=> 'R',
		'ů'									=> 'u',
		'Ř'									=> 'r',
		'Ě'									=> 'e',
		'&.+?;'			=> '',
		'[^\w\d _-]'		=> '',
		'\s+'			=> $separator,
		'('.$q_separator.')+'	=> $separator
	);
	$str = strip_tags($str);
	foreach ($trans as $key => $val)
	{
		$str = preg_replace('#'.$key.'#i'.(UTF8_ENABLED ? 'u' : ''), $val, $str);
	}

	if ($lowercase === TRUE)
	{
		$str = strtolower($str);
	}

	return trim(trim($str, $separator));
}
if ( ! function_exists('getLanguage'))
{
	function getLanguage()
	{
		return get_cookie('lang');
	}


}if ( ! function_exists('generateSeo'))
{
	function generateSeo($str, $separator = '-', $lowercase = true)
	{
		if ($separator === 'dash')
		{
			$separator = '-';
		}
		elseif ($separator === 'underscore')
		{
			$separator = '_';
		}

		$q_separator = preg_quote($separator, '#');

		$trans = array(
			'ľ'									=> 'l',
			'š'									=> 's',
			'č'									=> 'c',
			'%C4%8D'							=> 'c',
			'ť'									=> 't',
			'ž'									=> 'z',
			'ý'									=> 'y',
			'á'									=> 'a',
			'í'									=> 'i',
			'é'									=> 'e',
			'ú'									=> 'u',
			'ä'									=> 'a',
			'ň'									=> 'n',
			'ô'									=> 'o',
			'ó'									=> 'o',
			'ĺ'									=> 'l',
			'ď'									=> 'd',
			'Ľ'									=> 'l',
			'Š'									=> 's',
			'Č'									=> 'c',
			'Ť'									=> 't',
			'Ž'									=> 'z',
			'Ý'									=> 'y',
			'Á'									=> 'a',
			'Í'									=> 'i',
			'É'									=> 'e',
			'Ú'									=> 'u',
			'Ä'									=> 'a',
			'Ň'									=> 'n',
			'Ô'									=> 'o',
			'Ó'									=> 'o',
			'Ĺ'									=> 'l',
			'ě'									=> 'e',
			'ö'									=> 'o',
			'Ď'									=> 'd',
			'ř'									=> 'r',
			'ŕ'									=> 'r',
			'Ŕ'									=> 'R',
			'ů'									=> 'u',
			'Ř'									=> 'r',
			'Ě'									=> 'e',
			'&.+?;'			=> '',
			'[^\w\d _-]'		=> '',
			'\s+'			=> $separator,
			'('.$q_separator.')+'	=> $separator
		);
		$str = strip_tags($str);
		foreach ($trans as $key => $val)
		{
			$str = preg_replace('#'.$key.'#i'.(UTF8_ENABLED ? 'u' : ''), $val, $str);
		}

		if ($lowercase === TRUE)
		{
			$str = strtolower($str);
		}

		return trim(trim($str, $separator));
	}

	function activeLink($link)
	{
		$CI =& get_instance();
		$uri = $CI->uri->segment(1);
		if($uri == $link)
		{
			return 'active';
		}
		else
		{
			return '';
		}
	}

}
