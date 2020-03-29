<?php
$insert = false;
if (isset($_POST['name'])) {
    // Set collection variable
    $server = 'localhost';
    $username = 'root';
    $password = "";

    // Create database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection
    if (!$con) {
        die("Connection to this database is failed due to" . mysqli_connect_error());
    }

    // Collect POST variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `Trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`)
     VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
    // echo $sql;

    // Execute the query
    if ($con->query($sql) == TRUE) {
        // echo "Successfully inserted";
        // Flag for successfull insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dalhousie Trip</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="img11.jpg" alt="Dalhousie Trip">
    <div class="container">
        <h1>Welcome to Dalhousie Trip</h1>
        <p>Enter your details and submit this form to confirm your participation in this trip</p>

        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining ud for Dalhousie trip</p>";
        }
        ?>

        <form action="index.php" method='post'>
            <input type="text" name="name" id="name" placeholder="Enter you name" required>
            <input type="text" name="age" id="age" placeholder="Enter you age" required>
            <input list="gender" name="gender" placeholder="Choose your gender" required /></label>
            <datalist id="gender">
                <option value="Male"></option>
                <option value="Female"></option>
                <option value="Transgender"></option>
            </datalist>
            <input type="email" name="email" id="email" placeholder="abc@gmail.com" required>
            <input type="phonr" name="phone" id="phone" placeholder="Enter your phone number" required>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any information...."></textarea>
            <button class="btn">Submit</button>
    </div>
    <script src="index.js"></script>
    </form>
</body>

</html>

<!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('1 ', 'trial', '20',
'male', 'trial@gmail.com', '1212121212', 'hii,this is a trial of php.', current_timestamp()); -->