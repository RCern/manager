

var TeamNames = new Array();
function useReturnData(data){
    var Tnames = data;
    Tnames.forEach(function(element){
        TeamNames.push(element.Tname);
    })

}

 function getTname(){
     
    $.ajax({
        url: "Tnames.php",
        type: "POST",
        dataType: "json",
        success: function(data){
         
            useReturnData(data);
            
        }});

    
};

getTname();
var table = new Tabulator("#teams", {
    //height:"311px",
    layout:"fitColumns",
    ajaxURL:"getTabsT.php", //ajax URL
    ajaxConfig:"POST", //ajax HTTP request type
    ajaxContentType:"json", // send parameters to the server as a JSON encoded string
    paginationSize:20,
        columns:[
        {title:"Team ID", field:"teamID", sorter:"number"},
        {title:"Team Name", field:"Tname", sorter:"string",editor:"input"},
        {title:"Delete", field:"delete", align:"center",formatter:"buttonCross",width:100 , cellClick:function(e, cell){
        var data = JSON.stringify(cell.getRow().getData());
        console.log(data);
        if(confirm("Are you sure you want to delete this team?")){
         $.ajax(
        {
            type:'POST',
            url:'deleteTeam.php',
            data: { obj:data},
            success:function(response)
            {
                
            }
        }); 
    }}},
    ], 
    cellEdited:function(cell){
        var data = JSON.stringify(cell.getData());
               

        $.ajax({
        type:'POST',
        url:'updateTabsT.php',
        
        data: { obj:data},
        success:function(response){
         
        }
    });

        
    
}
});



