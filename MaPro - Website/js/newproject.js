$(document).ready(function(){
$("#create").click(function(){
var name = $("#name_prefix").val();
var priority = $("#priority_prefix").val();
var team = $("#team").val();
var date = $("#date").val();
var hours = $("#hour_prefix").val();
var cost = $("#cost_prefix").val();
var revenues = $("#revenues_prefix").val();
// Checking for blank fields.
/*if( name =='' || priority =='' || team =='' || date =='' || hours =='' || cost =='' || revenues ==''){
alert("Please fill all fields...!!!!!!");
}else {*/
$.post("newProject.php",{ name1: name, priority1: priority, team1: team, date1 : date, hours1: hours, cost1: cost, revenues1: revenues},
function(data) {
	alert("Done.");

}

);

});
});