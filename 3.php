<html>

<head>
    <title>Registration</title>
</head>

<body>

    <h4> Registration From</h4>
    <form method="post">
        Username: <input type="text" name="username"><br><br>
        Address:<textarea name="address" rows="2" cols="40"></textarea><br>
        Age: <input type="number" name="age"><br><br>
        Pancard: <input type="text" name="pancard"><br><br>
        Gender: Male <input type="radio" name="gender" value="Male">
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

    $username = $_POST["username"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $pencard = $_POST["pancard"];
    $gender = $_POST["gender"];
    $dob = $_POST["date"];

    $query = " INSERT INTO users(Username,Address,DateOfBirth,Age,Pancard,Gender) VALUES('$username','$address','$dob','$age','$pencard','$gender'); ";
    $register_user_query = mysqli_query($conn, $query);
}

?>
