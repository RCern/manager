

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
    groupBy:["teamID"],
        columns:[
        {title:"Team ID", field:"teamID", sorter:"number", width:200},
        {title:"Team Name", field:"Tname", sorter:"string", width:200,editor:"input"},
        {title:"Employee Name", field:"name", sorter:"string", width: 200 , editor:"input"},
        {title:"Delete", field:"delete", width:100, align:"center",formatter:"buttonCross", cellClick:function(e, cell){
        var data = JSON.stringify(cell.getRow().getData());
        console.log(data);
        if(confirm("Are you sure you want to delete this project?")){
         $.ajax(
        {
            type:'POST',
            url:'deleteEmployee.php',
            data: { obj:data},
            success:function(response)
            {
                
            }
        }); 
    }}},
    ], 
    cellEdited:function(cell){
        var data = JSON.stringify(cell.getData());
                console.log(data);

        $.ajax({
        type:'POST',
        url:'updateTabsE.php',
        
        data: { obj:data},
        success:function(response){
          alert(response);
        }
    });

        
    
}
});



