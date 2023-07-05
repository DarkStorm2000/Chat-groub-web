# Chat-groub-web



## الهدف الاساسي هوه التعلم و اختبار القدره في الباك اكتر من الفروند قمت ب بناء الكود ب ابسط طؤيقه ممكنهة للمبتدائين اتمني ان يعجبكم



What you have to do is open the Datebase and make new and name it 
# chat-my-team
then you choose import and choose the file in the datebase, then transfer the file to 
# C://xampp/htdocs
then go to the browser and type 
# localhost/chat-groub-web 
and enjoy the site 

# شرح الكود 
```
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
```
## Add a message to data bases


```
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
```

## Fetch messages from databases
