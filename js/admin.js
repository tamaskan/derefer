$(document).ready(function(){



	$('.dereferbutton').click(function(event){
		event.preventDefault();
		var post = $( "#dereferer_input" ).serialize();
		$.post( OC.filePath('derefer', 'writefile', 'writefile.php') , post, function(data){
			
			if (data == 'true') {
			$(".dereferbutton").removeClass('red');
			$(".dereferbutton").addClass('green');
			alert("Speichern erfolgreich");
			}
			else {
			$(".dereferbutton").removeClass('green');
			$(".dereferbutton").addClass('red');
			alert("Speichern fehlgeschlagen");
			}
		});
	});



});
