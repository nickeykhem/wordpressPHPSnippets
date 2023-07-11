<?
// function that runs when shortcode is called
function functionName() { 
  
// Things that you want to do.
$message = 'Hello world!'; 
  
// Output needs to be return
return $message;
}
// register shortcode
add_shortcode('shortCodeName', 'functionName');
