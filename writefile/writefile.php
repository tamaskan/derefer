<?php

OCP\User::checkAdminUser();
if (preg_match("/^https?:\/\/([a-zA-Z0-9_\-]+:[^\s@:]+@)?((([a-zA-Z][a-zA-Z0-9\-]+\.)+[a-zA-Z\-]+)|((2(5[0-5]|[0-4][0-9])|[01][0-9]{2}|[0-9]{1,2})\.(2(5[0-5]|[0-4][0-9])|[01][0-9]{2}|[0-9]{1,2})\.(2(5[0-5]|[0-4][0-9])|[01][0-9]{2}|[0-9]{1,2})\.(2(5[0-5]|[0-4][0-9])|[01][0-9]{2}|[0-9]{1,2})))(:[0-9]{1,5})?(\/[!~*'\(\)a-zA-Z0-9;\/\\\?:\@&=\+\$,%#\._-]*)*$/",$_POST['dereferer_input'])) {
$content = "$(document).ready(function() {";
$content .= " $('#content').on('click','a[href*=".'"http"'."]:not([href*=".'"'."' + document.location.hostname + '".'"'."])', function(event){";
$content .= " event.preventDefault(); var dereferer = ";
$content .= '"'.$_POST['dereferer_input'].'"';
$content .= "; var newHREF = dereferer + $( this ).attr('href') ;";
$content .= " $( this ).attr('href', newHREF);";
$content .= " window.open(newHREF);";
$content .= " });});";

file_put_contents(OC_App::getAppPath('derefer').'/js/derefer.js',$content);
echo 'true';
} 
else {
echo 'false';
}
?>
