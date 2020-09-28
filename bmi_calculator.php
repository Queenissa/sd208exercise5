<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
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
    background-color: #ffdccc;
    width: 450px;
    height: 400px;
   
}

label{
    color: maroon;
    font-size: 20px;
}

.input{
    height: 25px;
}


#compute{
    color: #ffebcc;
    font-size: 17px;
    background-color: #e64900;
    padding: 7px;
}


</style>


<body>
    <center>
        <form action="result.php" method="post"><br>
        <h3>Calculate Your Body Mass Index</h3><br><br>
        <label for="height">Height (cm)</label> <input type="text" name="height" class="input"><br><br><br>

        <label for="weight">Weight (kg)</label> <input type="text" name="weight" class="input"><br><br><br><br>

        <input type="submit" name="compute" value="Compute BMI" id="compute">


        
        </form>
    </center>
    
</body>
</html>