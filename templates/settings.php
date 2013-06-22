<style>
.dereferbutton {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
   
.green {color:green;}

.red {color:red;}
</style>
<form id="derefer">
	<fieldset class="personalblock" style="background-color:lightgreen">
	<strong>Derefer-Service</strong>
<select id="dereferer_choice">
  <option value="http://derefer.me/?">derefer.me</option>
  <option value="http://dereferer.de/?">dereferer.de</option>
  <option value="http://www.dereferer.org/?">dereferer.org</option>
  <option value="" selected>Custom</option>
</select> 
<input type="text" name="dereferer_input" id="dereferer_input" style="width:200px"/>
<a href="javascript:void(0)" class="dereferbutton">Speichern</a>
</fieldset>
</form>
<script>
$('#dereferer_choice').change(function(){
document.getElementById("dereferer_input").value = document.getElementById("dereferer_choice").value;
});
</script>
