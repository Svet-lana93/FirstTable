$(function(){
	let textarea = $("#textarea");
	let button = $("button#Button");
	
   
	$(button).click(function(){	
	  let message = $(textarea).val().trim();
	  
	  if (message != "") {
		$('#MessageBox').append(`
			<div class="Message">
			 <div class="Name">
			  <h2>NAME</h2>
			 </div>
			 <div class="Empty"></div>
			 <div class="Data">
			  <h2>DATA</h2>
			 </div>
			 <div class="Clear"></div>
			 <div class="Text">${message}</div>
			</div>
		`);
       $(textarea).val("");	
	 }})
})

