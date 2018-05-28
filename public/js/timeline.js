
// Script for showing/hiding comments
var status = "none";
function showComments(el){
	var item = document.getElementById(el);
	if(status == "none"){
		status = "block";
	}
	else{
		status = "none";
	}
	item.style.display = status;
}

// Script for edit modal
var modal = document.getElementsByClassName('modal-whole-div');
var cmodal = document.getElementsByClassName('cmodal');
var close_btn = document.getElementById('close-btn');
var close_cbtn = document.getElementById('close-cbtn');
function showModal(el){
	var id = 'modal-'+el;
	var edit_modal = document.getElementById(id);
	edit_modal.style.display = "block";
}

function showCommentModal(el){
	var id = 'modal-comment-'+el;
	var edit_modal = document.getElementById(id);
	edit_modal.style.display = "block";
}

//------------------------------------------- window click for modal
window.onclick = function(event)
{
    if(event.target == modal_app){ // For app.js @change_password
    	modal_app.style.display = "none";
    }

    for (var i = modal.length - 1; i >= 0; i--) {
    	if(event.target == modal[i] || event.target == close_btn || event.target == close_cbtn){
    		modal[i].style.display = "none";
    	}
    }

    for (var i = cmodal.length - 1; i >= 0; i--) {
    	if(event.target == cmodal[i] || event.target == close_cbtn){
    		cmodal[i].style.display = "none";
    	}
    }
}