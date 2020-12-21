<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include"header.html"?>
    <form action="<?php $_PHP_SELF ?>" method="get">
    Enter Name<input type="text" name="username"><br>
    Select course<select name="choice">
        <option value="select">--select--</option>
        <option value="java">java</option>
        <option value="python">python</option>
        <option value="angular">angular</option>
        <option value="HTML">HTML</option>
        <option value="C">C</option>
</select>
<input type="submit" value="suggest">
</form>
<?php
$name =$_GET["username"];
$courseName=$_GET["choice"];

switch($courseName){
    case "java":
       include "java.php";
       break;
    case "python":
        include "python.php";
        break;  
     case "angular":
        include "angular.php";
        break;   
      case "HTML":
         include "html.php";
         break;
      case "C" :
        include "c.php";
        break;
      case "select":
        include "choice1.php";
         break;
           
}

?>
    
</body>
</html>