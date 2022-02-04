<?
//Replace all instances of a string in WordPress

function replace_text($text) {
	$text = str_replace('look-for-this-string', 'replace-with-this-string', $text);
	$text = str_replace('look-for-that-string', 'replace-with-that-string', $text);
	return $text;
}
add_filter('the_content', 'replace_text');
