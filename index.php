<?php 



//phpinfo();
echo "<h1> EVIL LAUGHTER!!! </h1>";
echo "<br>";

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

$sum = $number1 + $number2;

if (isset('submit')) {

	echo "Totalul este: " . $sum;
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabel</title>
</head>
<body>
      
<form action ="index.php" method ="post">
    
    <input type = "number" name = "number1" placeholder = "Enter Number1"><br>
    <input type = "number" name = "number2" placeholder = "Enter Number2"> <br> 
    <input type = "submit" name = "submit">
    
</form>
              
       
</body>
</html>