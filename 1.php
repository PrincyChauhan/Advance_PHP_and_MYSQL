<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h4> Registration From</h4>
    <form method="post">
        First Name: <input type="text" name="firstname"><br><br>
        Last Name: <input type="text" name="lastname"><br><br>
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        Email: <input type="email" name="email"><br><br>
        Contact: <input type="number" name="contact"><br><br>
        Male <input type="radio" name="gender" value="Male">
        Female <input type="radio" name="gender" value="Female"><br><br>
        Date of Birth: <input type="date" name="date"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "wp") or die("connection failed");
if (!$conn) {
    die("Connection is failed...." . mysqli_connect_error());
    exit;
} else {
    echo "Connection is done ...";
}

if (isset($_POST['submit'])) {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $dob = $_POST["date"];

    $query = " INSERT INTO reg(Firstname,Lastname,Username,Password,Email,Contact,Gender,DateOfBirth) VALUES('$firstname','$lastname','$username','$password','$email','$contact','$gender','$dob'); ";
    $register_user_query = mysqli_query($conn, $query);
}

?>
