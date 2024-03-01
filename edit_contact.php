<?php

    // $id = $_POST['ID'];
    // $name = $_POST['name'];
    // $phoneNumber = $_POST['phoneNumber'];
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "phone_book_managenment";
    $conn = new mysqli($server,$user,$pass,$db);
    
    $id = $_GET['ID'];  
    $sql = "SELECT * FROM phonecontact WHERE ID = $id ";
    $rs = $conn ->query($sql);
    if($rs ->num_rows >0){
        while($row=$rs->fetch_assoc()){
            $list = $row;
            break;
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
        <a class="Home-btn" href="./index.php">HOME</a>
        <div class="row">
            <form action="./updatePhoneNumber.php" method="post">
                <input type="hidden" name="id" placeholder="ID" value="<?php echo $list['ID']?>"> 
                <input type="text" name="name" placeholder="Name" value="<?php echo $list['Name']?>"> 
                <input type="text" name="phoneNumber" placeholder="Phone Number" value="<?php echo $list['PhoneNumber']?>"> 
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</body>
</html>