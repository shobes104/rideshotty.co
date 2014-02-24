function getRides(){
	$('#rides_list').empty();
	$.getJSON( "../data/rides.json", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
	$('#rides_list').append('<a href="ridedetails.html?id='+val.id+'" class="list-group-item"><div style="float:left;"><img width="80px" src="'+val.image+'"/></div><div style="float:left; margin-left: 15px; font-size:12px;">Going to '+ val.to +'<br/>' + val.date + '<br/> <span class="glyphicon glyphicon-star" style="color: orange; font-size: 2em;"></span><span class="glyphicon glyphicon-star" style="color: orange; font-size: 2em;"></span><span class="glyphicon glyphicon-star" style="color: orange; font-size: 2em;"></span></br><span class="badge" style="background: #333; color: #eee;">3 shared friends</span></div><div style="clear: both;"/></a>');
  });
});
}

function getRide(id){
	$.getJSON( "../data/rides.json", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
	//alert('looking for'+id);
	if(val.id == id){
		$('#profilepic').html('<img style="margin-left:10px;margin-top:10px;" width="180px" src="'+val.image+'" />');
		$('#name_box').text(val.name);
		$('#where_box').text(val.to);
		$('#when_box').text(val.date);
		
	}
	//$('#rides_list').append('<a href="ridedetails.html?id='+val.id+'" class="list-group-item"><div style="float:left;"><img width="80px" src="'+val.image+'"/></div><div style="float:left; margin-left: 15px; font-size:12px;">Going to '+ val.to +'<br/>' + val.date + '<br/>4/5 Stars</div><div style="clear: both;"/></a>');
  });
});
}

function sendTxt(){
	//console.log('txt');
	$('#myModal').modal('show');
	//https://api.sendhub.com/v1/messages/?username=NUMBER&api_key=APIKEY
	//sjsonline@gmail.com
	//a2297bce8042c9e5b44b9d814735edecdf41002c
	//"id": 10796671
	
	// $.ajax({
	  // type: "POST",
	  // url: "https://api.sendhub.com/v1/messages/?username=4123036291&api_key=a2297bce8042c9e5b44b9d814735edecdf41002c",
	  // data: '{"contacts": [10796671], "text": "Testing"}',
	  // success: success,
	  // dataType: dataType
	// });
	
	// request = $.ajax({
		// url: "https://api.sendhub.com/v1/messages/?username=4123036291&api_key=a2297bce8042c9e5b44b9d814735edecdf41002c",
		// type: "post",
		// contentType: 'application/json',
        // dataType: 'json',
		// data: eval({"contacts": [10796671], "text": "Testing"})
	// });

	// request.done(function (response, textStatus, jqXHR){
		// console.log(response.success);
	// });
	
	//https://api.sendhub.com/v1/contacts/?username=4123036291&api_key=a2297bce8042c9e5b44b9d814735edecdf41002c
	
}

function querystring(key) {
		   var re=new RegExp('(?:\\?|&)'+key+'=(.*?)(?=&|$)','gi');
		   var r=[], m;
		   while ((m=re.exec(document.location.search)) != null) r.push(m[1]);
		   return r;
		}