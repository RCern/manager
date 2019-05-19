  $.ajax({
        url: "getTabsAssets.php",
        type: "POST",
        data: {projectId1:1},
        dataType: "json",
        success: function(data){
         
			console.log(data);            
        },
        error: function(data){
        	alert(data);
        }
    });



 var table3 = new Tabulator("#tabsAssets",
    {
        //height:"400px",
        layout:"fitColumns",
        ajaxURL:"getTabsAssets.php",
         //ajax URL
        ajaxConfig:"post", //ajax HTTP request type
        ajaxContentType:"json", // send parameters to the server as a JSON encoded string
        paginationSize:20,
            columns:
            [
            {title:"Name", field:"name", sorter:"string", width:200, editor:"input"},
            {title:"Month", field:"month", sorter:"number", width:200, editor:"select", editorParams:{values:["1", "2", "3","4","5","6","7","8","9","10","11","12"]}},
            {title:"Value", field:"Revenue", sorter:"number",editor:"input" },
     ,
    {title:"Delete", field:"delete", align:"center",formatter:"buttonCross", cellClick:function(e, cell){
        var data = JSON.stringify(cell.getRow().getData());
        console.log(data);
        if(confirm("Are you sure you want to delete this project?")){
         $.ajax(
        {
            type:'POST',
            url:'deleteProject.php',
            data: { obj:data},
            success:function(response)
            {
                table.redraw(true);
            }
        }); 
    }}},
    ], 
    cellEdited:function(cell)
    {
        var data = JSON.stringify(cell.getData());


        $.ajax(
        {
            type:'POST',
            url:'updateTabs.php',
            
            data: { obj:data},
            success:function(response)
            {
            
            }
        }); 
    }
}); 

 var table1 = new Tabulator("#tabsLiabilities",
    {
        //height:"400px",
        layout:"fitColumns",
        ajaxURL:"getTabsLiabilites.php",
         //ajax URL
        ajaxConfig:"post", //ajax HTTP request type
        ajaxContentType:"json", // send parameters to the server as a JSON encoded string
        paginationSize:20,
            columns:
            [
            {title:"Name", field:"name", sorter:"string", width:200, editor:"input"},
            {title:"Month", field:"month", sorter:"number", width:200, editor:"select", editorParams:{values:["1", "2", "3","4","5","6","7","8","9","10","11","12"]}},
            {title:"Value", field:"price", sorter:"number",editor:"input" },
     ,
    {title:"Delete", field:"delete", align:"center",formatter:"buttonCross", cellClick:function(e, cell){
        var data = JSON.stringify(cell.getRow().getData());
        console.log(data);
        if(confirm("Are you sure you want to delete this project?")){
         $.ajax(
        {
            type:'POST',
            url:'deleteProject.php',
            data: { obj:data},
            success:function(response)
            {
                table.redraw(true);
            }
        }); 
    }}},
    ], 
    cellEdited:function(cell)
    {
        var data = JSON.stringify(cell.getData());


        $.ajax(
        {
            type:'POST',
            url:'updateTabs.php',
            
            data: { obj:data},
            success:function(response)
            {
            
            }
        }); 
    }
}); 