<!DOCTYPE html>
<html>
<head>
	<title>resume maker</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

	<script type="text/javascript" src="js/newProject.js"></script>
	<script type="text/javascript" src="js/submit.js"></script>
</head>
<body>
<div id="space" >
<h1 id="heading">ResumeMaker </h1>
<div>
<form class="data" ng-app="myApp" ng-controller="control" name="myForm" method="post"   novalidate>
<div class="info">
<input type="text" id="name" name="name"  placeholder="your name"  autocomplete="on" ng-model="name"  required>

<input type="text" id="degree" name="degree"  placeholder="qualification   e.g B.tech cse"  autocomplete="on" required> <br>
<input type="email" id="email" name="email"  placeholder="your email-id"  autocomplete="on" required>
<input type="number" id="phone" name="phone"  placeholder="phone-no"  required> <br>
<input type="date" name="dob" id="dob" placeholder="birth date"  required>
<input type="text" id="college" name="college"  placeholder="college name"  autocomplete="on" required><br>
</div><br>
<div class="photo">
<label class="infoHeading"> upload your photo here   </label>
<input type="file" id="pic">
	
</div>


<br>
<p class="infoHeading">objective :- </p>
<div class="infoArea">
<textarea rows="6" cols="85" name="objective" id="objectiveText" placeholder=" write your objective here ">
</textarea>
</div>


<p class="infoHeading">Skill Set :-</p>
<div class="infoArea">
<textarea rows="8" cols="85" name="skill" id="skillText" placeholder=" write your skills here ">
</textarea>
</div>

<p class="infoHeading">Areas of interest :- </p>
<div class="infoArea">
<textarea rows="6" cols="85" name="interest" id="interestText" placeholder=" write your areas of interests here ">
</textarea>
</div>

<p class="infoHeading">Projects :-</p>
<div class="infoArea">
<input type="text" class="projectName" name="projectName"  placeholder="project heading"   required>
<textarea rows="8" cols="95" name="projectDetail" class="projectDetail" placeholder=" write projects details here  ">
</textarea>
</div>

<div class="newProjects"></div>
<button type="submit"  id="addNew">add project</button>
</div>
<br><br><br><br> <br>
<div class="submitResult">
<button type="submit"  id="saveResume" class="result">save</button>
<button type="submit"  id="download" class="result">download</button>
</div>

<br><br><br>
	


</form>
</div>
	

</div>
<script type="text/javascript" src="js/myApp.js"></script>
<script type="text/javascript" src="js/controllers/controller.js"></script>

</body>
</html>