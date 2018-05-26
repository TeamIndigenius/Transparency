var modal = document.getElementById('modal-add-item');
var add = document.getElementById('newItem');

add.onclick = function(){
    modal.style.display = "block";
}

var exit = document.getElementById("close-btn");

exit.onclick = function(){
    modal.style.display = "none";
}

// Dont delete this
window.onclick = function(event)
{
    if (event.target == modal)
    {
        modal.style.display = "none";
    }
    else if(event.target == modal_app){ // For app.js @change_password
    	modal_app.style.display = "none";
    }
}