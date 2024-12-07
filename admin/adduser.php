<?php
session_start();
error_reporting(0);
include('connection.php');
if (!isset($_SESSION['email'])) {
    header('location:logout.php');
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Form Validation</title>
        <link rel="stylesheet" href="assets/css/registration.css" />
    </head>

    <body>
        <h1>Add Users</h1>
        <form method="post" action="adduser.php" name="RegForm" onsubmit="return validateForm()">
            <p>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="fname"
                    placeholder="Enter your full name" />
                <span id="name-error" class="error-message"></span>
            </p>
            <p>
                <label for="name">User Name:</label>
                <input type="text" id="name" name="uname"
                    placeholder="Enter your full name" />
                <span id="name-error" class="error-message"></span>
            </p>
            <p>
                <label for="email">E-mail Address:</label>
                <input type="text" id="email" name="email"
                    placeholder="Enter your email" />
                <span id="email-error" class="error-message"></span>
            </p>

            <p>
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" />
                <span id="password-error" class="error-message"></span>
            </p>
            <p>
                <label for="email">Contact No.</label>
                <input type="text" id="contact" name="contact"
                    placeholder="Enter your contact number" />
                <span id="contact-error" class="error-message"></span>
            </p>
            <p>
                <label for="comment">Address:</label>
                <textarea id="address" name="address"
                    placeholder="Enter your address"></textarea>
                <span id="address-error" class="error-message"></span>
            </p>
            <p>
                <label for="subject">Choose your Plane:</label>
                <select id="subject" name="plan">

                    <option value="Classic">
                        Classic
                    </option>
                    <option value="Gold">
                        gold
                    </option>
                    </option>
                    <option value="Premium">
                        premium
                    </option>
                </select>
                <span id="subject-error" class="error-message"></span>
            </p>
            <p>
                <input type="checkbox" id="agree" name="Agree" />
                <label for="agree">I agree to the above
                    information</label>
                <span id="agree-error" class="error-message"></span>
            </p>
            <p>
                <input type="submit" value="Send" name="submit" />
                <input type="reset" value="Reset" name="Reset" />
            </p>
        </form>
        <script src="../js/registration.js"></script>
    </body>

    </html>


<?php
    include "connection.php";
    if (isset($_REQUEST['submit'])) {

        $fname = $_POST['fname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);

        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $plan = $_POST['plan'];
        // $gn = $_POST['Subject'];


        $sql = "insert into register(fullname,uname,email,password,contact,address,plan) values('$fname','$uname','$email','$pass','$contact','$address','$plan')";
        $sql1 = "insert into login values('$email','$pass')";
        $result = mysqli_query($con, $sql) or die("some query issues....");
        $result1 = mysqli_query($con, $sql1) or die("some query issues....");

        if ($result && $result1) {
            echo "
                     <script>
                     
                     window.location.href='user.php';</script>";
        } else {
            echo "<script>
                     alter('same thing is wrong/......~!');
                    </script>";
        }
    }
}
?>