$(function(){

});

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$('.destroy-modal').click(function(){
    var $this = $(this);
    var url = $this.attr('data-url');
    var $form = $('.destroy_form');
    $form.attr('action', url);
});
