<html>
<head>

<title>Morehead ACM</title>

<link rel="stylesheet" href="css/sitesAndResourcesStyle.css" type="text/css">

</head>

<body>

	<!-- include navigation bar and header from external html -->
	<?php include('includes/navbarAndHeader.html'); ?>
  
  
	<div id="contentPanel" class="panel">
		<ul id="codingCategory">
			<li>
				<div class="categoryTitle">Coding</div>
				<ul class="code_sub_menu">
					<!-- Coding category content -->
					<li><a href="http://codeacademy.com" target="_blank">Code Academy</a><br/></li>
					<li><a href="http://learncodethehardway.com" target="_blank">Learn Code The Hard Way</a><br/></li>
					<li><a href="http://htmldog.com" target="_blank">HTML Dog</a><br/></li>
					<li><a href="http://trypython.com" target="_blank">Try Python</a><br/></li>
					<li><a href="http://rubymonk.com" target="_blank">Ruby Monk</a><br/></li>
					<li><a href="http://codingbat.com" target="_blank">Coding Bat</a></li>
					<li><a href="http://jsfiddle.net" target="_blank">JSFiddle</a></li>
					
				</ul>
			</li>
		</ul>
		
		<ul id="bookCategory">
			<li>
				<div class="categoryTitle">Book Recommendations</div>
				<ul class="book_sub_menu">
					<!-- Book recommendations category content -->
					<br />
					<a href="http://www.amazon.com/Clean-Code-Handbook-Software-Craftsmanship/dp/0132350882#reader_0132350882" target="_blank">
						<img class="align-left bookImage" src="res/CleanCode.jpg" alt="Clean Code">
					</a>
					This book is loaded with wisdom to help you learn to write code that is cleaner, more readable and more efficient.
					Definitely a must-read. The examples are presented in Java. But the ideas can be applied to other object oriented languages
					as well.
				</ul>
			</li>
		</ul>
	</div>
</body>

<!-- To allow the pages content to load faster, all scripts will load in last. -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script language="Javascript"></script>
<script src="scripts/indexScript.js" type="text/javascript"></script>
<script src="scripts/dropdown.js" type="text/javascript"></script>

</html>
