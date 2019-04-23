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

function listShow(){

    

var dateEditor = function(cell, onRendered, success, cancel, editorParams){
    //cell - the cell component for the editable cell
    //onRendered - function to call when the editor has been rendered
    //success - function to call to pass the successfuly updated value to Tabulator
    //cancel - function to call to abort the edit and return to a normal cell
    //editorParams - params object passed into the editorParams column definition property

    //create and style editor
    var editor = document.createElement("input");

    editor.setAttribute("type", "date");

    //create and style input
    editor.style.padding = "3px";
    editor.style.width = "100%";
    editor.style.boxSizing = "border-box";

    //Set value of editor to the current value of the cell
    editor.value = moment(cell.getValue(), "YYYY-MM-DD").format("YYYY-MM-DD")

    //set focus on the select box when the editor is selected (timeout allows for editor to be added to DOM)
    onRendered(function(){
        editor.focus();
        editor.style.css = "100%";
    });

    //when the value has been set, trigger the cell to update
    function successFunc(){
        success(moment(editor.value, "YYYY-MM-DD").format("YYYY-MM-DD"));
    }

    editor.addEventListener("change", successFunc);
    editor.addEventListener("blur", successFunc);

    //return the editor element
    return editor;
};
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
var table = new Tabulator("#tabs", {
    //height:"400px",
    layout:"fitColumns",
    ajaxURL:"getTabs.php", //ajax URL
    ajaxConfig:"POST", //ajax HTTP request type
    ajaxContentType:"json", // send parameters to the server as a JSON encoded string
    paginationSize:20,
        columns:[
        {title:"Project ID", field:"projectID", sorter:"number", width:200},
        {title:"Project Name", field:"name", sorter:"string", width:200,editor:"input"},
        {title:"Priority", field:"priority", sorter:"number",editor:"select", editorParams:{values:["1", "2", "3", "4","5"]}},
        {title:"Team assigned", field:"Tname", sorter:"string", width: 200 , editor:"select",editorParams:{values: TeamNames}},
        {title:"Deadline", field:"deadline", sorter:"date", sorterParams:{format:"YYYY-MM-DD",alignEmptyValues:"top",},align:"center",editor: dateEditor},
        {title:"Progress", field:"percentageDone", formatter:"progress", sorter:"number",editor:"number", editorParams:{
    min:0,
    max:100,
    step:1,
}},
    ], 
    cellEdited:function(cell){
        var data = JSON.stringify(cell.getData());
                console.log(data);

        $.ajax({
        type:'POST',
        url:'updateTabs.php',
        
        data: { obj:data},
        success:function(response){
          
        }
    });

        
    
}
});

    


}