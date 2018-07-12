<!DOCTYPE html>
<html lang="en-US" style="cursor:pointer">


<head>

<link rel="icon" type="image/png" href="beastMode.png">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta name="description" content="Beast Mode Game">
<meta name="keywords" content="Beast Mode Game">
<meta name="author" content="John Humbert Duran">
  
<title>Beast Mode Game</title>


<style>

* {box-sizing:border-box}

html{
background-color:dodgerblue;
font-family: /* Verdana, */sans-serif;
}

.footer{
	width:100%;
	margin: -15px auto;
	background-color:rgba(0,0,0, .1);
	color:#ffffff;
	text-align:center;
}

#test{
	position:absolute;
	left:500px;
	top:250px;
	padding:100px;
	width:50px;
	height:50px;
}

#but{
	/* background-color:red; */
	position:absolute;
	/* padding:5px; */
	border:none;
	width:100px;
	/* color:#fff; */
	left:50px;
}


#so{
	font-size:5em;
	margin-top:0;
	color:#333;
}

#score{
	background-color:rgba(0, 0, 0, .1);
	border:none;
	text-align:center;
	font-size:15em;
	height:250px;
	color:#333;
	width:100%;
}

#start{
	background-color:cornflowerblue;
	position:absolute;
	padding: 100px;
	height: 100%;
	width: 100%;
	top:0;
}

.logo{
	position: absolute;
	height: 80%;
	left: 200px;
	width:60%;
	top: 0;
}

#loads{
	background-color: darkgoldenrod;
	position: absolute;
	border-radius: 10px;
	padding: 30px 0;
	bottom:10%;
	left:300px;	
	width: 5px;
	-webkit-transition: width 3s; /* Safari */
    transition: width 3s; 
}

#startLoad{
	position: absolute;
	font-size: 3em;
	color: #fff;
	bottom: 5%;
	padding: 8px;
	left:40%;
}

#demo{
	background-color:rgba(0, 0, 0, .95);
	position: absolute;
	margin-left: -8px;
	display: block;
	padding: 5px;
	height: 100%;
	width: 100%;
	top: 0;
}

.wrapDiv{
	background-color: rgba(250, 0, 0, .7);
	border-radius: 30px;
	padding: 0 30px;
	position: absolute;
	width: 60%;
	left: 20%;
	top: 30%;
}

#warn1{
	text-shadow:1px 0 1px #fff, -1px 0 1px #fff, 0 1px 1px #fff, 0 -1px 1px #fff;
	text-align: center;
	color: #f00;
}

#warn2{
	text-shadow:1px 0 1px #fff, -1px 0 1px #fff, 0 1px 1px #fff, 0 -1px 1px #fff;
	text-align: center;
	color: #f00;
}

.posHs{
	position: absolute;
	right:100px;
	color: #fff;
	top:0;
}

#saveScore{
	background-color:#0f0;
	position: absolute;
	cursor:pointer;
	display:none;
	padding:7px;
	color: #fff;
	border:none;
	right:98px;
	top:13%;
}

#submiBG{
	background-color:rgba(0, 0, 0, .8);
	position:absolute;
	margin-left:-10px;
	display:none;
	height:100%;
	width:100%;
	top:0;
}

#submi{
	background-color:#005aff;
	border-radius:50%;
	position:absolute;
	padding:30px;
	height:70%;
	width:35%;
	right:33%;
	top:15%;
}

#pName{
	background-color:dodgerblue;
	border-radius:30px;
	position:absolute;
	text-align:center;
	font-size:1.5em;
	padding:10px;
	height:40px;
	color:#fff;
	width:50%;
	left:25%;
	top:30%;
}

#copyScore{
	position:absolute;
	top:50%;
	left:0;
}

.buton{
	font-weight:bold;
	font-size:1.8em;
	padding:10px;
	border:none;
	color:#fff;
	width:30%;
}

#sub{
	background-color:#0f0;
	position:absolute;
	left:20%;
	top:50%;

}

#can{
	background-color:red;
	position:absolute;
	left:53%;
	top:50%;
}


#submi{    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.9s;
    animation-name: zoom;
    animation-duration: 0.9s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes zoom {
    from {transform: scale(0.1)} 
    to {transform: scale(1)}
}

#arrow{
	background-color:rgba(0, 0, 0, .2);
	border-bottom-right-radius:15px;
	border-top-right-radius:15px;
	box-shadow:5px 5px 8px #000;
	position:absolute;
	display:none;
	height:96%;
	width:0;
	top:5%;
	left:0;
	-webkit-transition: width 1s; /* Safari */
    transition: width 1s; 
}

#arrow::after{
    border-color:transparent transparent transparent rgba(0, 0, 0, .8);
    border-style: solid;
    position: absolute;
    border-width: 25px;
    margin-left: -5px;
	border-radius:5px;
	content:"";
    left: 101%;
    top: 1.7%;
}

#arrow:hover{
	width:30%;
}

#sHS{
	margin-left:50px;
	color:#fff;
}

#myTbl{
	color:#fff;
}


#arrow:hover #sHS, #hr1, #hr2, #myTbl {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .1} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .1} 
  to {opacity: 1}
}

tr{
	text-align:center;
}

tr:hover{
	font-weight:bold;
	font-size:1.2em;
	color:#0f0;
}

.breakTr:hover{
	font-size: 1em;
	color:#fff;
}

#eh{
	background-color:rgba(255, 0, 0, .9);
	border-radius:10px;
    position: absolute;
	top:30px;
	left:30px;
	text-align:center;
	padding:5px;
	color:#fff;
	width:130px;
}

#eh::after{
    content: " ";
    position: absolute;
	top: 100%; 
    left: 50%; 
    margin-left: -5px;
    border-width: 10px;
    border-style: solid;
    border-color: red transparent transparent transparent;

}


@media only screen and (max-width: 768px) {

#start{
	background-color:cornflowerblue;
	position:absolute;
	padding: 100px;
	height: 100%;
	width: 100%;
	top:0;
}

.logo{
	position: absolute;
	height: 80%;
	left: 20%;
	width:60%;
	top: 0;
}

#loads{
	background-color: darkgoldenrod;
	position: absolute;
	border-radius: 10px;
	padding: 30px 0;
	bottom:100px;
	left:50%;	
	width: 5px;
	-webkit-transition: width 1s; /* Safari */
    transition: width 1s; 
}

#startLoad{
	position: absolute;
	font-size: 3em;
	color: #fff;
	bottom: 65px;
	padding: 8px;
	left:50%;
}

#demo{
	background-color:rgba(0, 0, 0, .95);
	position: absolute;
	margin-left: -8px;
	display: block;
	padding: 5px;
	height: 100%;
	width: 100%;
	top: 0;
}


}

</style>

<script src="js/jQuery.js"></script>
<script>

setInterval(function(){

	$('#retriever').load('retriever.php');


}, 20000);

</script>


</head>

<body onload="loading()" onclick="bugSound()" id="body">

<audio id="click">
  <source src="impact.wav" type="audio/wav">
  Your browser does not support the audio element.
</audio>

<audio id="success">
  <source src="tap.wav" type="audio/wav">
  Your browser does not support the audio element.
</audio>

<center>
<p id="so">Score:</p>
<input type="text" id="score" value="0" style="cursor:pointer" disabled>
</center>

<div class="posHs">
	<p>High Score:</p>
	<p id="hs" style="text-align: center;">0</p>
</div>



		<div id="test" onmouseover="go()">
		<h3 id="eh">Click Me Loser!</h3>
			<center>
				<img src="virus.png" alt="Virus" id="but" onclick="scoreMe()" style="cursor:pointer">
			</center>
		</div>

		
		<div id="start"><center><img class="logo" src="beastMode.png" alt="Click Bait Logo"></center></div>

		<div id="loads" onload="disappear()"></div>
		<h1 id="startLoad">Loading...</h1>

		<div id="demo">
			<div class="wrapDiv">
				<h2 id="warn1">Sorry! Your device is not allowed. You need to use a PC.</h2><br/>
				<h2 id="warn2">If you are using PC already, please maximize it in order to play.</h2>
			</div>
		</div>

	<button id="saveScore" onclick="saveS()">Save Score</button>
	
	<?php
		include("connections.php");
$saveScore = $playerName = $err = "";

		if(isset($_POST["submit"])){

			if(empty($_POST["pName"])){

			}else{
				$playerName = $_POST["pName"];
				$saveScore = $_POST["copyScore"];
			}

			if($playerName){

				if(!preg_match("/^[a-zA-Z.,?! ]*$/", $playerName)){
					
					echo"<script>alert('No Hacking Allowed!');</script>";
					
				}else{
					
					$v1 = md5(rand(1,9));
					$script = md5(rand(1,9));
					$score = md5(rand(1,9));
					
					mysqli_query($connections, "INSERT INTO scoretbl (playerName,score) VALUES('$playerName', '$saveScore')");
					echo "
					<script>
					window.location.href ='	?$v1=$script=v1_=$score';
					document.getElementById('demo').style.display = 'none';
					</script>";

				}
			}
		}
	?>
		<div id="submiBG" >
			<div id="submi">
				
				<form method="POST">
					<span><?php echo $err; ?></span>
					<input type="text" name="pName" id="pName" placeholder="Enter Your Name" onkeypress="inpu()">
					<input type="hidden" name="copyScore" value="<?php echo $saveScore; ?>" id="copyScore" >
					<br/>
					<br/>
						<button name="submit" id="sub" class="buton" disabled>Submit</button>
				</form>
				<button id="can" class="buton" onclick="cans()">Cancel</button>
			</div>
			
		</div>
		
		<div id="arrow" onmouseover="arrowHs()" onmouseout="lostHs()" >
			<h1 id="sHS" style="display:none;">Top 20 High Scores:</h1>
			
			<hr id="hr1" style="width:100%;display:none;">
			
			<center>

				<div id="retriever">

					<?php include("retriever.php"); ?>

				</div>

			</center>

		</div>


		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>

<script>

	var myScore = 0;
	var score = document.getElementById("score");
	var highScore = document.getElementById("hs");
	var posit = document.getElementById("pos");
	var but = document.getElementById("test");
	var myAudio = document.getElementById("click");
	var mySuccess = document.getElementById("success");


function go(){

	myAudio.play();
	score.value = 0;
	myScore = 0;
	


var myY = Math.floor(Math.random() * 901);
var py = "px";

var randY = myY + py;


var myX = Math.floor(Math.random() * 401);
var px = "px";

var randX = myX + px;

but.style.left = randY;
but.style.top = randX;

if(score.value < parseInt(highScore.innerHTML)){
	document.getElementById("saveScore").style.display = "block";
	
}

}


function scoreMe(){
	
	score.value = myScore + 1;

	myScore++;
	mySuccess.play();



		if(score.value > parseInt(highScore.innerHTML)){

			highScore.innerHTML = myScore;

			}

		copyScore.value = highScore.innerHTML;

}

	if (window.innerWidth > 1024){

	document.getElementById("demo").style.display = "none";


	function loading() {
	
	var load = document.getElementById("loads");
	var start = document.getElementById("start");
	var startLoad = document.getElementById("startLoad");

	function goLoad(){

	load.style.width = "50%";
	

	}
	
	goLoad();

	
	setInterval(function(){
	
	load.style.display = "none";
	start.style.display = "none";
	startLoad.style.display = "none";
	document.getElementById("arrow").style.display = "block";
	
	}, 1000);

	}

	}else{

		but.style.display = "none";

	}

	function saveS() {
		document.getElementById("submiBG").style.display = "block";
	}
	
	function cans() {
		document.getElementById("submiBG").style.display = "none";
	}
	
	function inpu() {
		document.getElementById("sub").disabled = false;
	}
	
	function arrowHs() {
		document.getElementById("sHS").style.display = "block";
		document.getElementById("myTbl").style.display = "block";
		document.getElementById("hr1").style.display = "block";
		document.getElementById("hr2").style.display = "block";
	}
	
	function lostHs() {
		document.getElementById("sHS").style.display = "none";
		document.getElementById("myTbl").style.display = "none";
		document.getElementById("hr1").style.display = "none";
		document.getElementById("hr2").style.display = "none";


	}


</script>


<footer>
<hr>
<div class="footer">
<h4> &copy 2018 by John Humbert</h4>
</div> 
</footer>
 
</body>
</html>