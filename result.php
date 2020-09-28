<?php 

$height = $_POST['height'];
$weight = $_POST['weight'];
$result = "";


if($_POST['compute']){
    
$bmi = $weight/($height/100)**2;
if($bmi <= 18.5){
    $result = "You are underweight";
}
else if($bmi > 18.5 and $bmi <= 24.9){
    $result = "You are normal weight";
}
else if($bmi > 25 and $bmi <=29.9){
    $result = "You are overweight";
}
else if($bmi >= 30){
    $result = "You are obese";
}
}


if(isset($_POST['back'])){
    header('location: bmi_calculator.php');
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<style>
html{
    background: url('https://zovon.s3.amazonaws.com/wp-content/uploads/2018/02/img-high-bmi-%E2%80%93-don%E2%80%99t-panic-unless-you-are-sure-about-following-2018-021.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

body{
    font-family: verdana;
}

form{
    margin-top: 1.5in;
    padding: 5px;
    background-color:  #ffdccc;
    width: 450px;
    height: 500px;
}

#back{
    color: #ffebcc;
    font-size: 17px;
    background-color: #e64900;
    padding: 7px;
}

h4{
    color: red;
}

</style>


<body>
<center>
<form action="" method="post"><br>
    <h2>Result</h2><br>
        <div id="result"><br>
            <?php echo "<h4>" . "Your BMI:" . "</h4>";
                echo "<h4>" . $bmi . "</h4> <br>";
                echo "<h4>" . $result . "</h4> <br> <br> <br>";

                ?>
            
        </div><br>
    <input type="submit" name="back" value="Back to Calculator" id="back">




</form>


</center>    
</body>
</html>