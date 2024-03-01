<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .home-btn{
            text-decoration: none;
            margin: 20px 0px;
            font-size: 20px;
            border: 1px solid gray;
            padding: 10px;
            border-radius: 10px;
            transform: translateX(720px);
        }
        .row{
            margin: 21vh 0 21vh 0;
            align-items: center;
            text-align: center;
        }
        form > input{
            padding: 10px;
            margin-left: 10px;
            border-radius: 10px;
            outline: none;
        }
        .btn-add{
            color: #fff;
            padding: 10px;
            outline: none;
            background-color: blue;
            border: 1px solid #50C4ED;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="index-page"><a class="home-btn" href="./index.php">HOME</a></div><br>
            <form action="./savePhoneNumber.php" method="post">
                <!-- <input type="text" name="ID" placeholder="ID"> -->
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="phoneNumber" placeholder="Phone Number">
                <button class="btn-add" type="submit">Add</button>
            </form>
        </div>
    </div>
</body>
</html>