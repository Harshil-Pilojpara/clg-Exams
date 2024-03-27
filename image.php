<html>
<body>
    <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="image">
    <button type="submit" name="submit">submit</button>

    </form>

<?php
if(isset($_POST['submit']))
{
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if($file_type == 'image/jpeg' || $file_type == 'image/jpg'){
        move_uploaded_file($file_tmp,"image/".$file_name);
        echo "successful";
    }
    else{
        echo "only jpeg and jpg files are allowed.";
    }
}
?>
</body>
</html>