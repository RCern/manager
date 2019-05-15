

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
var table = new Tabulator("#example", {
    //height:"311px",
    layout:"fitColumns",
    ajaxURL:"getTabsE.php", //ajax URL
    ajaxConfig:"POST", //ajax HTTP request type
    ajaxContentType:"json", // send parameters to the server as a JSON encoded string
    paginationSize:20,
        columns:[
         {title:"Employee ID", field:"employeeID", sorter:"number", width:200},
        {title:"Name", field:"name", sorter:"string", width:200,editor:"input"},
        {title:"Function", field:"type", sorter:"string",editor:"input"},
        {title:"Team assigned", field:"Tname", sorter:"string", width: 200 , editor:"select",editorParams:{values: TeamNames}},
        {title:"Salary", field:"salary", sorter:"number", editor:"input"},
        {title:"Delete", field:"delete", align:"center",formatter:"buttonCross", cellClick:function(e, cell){
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
