<?php 

//phpinfo();
echo "<h1> EVIL LAUGHTER!!! </h1>";
echo "<br>";


if(isset($_POST['submit'])) {

$number1=$_POST['number1'];
$number2=$_POST['number2'];

if($number1&&$number2){

$sum=$number1+$number2;
echo "Totalul este: " . $sum;
} else {
	echo "Nu ati introdus numerele";
}
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testuletz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
 <div class="container">  
  <div class="col-sm-6">    

  <form action="index.php" method="post">
    <div class="form-group">
    <input type="number" name="number1" class="form-control" placeholder="Enter Number1"><br>
    <input type="number" name="number2" class="form-control" placeholder="Enter Number2"><br> 
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Calculeaza">

    
  </form>
 </div>
 </div>             
       
</body>
</html>