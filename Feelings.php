<!DOCTYPE html>
<html>
	<body>


		<div align=center></center>
		
		<!Row 1>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Angry.png" onclick = "tanger()" alt="Submit"style="width: 100%">Anger</p> 
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Disgust.png" onclick = "tdisgust()" alt="Submit"style ="width: 100%">Disgust</p> 
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Feelings/Excited.jpg" onclick = "texct()" alt="Submit"style="width: 100%">Excitement</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Feelings/Fear.jpg" onclick = "tfear()" alt="Submit"style="width: 100%">Fear</p> 
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Feelings/Frustrated.jpg" onclick = "tfrust()" alt="Submit"style="width: 100%">Frustration</p><p style="clear: both;"> 
			
		<!Row 2>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Happy.jpg" onclick = "tjoy()" alt="Submit"style="width: 100%">Joy</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Hi5.jpg" onclick = "thi5()" alt="Submit"style="width: 100%">High Five</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Love.png" onclick = "tlove()" alt="Submit"style="width: 100%">Love</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Pain.jpg" onclick = "tpain()" alt="Submit" style="width: 100%">Pain</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Sad.jpg" onclick = "tsad()" alt="Submit"style="width: 100%">Sadness</p><p style="clear: both;"> 
			
		<!Row 3>
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Sick.jpg" onclick = "tsick()" alt="Submit" style="width: 100%">Sick</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Surprise.jpg" onclick = "tsurp()" alt="Submit" style="width: 100%">Surprise</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/ThankYou.png" onclick = "tthank()" alt="Submit" style="width: 100%">Gratitude</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Feelings/Tired2.jpg" onclick = "ttired()" alt="Submit" style="width: 100%">Weariness</p> <p style="clear: both;">
			
		
	<script>
	/* These are the functions that get called when the user clicks the buttons on the program page*/
		function tanger() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I feel angry.");
		}

		function tdisgust() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I feel disgusted. <br><br>OR <br><br>That is disgusting!");
		}

		function texct() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300"); 
   			myWindow.document.write("<p>I feel excited!");
		}

		function tfear() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I feel scared.");
		}

		function tfrust() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I feel frustrated.");
		}

		function tjoy() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I am happy.");
		}

		function thi5() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
   			myWindow.document.write("<p>High Five!");
		}

		function tlove() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I love it.");
		}

		function tpain() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I am hurt. <br><br>OR <br><br> I feel pain.");
		}

		function tsad() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I feel sad.");
		}

		function tsick() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
   			myWindow.document.write("<p>I feel sick.");
		}

		function tsurp() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I am surprised!");
		}
		function tthank() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I am grateful. Thank you.");
		}
		function ttired() {
    			var myWindow = window.open("", "MsgWindow2", "width=300,height=300");
    			myWindow.document.write("<p>I feel tired.");
		}

	</script>
	
	<br>
	<br>
		<div align=center></center>
			<a href="file://E|/Image_Translator_Program.html"><p style="float: center; font-size: 10pt; text-align: center; width: 10%; margin-right: 9%; margin-left: 9%; margin-bottom: 0.5em;"><img src = "file://E|/ProgramImageDirectory/Buttons/Back.png" img width="48" height="36"><p style="clear: both;">
			</a>
			
		<div align=center></center>
			<a href="file://E|/Image_Translator_Program.html">
			<input type="submit" value="Back to Start">
			</a>
			<p style="clear: both;">
	
		<div align=center></center>
			<a href="file://E|/Gender_page.php">
			<input type="submit" value="Gender Selection">
			</a>
			<p style="clear: both;">

		<div align=center></center>
			<a href="file://E|/Actions.php">
			<input type="submit" value="Actions">
			</a>
			<p style="clear: both;">
	
		<div align=center></center>
			<a href="file://E|/Body_Parts.php">
			<input type="submit" value="Body Parts">
			</a>
			<p style="clear: both;">

		<div align=center></center>
			<a href="file://E|/Food_and_Drink.php">
			<input type="submit" value="Food and Drinks">
			</a>
			<p style="clear: both;">
	
		<div align=center></center>
			<a href="file://E|/Places.php">
			<input type="submit" value="Places">
			</a>
			<p style="clear: both;">
	
		<div align=center></center>
			<a href="file://E|/Emergency_and_Health_page.php">
			<input type="submit" value="Emergency/Health">
			</a>
			<p style="clear: both;">

			
	<style type="text/css">
   		body {
        		margin-left:100px;
        		margin-right:100px;
			margin-top:10px
        		line-height: 1.5;
        		FONT-FAMILY: Arial, Helvetica, sans-serif; 
        		font-size: 1.2em;
			}


	</body>
</html>
