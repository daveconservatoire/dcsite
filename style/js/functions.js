$(document).ready(function(){
$("#myModal").modal({show: false});
});

function launchModal(title, body){
$("#modal-title").text(title);
$("#modal-text").text(body);
$("#myModal").modal('show');
}


function postEvent(userid, type, event, data){
$.post("/api/events", { "userid": userid, type:"qanswer", "event": event, "data":data },
   function(data) {
     processResponse(data);
   });

}

function processResponse(data){

var obj = jQuery.parseJSON(data);
if (obj.badge!=""){
launchModal("Congratulations!  You just earned the "+obj.badge+" badge.","Well done :)");
}
}

function addPoints(howmany){
var points =$("#points").text();
$("#points").fadeTo(1000, 0.1, function () {  $("#points").text((parseInt(points)+howmany));});
$("#points").fadeTo(1000, 1);}

function setBar(percent) {
    $('#bar').css('width',percent+'%');
}


