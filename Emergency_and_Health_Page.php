<!DOCTYPE html>
<html>
	<body>

		<div align=center></center>
			
			<!Row 1>
			
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/EmergencyHealth/911.png" onclick = "t911()" alt="Submit" style="width: 100%">911</p> 
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/EmergencyHealth/Ambulance.png" onclick = "tambulance()" alt="Submit" style ="width: 100%">Ambulance</p> 
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/EmergencyHealth/Fire.png" onclick = "tfire()" alt="Submit" style="width: 100%">Fire</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src="file://E|/ProgramImageDirectory/EmergencyHealth/FirstAid.png" onclick = "t1aid()" alt="Submit" style="width: 100%">First Aid</p> <p style="clear: both;"> 
			
			<!Row 2>
			
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/EmergencyHealth/HelpMe.png" onclick = "thelp()" alt="Submit" style="width: 100%">Help</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/EmergencyHealth/Hospital.jpg" onclick = "thosp()" alt="Submit" style="width: 100%">Hospital</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/EmergencyHealth/Medicene2.png" onclick = "tmeds()" alt="Submit" style="width: 100%">Medicine</p>
			<p style="float: left; font-size: 12pt; text-align: center; width: 23%; margin-right: 1%; margin-bottom: 0.1em;"><input type="image" img src = "file://E|/ProgramImageDirectory/EmergencyHealth/Pharmacy.png" onclick = "tpharm()" alt="Submit" style="width: 100%">Pharmacy</p> <p style="clear: both;"> 
	
		<br>
		<br>
		<div align=center></center>
			<a href="file://E|/Image_Translator_Program.html"><p style="float: center; font-size: 10pt; text-align: center; width: 10%; margin-right: 9%; margin-left: 9%; margin-bottom: 0.5em;"><img src = "file://E|/ProgramImageDirectory/Buttons/Back.png" img width="48" height="36"> <p style="clear: both;">
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
			<a href="file://E|/Feelings.php">
			<input type="submit" value="Feelings">
			</a>
			<p style="clear: both;">

	
	<script>
	/* These are the functions that get called when the user clicks the buttons on the program page*/
		function t911() {
   			var myWindow = window.open("", "MsgWindow5", "width=300,height=300");
   			myWindow.document.write("<p>Call 911!");
		}

		function tambulance() {
    			var myWindow = window.open("", "MsgWindow5", "width=300,height=300");
    			myWindow.document.write("<p>Call an ambulance!");
		}

		function tfire() {
    			var myWindow = window.open("", "MsgWindow5", "width=300,height=300"); 
    			myWindow.document.write("<p>Fire!");
		}

		function t1aid() {
    			var myWindow = window.open("", "MsgWindow5", "width=300,height=300");
   			myWindow.document.write("<p>I need first aid. <br><br>OR <br><br>Where is the first aid kit?");
		}

		function thelp() {
    			var myWindow = window.open("", "MsgWindow5", "width=300,height=300");
    			myWindow.document.write("<p>Please help me.");
		}

		function thosp() {
    			var myWindow = window.open("", "MsgWindow5", "width=300,height=300");
    			myWindow.document.write("<p>I need to go to the hospital. <br><br>OR <br><br>Where is the nearest hospital?");
		}

		function tmeds() {
    			var myWindow = window.open("", "MsgWindow5", "width=300,height=300");
    			myWindow.document.write("<p>I need medicine.");
		}

		function tpharm() {
   			var myWindow = window.open("", "MsgWindow5", "width=300,height=300");
    			myWindow.document.write("<p>I need to go to the pharmacy. <br><br>OR <br><br>Where is the nearest pharmacy?");
		}

	</script>
		

			
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
