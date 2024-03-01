<?php 
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "phone_book_managenment";
        $conn = new mysqli($server,$user,$pass,$db);

        $id = $_GET['ID'];

        $sql = "DELETE FROM phonecontact WHERE ID = $id";
        $delete = $conn->query($sql);
        if($delete==true){
                header("location:./index.php");
        }else{
                echo "Fail";
        }
        

?>