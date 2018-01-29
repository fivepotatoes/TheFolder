<!DOCTYPE html>
<html>
	<body>

		<div align=center></center>
			
			<!Row 1>
			
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Give.jpg" onclick = "myFunctionQ()" alt="Submit" style="width: 100%">Give</p> 
			<a href="file://E|/alt/1-3.php"><p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Male/Eat.jpg" onclick = "myFunctionW()" alt="Submit" style ="width: 100%">Eat</p></a> 	
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Actions/Listen.jpg" onclick = "myFunctionE()" alt="Submit" style="width: 100%">Listen</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Actions/Male/Sleep.jpeg" onclick = "myFunctionR()" alt="Submit" style="width: 100%">Sleep</p> 
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/Actions/Talk.jpg" onclick = "myFunctionT()" alt="Submit" style="width: 100%">Talk</p><p style="clear: both;"> 
			
			<!Row 2>
			
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Female/Sit.jpg" onclick = "myFunctionY()" alt="Submit" style="width: 100%">Sit</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Female/Think.jpg" onclick = "myFunctionU()" alt="Submit" style="width: 100%">Think</p>
			<a href="file://E|/alt/1-2.php"><p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Male/Walk.jpg" onclick = "myFunctionI()" alt="Submit" style="width: 100%">Walk</p></a>
			<a href="file://E|/alt/1-4.php"><p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Male/Drink.jpg" onclick = "myFunctionO()" alt="Submit" style="width: 100%">Drink</p></a>
			<a href="file://E|/alt/1-1.php"><p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Male/Buy.jpg" onclick = "myFunctionP()" alt="Submit" style="width: 100%">Buy</p><p style="clear: both;"></a> 
			
			<!Row 3>
			
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Close.png" onclick = "myFunctionA()" alt="Submit" style="width: 100%">Close</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Open.jpg" onclick = "myFunctionS()" alt="Submit" style="width: 100%">Open</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Take.jpg" onclick = "myFunctionD()" alt="Submit" style="width: 100%">Take</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/PhoneCall.jpg" onclick = "myFunctionF()" alt="Submit" style="width: 100%">Call</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 18.5%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/Actions/Stop.png" onclick = "myFunctionG()" alt="Submit" style="width: 100%">Stop</p><p style="clear: both;">
			
		<div align=left></left>
			
		<!	<img src="imageLocation" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.1em;">
		
		
	<script>
	/* These are the functions that get called when the user clicks the buttons on the program page*/
		function myFunctionQ() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
   		myWindow.document.write("<p>I am giving this.");
		}

		function myFunctionW() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I will eat. <br><br>OR <br><br> I am eating.");
		}

		function myFunctionE() {
   		var myWindow = window.open("", "MsgWindow1", "width=300,height=300"); 
    		myWindow.document.write("<p>I am listening.");
		}

		function myFunctionR() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I want to sleep. <br><br>OR <br><br>Sleep.");
		}

		function myFunctionT() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I will talk. <br><br>OR <br><br>Let's talk.");
		}

		function myFunctionY() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I will sit.");
		}

		function myFunctionU() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I am thinking. <br><br>OR <br><br>I will think about it.");
		}

		function myFunctionI() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I will walk. <br><br>OR <br><br>I am walking.");
		}

		function myFunctionO() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I will drink. <br><br>OR <br><br>I am drinking.");
		}

		function myFunctionP() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I want to buy. <br><br>OR <br><br>I will buy.");
		}

		function myFunctionA() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
   		myWindow.document.write("<p>Close it. <br><br>OR <br><br>I will close it.");
		}

		function myFunctionS() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>Open it. <br><br>OR <br><br>I will open it.");
		}

		function myFunctionD() {
   		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>I am taking this.");
		}

		function myFunctionF() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
	    	myWindow.document.write("<p>I am calling <br><br>OR <br><br> I will call.");
		}

		function myFunctionG() {
    		var myWindow = window.open("", "MsgWindow1", "width=300,height=300");
    		myWindow.document.write("<p>Stop (or I will stop.)");
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
			<a href="file://E|/programpage2.php">
			<input type="submit" value="Body Parts">
			</a>
			<p style="clear: both;">

		<div align=center></center>
			<a href="file://E|/programpage3.php">
			<input type="submit" value="Food and Drinks">
			</a>
			<p style="clear: both;">
	
		<div align=center></center>
			<a href="file://E|/programpage4.php">
			<input type="submit" value="Places">
			</a>
			<p style="clear: both;">
	
		<div align=center></center>
			<a href="file://E|/programpage5.php">
			<input type="submit" value="Emergency/Health">
			</a>
			<p style="clear: both;">
	
	
		<div align=center></center>
			<a href="file://E|/programpage6.php">
			<input type="submit" value="Feelings">
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

    		h1 {
        		font-weight: bold;
        		font-size: 50px;
    			}

    		h2 {
        		font-weight: bold;
        		font-size: 24px;
   			}

    		h3 {
        		font-weight: bold;
        		font-size: 20px;
    			}

	</body>
</html>
