<!DOCTYPE html>
<html>
	<body>

		<div align=center></center>
		<!Centers the pictures on the page>
		
			<!Row 1>
			
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Give.jpg" onclick = "tgive()" alt="Submit" style="width: 100%">Give</p> 
			<a href="file://E|/alt/EatSelect.php"><p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Male/Eat.jpg" onclick = "teat()" alt="Submit" style ="width: 100%">Eat</p></a> 	
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Actions/Listen.jpg" onclick = "tlisten()" alt="Submit" style="width: 100%">Listen</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Actions/Male/Sleep.jpeg" onclick = "tsleep()" alt="Submit" style="width: 100%">Sleep</p> 
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Actions/Talk.jpg" onclick = "ttalk()" alt="Submit" style="width: 100%">Talk</p><p style="clear: both;"> 
			
			<!Row 2>
			
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Female/Sit.jpg" onclick = "tsit()" alt="Submit" style="width: 100%">Sit</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Female/Think.jpg" onclick = "tthink()" alt="Submit" style="width: 100%">Think</p>
			<a href="file://E|/alt/WalkToSelect.php"><p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Male/Walk.jpg" onclick = "twalk()" alt="Submit" style="width: 100%">Walk</p></a>
			<a href="file://E|/alt/DrinkSelect.php"><p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Male/Drink.jpg" onclick = "tdrink()" alt="Submit" style="width: 100%">Drink</p></a>
			<a href="file://E|/alt/BuySelect.php"><p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Male/Buy.jpg" onclick = "tbuy()" alt="Submit" style="width: 100%">Buy</p><p style="clear: both;"></a> 
			
			<!Row 3>
			
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Close.png" onclick = "tclose()" alt="Submit" style="width: 100%">Close</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Open.jpg" onclick = "topen()" alt="Submit" style="width: 100%">Open</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Take.jpg" onclick = "ttake()" alt="Submit" style="width: 100%">Take</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/PhoneCall.jpg" onclick = "tcall()" alt="Submit" style="width: 100%">Call</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Stop.png" onclick = "tstop()" alt="Submit" style="width: 100%">Stop</p><p style="clear: both;">
			
		<div align=left></left>
			
		<!	<img src="imageLocation" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.1em;">
		
	<script>
	<!/* These are the functions that get called when the user clicks the buttons on the program page*/>
		function tgive() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I am giving this.\n");
		}
	<!/* Function pops up a window with the translation dialogue, same below.*/>
		
		function teat() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I will eat. <br><br>OR <br><br> I am eating.");
		}

		function tlisten() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300"); 
    			myWindow.document.write("<p>I am listening.");
		}

		function tsleep() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I want to sleep. <br><br>OR <br><br>Sleep.");
		}

		function ttalk() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I will talk. <br><br>OR <br><br>Let's talk.");
		}

		function tsit() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I will sit.");
		}

		function tthink() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I am thinking. <br><br>OR <br><br>I will think about it.");
		}

		function twalk() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I will walk. <br><br>OR <br><br>I am walking.");
		}

		function tdrink() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I will drink. <br><br>OR <br><br>I am drinking.");
		}

		function tbuy() {
   			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I want to buy. <br><br>OR <br><br>I will buy.");
		}

		function tclose() {
   			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
   			myWindow.document.write("<p>Close it. <br><br>OR <br><br>I will close it.");
		}

		function topen() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>Open it. <br><br>OR <br><br>I will open it.");
		}

		function ttake() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I am taking this.");
		}

		function tcall() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>I am calling <br><br>OR <br><br> I will call.");
		}

		function tstop() {
    			var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    			myWindow.document.write("<p>Stop (or I will stop.)");
		}

	</script>
		
		<br>
		<br>
		<div align=center></center>
			<a href="file://E|/Image_Translator_Program.html"><p style="float: center; font-size: 10pt; text-align: center; width: 10%; margin-right: 9%; margin-left: 9%; margin-bottom: 0.5em;"><img src = "file://E|/ProgramImageDirectory/Buttons/Back.png" img width="48" height="36"><p style="clear: both;">
			</a>
		<!Back button returns to Start page>
		
		<div align=center></center>
			<a href="file://E|/Image_Translator_Program.html">
			<input type="submit" value="Back to Start">
			</a>
			<p style="clear: both;">
		<!Returns to Start page>
				
		<div align=center></center>
			<a href="file://E|/Gender_page.php">
			<input type="submit" value="Gender Selection">
			</a>
			<p style="clear: both;">
		<!Returns to Gender Page>
				
		<div align=center></center>
			<a href="file://E|/Body_Parts.php">
			<input type="submit" value="Body Parts">
			</a>
			<p style="clear: both;">
		<!Redirects to Body Parts Page>
				
		<div align=center></center>
			<a href="file://E|/Food_and_Drink.php">
			<input type="submit" value="Food and Drinks">
			</a>
			<p style="clear: both;">
		<!Redirects to Food and Drinks Page>
				
		<div align=center></center>
			<a href="file://E|/Places.php">
			<input type="submit" value="Places">
			</a>
			<p style="clear: both;">
		<!Redirects to Places Page>
				
		<div align=center></center>
			<a href="file://E|/Emergency_and_Health_page.php">
			<input type="submit" value="Emergency/Health">
			</a>
			<p style="clear: both;">
		<Redirects to Emergency and Health Page>
	
		<div align=center></center>
			<a href="file://E|/Feelings.php">
			<input type="submit" value="Feelings">
			</a>
			<p style="clear: both;">
		<!Redirects to Feelings Page>
			
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
