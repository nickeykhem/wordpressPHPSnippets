<?

if($_SERVER['REQUEST_URI']=="/somedir/some_page_you_want_to_redirect")
{
wp_redirect( ‘http://mysite.com/mynewpost’, 301 );
exit;
}
