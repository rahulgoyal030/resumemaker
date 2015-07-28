$(document).ready(function  () {




   $("#download").click(function(event){
   	event.preventDefault();
   	window.location = "download.php";


    
});

   $("#addNew").click(function(event){
   	event.preventDefault();
    
});


   $("#logout").click(function(event){
     event.preventDefault();
     window.location="logout.php";


   });

});