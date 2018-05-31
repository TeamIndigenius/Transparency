// ==============DATE==============
// $(function(){
	// $('#form-validation').submit(function(event){ 
	// 	var maxDate = $('#date').datepicker({ maxDate: 1 });
	// 	alert(maxDate);
		// var dateInput = $('date').val()
		// if(isDate(dateInput))
		// 	alert('valid date');
		// else
		// 	alert('invalid date');
		// alert(#date);
	// 	event.preventDefault();
	// });
// });

var today = new Date();
var dd =today.getDate();
var mm = today.getMonth()+1;
var yyyy = today.getFullYear();
	if(dd<10){
		dd='0'+dd
	}
	if(mm<10){
		mm='0'+mm
	}

	today = yyyy+'-'+mm+'-'+dd;
	document.getElementById("date").setAttribute("max",today);

//===========DESCRIPTION===========
$('description').val(300);
var description =$('#description');
var maxCharacters = description.val();

$('#textarea').bind('keyup keydown',function() {
	var characters = $(this).val().length;
	description.val(maxCharacters-characters);
	$('#textarea').attr('maxlength','300');
});