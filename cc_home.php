<!-- Exercise 2-3 pages 119-121. In order for file to run properly, cc_contact.php, cc_footer.php, cc_inc_header.php and july4ajpg must be included in the same folder. Needs XAMPP HTTP server installed to run.-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coast City Computers</title>
</head>
<body style="background-color: skyblue;">
	<img src="july4a.jpg" alt="American Flag" style="height: 260px; margin-top: -10px; margin-left: -10px;">

	<?php include("cc_inc_header.php");?>

	<h2 style="color:blue; font-size: 2.5em;">Memorial Day Sale</h2>
	<ul>
		<li>Compaq Presario mm2007us Notebook: <strong>$799.99</strong></li>
		<li>Epson Stylus CX6600 Color Printer: <strong>$699.99</strong></li>
		<li>Proview Technology 17" Monitor: <strong>199.99$</strong></li>
		<li>Hawking Technology Wireless Card: <strong>9.99$</strong></li>
	</ul>
	<br/>
	<br/>
	<a href="cc_contact.php">Click to contact us!</a>

		<?php include("cc_footer.php");?>
</body>
</html>