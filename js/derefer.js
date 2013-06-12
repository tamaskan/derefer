$(document).ready(function() {
$('#content').on('click','a[href*="http"]:not([href*="' + document.location.hostname + '"])', function(event){
event.preventDefault();
var dereferer = "http://derefer.me/?";
var newHREF = dereferer + $( this ).attr('href') ;
$( this ).attr('href', newHREF);
window.open(newHREF);
});});