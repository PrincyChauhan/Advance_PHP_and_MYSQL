<html>
<body>
    <form method="post" enctype="multipart/form-data">
        Username: <input type="text" name="username"><br><br>
        <input type="submit" value="Create" name="create">
        <input type="submit" value="Read" name="read">
        <input type="submit" value="Update" name="update">
        <input type="submit" value="Delete" name="delete">
    </form>
</body>

</html>


<?php

$conn = mysqli_connect("localhost", "root", "", "wp") or die("connection failed");
if (!$conn) {
    die("Connection is failed...." . mysqli_connect_error());
    exit;
}

if (isset($_POST['create'])) {

    $username = $_POST["username"];


    $query = " INSERT INTO user(username) VALUES('$username'); ";
    $register_user_query = mysqli_query($conn, $query);
}

if (isset($_POST['read'])) {
    $query = "SELECT * FROM user";
    $select_user = mysqli_query($conn, $query);


    while ($row = mysqli_fetch_assoc($select_user)) {

        $username = $row['username'];
        echo "<h4>$username </h4>";
    }
}

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $query = "UPDATE user SET username = '{$username}'";
    $update_user = mysqli_query($conn, $query);
}

if (isset($_POST['delete'])) {
    $username = $_POST['username'];
    $query = "DELETE FROM user WHERE username = '{$username}'  ";
    $delete_user = mysqli_query($conn, $query);
}
?>
