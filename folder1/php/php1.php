<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/style2.css"/>
<link rel="icon"  href="images/favicon.ico"/>
<title>Fouad</title>
</head>
<body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
test_input($_POST["prenom"]);
test_input($_POST["nom"]);
test_input($_POST["sexe"]); 
test_input($_POST["daten"]); 
test_input($_POST["email"]); 
test_input($_POST["tel"]); 
test_input($_POST["adresse"]);
test_input($_POST["textarea"]); } 
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data; }
?>
<div class="p1">
<img class="img01" src="images/image16.webp" alt="image" onclick="myFunction1('https://fouad.rf.gd/')"> </div>
<center>
<div class="ifr1">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83261.26422897134!2d-0.6397422488171269!3d35.733897160965306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7e6327b5bf40fd%3A0x546592a00a2014d5!2sBir%20El%20Djir!5e1!3m2!1sfr!2sdz!4v1672609383260!5m2!1sfr!2sdz" width="600" height="450" style="border:3px solid black; box-shadow: 1px 1px 10px black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
<h2 class="b4">You are welcome</h2>
<form action="php2.php" method="POST" enctype="multipart/form-data">
<fieldset>
<table>
<tr><td><b>First name</b></td></tr><tr><td><input type="text" name="prenom" placeholder="First name" required></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><b>Last name</b></td></tr><tr><td><input type="text" name="nom" placeholder="Last name" required></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><b>Gender</b></td></tr><tr><td><select name="sexe" required>
<option>- - - - - -</option>
<option value="MASCULIN">masculine</option>
<option value="FEMININ">feminine</option>
</select></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><b>Date of Birth</b></td></tr><tr><td><input type="Date" name="daten" required></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><b>E-mail</b></td></tr><tr><td><input type="email" name="email" placeholder="E-mail" required></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><b>Phone</b></td></tr><tr><td><input type="tel" name="tel" placeholder="Phone"></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><b>Address</b></td></tr><tr><td><input type="text" name="adresse" placeholder="Address"></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><b >Your message</b></td></tr><tr><td><textarea name="textarea"rows="10" cols="50" placeholder="Your message"></textarea></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><b>File to be attached (< 5Mo)</b></tr><tr><td><input id="bt0" type="file" name="file"/></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><button id="b1" type="button" name="button" class="butt"  onclick="myFunction01()">Send</button> </td></tr>
<tr><td></td></tr><tr><td></td></tr>
</table></fieldset></form><br>
<button class="prin" onclick="window.print()">Print this page</button>
</center>
<footer></footer>
<script src="script/script7.js"></script>
<script src="script/script12.js"></script>
</body>
</html>