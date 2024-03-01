<?php 
    $id = $_POST['ID'];
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "phone_book_managenment";
    $conn = new mysqli($server,$user,$pass,$db);


    $sql = "INSERT INTO  phonecontact (Name,`PhoneNumber`) VALUES('$name','$phoneNumber')";
    $adding = $conn->query($sql);

    if($adding==true){
        header("location:./index.php"); 
    }else{
        echo "FAIL";
    }

?>