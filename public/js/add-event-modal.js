var modal_div = document.getElementById('modal-whole-div');

var add = document.getElementById("add-event-box");

var exit = document.getElementById("close-btn");

add.onclick = function()
{
    modal_div.style.display = "block";
}

exit.onclick = function()
{
    modal_div.style.display = "none";
}

// Dont delete this -------------------------------
window.onclick = function(event)
{
    if (event.target == modal_div)
    {
        modal_div.style.display = "none";
    }
    else if(event.target == modal_app){ // For app.js @change_password
    	modal_app.style.display = "none";
    }
}
// ------------------------------------------------

maxCharacters = 160;
maxWords = 300;
$('#count').text(maxWords);


$('textarea').bind('keyup keydown', function() {
    var count = $('#count');
    var txtVal = $(this).val();
	var words, limited;

	if (txtVal==""){
		words = 0;
	}
	else{
		words = txtVal.trim().replace(/\s+/gi, ' ').split(' ').length;
	}

    if (words > maxWords){
    	count.addClass('over');
        limited = $.trim(txtVal).split(" ", maxWords);
        limited = limited.join(" ");
        $(this).val(limited);
    } else {
    	count.removeClass('over')
    }

    count.text(maxWords - words);
});