function bigCards(){

	$.ajax({
        type:'POST',
        url:'sizes.php',
        data: { sizes: '12'},
        success:function(response){
          document.location.reload(true);
        }
    });
	


}

function smallCards(){
	$.ajax({
        type:'POST',
        url:'sizes.php',
        data: { sizes: '3'},
        success:function(response){
          document.location.reload(true);
        }
        
    });

}