<?php
include('connect/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Storm Chat</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div style="width: 100%;">
        <center>
            <h1 style=" color: white; background: black;">Dark Storm Team Chat</h1>
        </center>
        <div>
            <?php
            $query = "select * from chat ORDER BY id DESC";
            $run = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($run)) {
                $name = $row['name'];
                $msg = $row['msg'];
                $date = $row['date'];
            ?>
                <div id="chatdata">
                    <span style="color:gold; font-weight:bold;"><?php echo $name; ?></span>
                    <span> </span>
                    <span style="background: black; color: #fff; width: 500px; height: 160px;"><?php echo $msg; ?></span>
                    <span style="color:tomato; float:right;"><?php echo $date; ?></span>
                </div>
            <?php } ?>
        </div>
        <div style="justify-items: end; bottom: 0; position: fixed;">
            <form action="index.php" method="post">
                <!-- <input type="text" id="inbut1"> -->
                
                <textarea type="text" id="input2" name="msg">username : </textarea>
                <button id="button1" type="submit" name="submit" value="Send">Send massage</button>
            </form>
            <?php
            if (isset($_POST['submit'])) {

                $m = $_POST['msg'];

                $insert = "insert into chat (msg) values('$m')";
                $run_insert = mysqli_query($con, $insert);
                if ($run_insert) {
                    echo '<embed loop="false" hidden="true" src="" autoplay="true"';
                }
                header('location: index.php');
            }

            ?>
        </div>

    </div>
</body>

</html>