(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.slider').slider({
      indicators: false
    });
    $('.fixed-action-btn').floatingActionButton();

  }); // end of document ready
})(jQuery); // end of jQuery name space

function add_member() {
  $.ajax({
       type: "POST",
       url: 'add.php',
       data:{action:'add_member'},
       success:function(html) {
         alert(html);
       }

  });
}