<!DOCTYPE html>
<html>
	<body>
	
		<div align=center></center>
			<a href="file://E|/Actions.php"
			<img width="350" height="275" align="bottom" src = "file://E|/ProgramImageDirectory/Buttons/Reload.png">
			</a>
			
</body>
			
<!DOCTYPE html>
<html>
<body>

<p>Click the button to open a new window called "MsgWindow" with some text.</p>


<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    var myWindow = window.open("", "MsgWindow", "width=500,height=500");
    myWindow.document.write("<p>This is 'Hi'. I am 200px wide and 100px tall!</p>");
}
</script>

</body>
</html>