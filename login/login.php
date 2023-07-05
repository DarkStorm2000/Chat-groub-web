<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in && Sign in</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="https://k.top4top.io/p_273576f1h1.png">
</head>

<body>
    <header>
        <center><img src="https://k.top4top.io/p_273576f1h1.png" alt="" srcset="" style="width: 60px;" id="imglogo">
        </center>
    </header><br><br><br><br><br><br><br><br>
    <center>
        <form method="post" action="check_login.php">

            <h1 id="textlo">Log in && Sign in</h1>
            <?php if(isset($_SESSION['errors'])) {?>
                <p><?php echo $_SESSION['errors'] ?> </p>
            <?php } ?>
            <?php unset($_SESSION['errors']) ?>
            <br><br><br><br>
            <div class="login">
                <input type="text"  id="butoon1" placeholder="Enter User Name ........" name="username">
                <br><br>
                <input type="text" placeholder="Enter Password ......" id="button2" name="password">
                <br><br>

                <button type="submit" name="submit" id="button3">Login</button>
            </div>
        </form>
    </center>


    
</body>

</html>