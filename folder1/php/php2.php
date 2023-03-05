<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/style3.css"/>
<link rel="icon" href="images/favicon.ico"/>
<title>Fouad</title>
</head>
<body>
<div class="p1">
<img class="img01" src="images/image16.webp" alt="image" onclick="myFunction1('https://fouad.rf.gd/')"></div> 
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mailer/autoload.php';
$username = "epiz_33373847";
$pasword = "itBv7uZQQu";
$database = new PDO ("mysql:host=sql210.epizy.com; dbname=epiz_33373847_db1contact; charset=utf8;",$username ,$pasword);
$prenom01 = $nom01 = $sexe01 = $daten01 = $email01 = $tel01 = $adresse01 = $textarea01 = $fileName = $fileType = $fileData = $file ="";
if(isset($_POST['button'])){
$prenom01 = $_POST["prenom"];
$prenom1 = strip_tags($prenom01);
$nom01 = $_POST["nom"];
$nom1 = strip_tags($nom01);
$sexe01 = $_POST["sexe"];
$sexe1 = strip_tags($sexe01);
$daten01 = $_POST["daten"];
$daten1 = strip_tags($daten01);
$email01 = $_POST["email"];
$email1 = strip_tags($email01);
$tel01 = $_POST["tel"];
$tel1 = strip_tags($tel01);
$adresse01 = $_POST["adresse"];
$adresse1 = strip_tags($adresse01);
$textarea01 = $_POST['textarea'];
$textarea1 = strip_tags($textarea01);
$fileName = $_FILES['file']["name"];
$fileType = $_FILES['file']["type"];
$fileData = file_get_contents($_FILES['file']["tmp_name"]);
$file = ($_FILES['file']["tmp_name"]);
move_uploaded_file($file,"files/".$fileName);
$position = "files/".$fileName;
$addData = $database->prepare(" INSERT INTO tab1contact (prenom,nom,sexe,daten,email,tel,adresse,textarea,file,fileName,fileType,position) 
VALUES(:prenom , :nom , :sexe , :daten , :email , :tel , :adresse , :textarea, :file , :fileName , :fileType , :position)");
$addData->bindParam("prenom",$prenom1);
$addData->bindParam("nom",$nom1);
$addData->bindParam("sexe",$sexe1);
$addData->bindParam("daten",$daten1);
$addData->bindParam("email",$email1);
$addData->bindParam("tel",$tel1);
$addData->bindParam("adresse",$adresse1);
$addData->bindParam("textarea",$textarea1);
$addData->bindParam("file", $fileData);
$addData->bindParam("fileName", $fileName);
$addData->bindParam("fileType", $fileType);
$addData->bindParam("position", $position);
if($addData->execute()) { 
$mail = new PHPMailer();                 
$mail->isSMTP();                                           
$mail->Host = 'smtp.office365.com';                    
$mail->SMTPAuth = true;                                   
$mail->Username = 'Fouad.Bechar@outlook.com';                   
$mail->Password = '6236#77436&13579##2';                              
$mail->SMTPSecure = 'tls'; 
$mail->Port = 587;                                    
$mail->isHTML(true); 
$mail->CharSet = "UTF-8";
$mail->setFrom('Fouad.Bechar@outlook.com', 'Fouad');
$mail->addAddress($email1);
$mail->Subject = 'Hello my friend';
$mail->Body = '<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> </head>
<body style="background-color: black; font-family: sans-serif; margin-left: 4%;
margin-right: 4%"> 
<div> <p style="color: aliceblue; font-weight: bold; text-align:center">We thank you for your contact </p>
<img src="https://i.pinimg.com/564x/91/0b/e0/910be08d0ca8ae70a82722665f35e617.jpg" alt="image" width="200px" height="auto" style="display: block; margin-left: auto; margin-right: auto; border-radius: 20px"/> </div>
<footer style="margin-bottom:10px"> <center> <font color="cyan"> For the best goods at the best prices, </font> <a href="https://www.amazon.com/" style="text-decoration: none; font-weight: bold; color: blue"> click here </a> </center> </footer>
</body> </html>';
$mail->send();
echo "<div class=p2>"."<h1 class=hh1>".$prenom1."&nbsp".$nom1."</h1>"."<h2 class=hhh2>"."<p id=demoo>"."</p>"."<p id=demoo1>"."</p>"."</h2>"."</div>"; }
else { echo "<center>"."<h1 class=hh12>"."Sending error"."</h1>"."</center>"; }
$database = null; }
?>
<script src="script/script7.js"></script>
<script src="script/script13.js"></script>
</body>
</html>