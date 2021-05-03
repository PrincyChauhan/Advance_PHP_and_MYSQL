<html>
<body>
    <form method="post" enctype="multipart/form-data">
        <label>Image</label>
        <input type="file" name="image">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {

    if ($_FILES["image"]["size"] < 30) {
        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
        move_uploaded_file($post_image_temp, "images/$post_image");
    } else {
        echo '<h1>Error:"file size should not greater than 30 KB" </h1>';
    }
}

?>


