<?php  
$name = $email = $gender = $message = "";
$nameErr = $emailErr = $genderErr = $messageErr = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <?php   
        if($_SERVER["REQUEST_METHOD"] == "POST"){            
            if(empty($_POST["name"])){
                $nameErr = "Name field is required";
            }else{
                $name = inputValidator($_POST["name"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email field is required";
            }else{
                $email = inputValidator($_POST["email"]);

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Email is incorrect";
                }
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender field is required";
            }else{
                $gender = inputValidator($_POST["gender"]);

            }

            if(empty($_POST["message"])){
                $messageErr = "Message field is required";
            }else{
                $message = inputValidator($_POST["message"]);
            }
        }

        function inputValidator($input){
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }
    
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h1>CONTACT US</h1>
        <p class="error">Fields with * are important</p>

        <input type="text" name="name" placeholder="Enter your name"><span class="error"> * <?php echo $nameErr ?></span> <br><br>
        <input type="email" name="email" placeholder="Enter your email"><span class="error"> * <?php echo $emailErr ?></span> <br><br>

        <label for="gender">Gender</label>
        <label for="male">
            <input type="radio" name="gender" id="male" value="male">
            Male
        </label>
        <label for="female">
            <input type="radio" name="gender" id="female" value="female">
            Female
        </label><span class="error"> * <?php echo $genderErr ?></span><br><br>

        <textarea name="message" id="" cols="30" rows="10"></textarea><span class="error"> * <?php echo $messageErr ?></span><br><br>

        <input type="submit" value="Submit">

    </form>

    <?php   
        echo "<h2>The final output of your message is below</h2> \n";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $message;
    ?>
        </body>
</html>