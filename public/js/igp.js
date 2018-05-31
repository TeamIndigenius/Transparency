// Validation for item name and price
$('#item_name').on('input', function(){
    var itemName = $(this);
    var regex = new RegExp("^([A-Z]{1}[a-z]+( )?)+$");
    var test = regex.test(itemName.val());

    if(test){
        $("#nameMsg").text("Item name is valid");
    }else{
        $("#nameMsg").text("Item name must begin with an uppercase letter");
    }
});

$('#price').on('input', function(){
    var price = $(this);
    var regex = new RegExp("^[1-9]{1}([0-9]{1,2})?$");
    var test = regex.test(price.val());

    if(test){
        $("#priceMsg").text("Price valid");
    }else{
        $("#priceMsg").text("Price invalid");
    }
});

// Add Item Modal
var addModal = document.getElementById('modal-add-item');        
var addBtn = document.getElementById('newItem');        
var exit = document.getElementById("close-btn");

addBtn.onclick = function() {
    addModal.style.display = "block";
}

exit.onclick = function() {
    addModal.style.display = "none";
}

// window.onclick = function(event) {
//     if (event.target == addModal) {
//         addModal.style.display = "none";
//     }
// }   

// View Item Modal

var status = "none";
var id;
var item;
var closeBtn = document.getElementById("close-btn");
function viewModal(el){
    id = "modal-view-"+el;
    item = document.getElementById(id);
    if(status == "none"){
        status = "block";
    }
    else{
        status = "none";
    }
    item.style.display = status;
}

window.onclick = function(event){
    event.target.style.display = "none";
}

// Edit Item Modal
var editCloseBtn = document.getElementById("edit-close-btn");
var editStatus = "none";
var editId;
var editItem;

function editModal(el){
    editId = "modal-edit-"+el;
    editItem = document.getElementById(editId);
    if(editStatus == "none"){
        editStatus = "block";
    }
    else{
        editStatus = "none";
    }
    editItem.style.display = editStatus;
}

editCloseBtn.onclick = function() {
    editItem.style.display = "none";
}

// Confirm Delete Modal
var delStatus = "none";
var delId;
var delItem;

function deleteModal(el){
    delId = "modal-confirm-"+el;
    delItem = document.getElementById(delId);
    if(delStatus == "none"){
        delStatus = "block";
    }
    else{
        delStatus = "none";
    }
    delItem.style.display = delStatus;
}

// User cancels deletion
function closeModal(el) {
    alert("Hey");
    var closeId = "modal-confirm-"+el;
    var closeItem = document.getElementById(closeId);
    closeItem.style.display = "none";
}

