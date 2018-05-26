// Get the modal
var modal = document.getElementById("newItemModal");
// Get the button that opens the modal
var btn = document.getElementById("newItem");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}      

var viewModal = document.getElementById("viewItemModal");
var viewBtn = document.querySelectorAll('.item-box');
var viewClose = document.getElementsByClassName("closeView")[0];


[].forEach.call(viewBtn, function(el) {
  el.onclick = function() {
    viewModal.style.display = "block";
  }
})

viewClose.onclick = function() {
    viewModal.style.display = "none";
}

viewBtn.onclick = function(){
    viewModal.style.display = "none";
}           

window.onclick = function(event) {
    if (event.target == viewModal){
        viewModal.style.display = "none";
    }
    else if(event.target == modal_app){ // For app.js @change_password
        modal_app.style.display = "none";
    }
}