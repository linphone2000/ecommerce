<?php
    include 'connection.php';
    $iid = $_POST['iid'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $oldimage = $_POST['oldimg'];
    $newimg = $_FILES['newimg']['name'];

    if($newimg != ""){
        $updatephoto = $newimg;
        move_uploaded_file($_FILES['newimg']['tmp_name'],"images/".$newimg);
    }
    else{
        $updatephoto = $oldimage;
    }
    $sql = $db->prepare("UPDATE item SET IID='$iid', name='$name', category='$category',
    price='$price', description='$description',
    image='$updatephoto' WHERE IID='$iid'");
    $sql->execute();
    header('Location: view.php');
?>