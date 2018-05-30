$(document).ready(function(){
    $('.delete-event').click(function(){
        $(this).parent().remove();
        return false;
    });

});