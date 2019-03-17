function readJSON() {
    $.ajax({
        type: "POST",
        url: "connect.php",
        dataType:'json', //or HTML, JSON, etc.
        success: function(response){
            
            //echo what the server sent back...
        }
    });
};

$(document).ready(function(){
    $('.sidenav').sidenav();
  });

  