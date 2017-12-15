<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="../app/assets/css/style.css">
<!--    <script src="../app/assets/js/jquery-3.2.1.js"></script>-->
    <title>Order App</title>
</head>

<body>
<header class="nav">
    <div class="container">
        <div class="left">
            <ul>
                <li><a href="/home"><i class="fa fa-first-order fa-lg"></i> Home</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <?php
                if(isset($_SESSION['username'])){
                    echo "<ul>";
                    echo "<li><a href='/order/new'><span class='hidden'> New order</span></a></li>";
                    echo "<li><a href='/user/edit'><span class='hidden'> Settings</span></a></li>";
                    echo "<li><a href='/user/logout'><span class='hidden'> Logout</span></a></li>";
                    echo "</ul>";
                } else{
                    echo "<li><a href='/user/login'>Login</a></li>";
                    echo "<li><a href='/user/register'>Register</a></li>";
                }
                ?>
<!--                <li><a href='/user/login'>Login</a></li>-->
<!--                <li><a href='/user/register'>Register</a></li>-->
            </ul>
        </div>
    </div>

</header>
