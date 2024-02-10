<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(241, 229, 214);
        }
        .top{
            margin-top: 150px;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 30px;
        }
        .c1{
            margin-top: 20px;
        }
        .c12{
            width: 300px;
            height: 290px;
            margin: auto;
            background-color: rgb(24, 52, 78);
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px green;
        }
        .c1211{
            color: rgb(43, 236, 56);
            line-height: 30px;
            font-size: 17px;
        }
        .c121{
            width: 94%;
            padding: 8px;
            margin-bottom: 12px;
            font-size: 13px;
            border: 1px solid black;
            border-radius: 8px;
        }
        .c123{
            color: rgb(238, 238, 242);
            background-color: chartreuse;
            font-size: large;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            margin-left: 100px;
            margin-top: 16px;
            border: 0px;
            cursor: pointer;
            transition: 0.5s ease-in-out;
        }
        .c123:hover{
            background-color: antiquewhite;
            color: black;
            
        }
    </style>
</head>
<body>
    <h1 class="top">Enter your details</h1>
    <div class="c1">
        <div class="box">
            <form class="c12" method="POST">
                <label for="text" class="c1211">Name</label><br>
                <input type="text" class="c121" placeholder="enter your name" name="name" required><br>
                <label for="email" class="c1211">Email</label><br>
                <input type="email" class="c121" placeholder="enter your email" name="email" required><br>
                <label for="number" class="c1211">Phone number</label><br>
                <input type="number" class="c121" placeholder="enter your number" name="number" required><br>
                <input type="submit" class="c123" name="register">
            </form>
        </div>
    </div>
</body>
</html>