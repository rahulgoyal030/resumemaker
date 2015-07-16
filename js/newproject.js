$(document).ready(function  () {

 $("#addNew").click( function  () {
 	
  	$(this).before($('<input>', {
        class: 'projectName infoArea ',

        placeholder : "project heading",
        type : "text",
        name : "projectName"
        
        }),$('<br>',{}),
  	 $('<textarea />',{
  	 	class: "projectDetail infoArea",
  	 	name : "projectDetail",
  	 	placeholder:"write project details here",
  	 	rows : "8",
  	 	cols :"95"
  	 	
  	 })


  	);

  	//$(".projectName,.projectDetail").addClass("newProjectMargin");


 });

});