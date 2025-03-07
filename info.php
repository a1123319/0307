<!DOCTYPE html>
<html>
    <head>
        <title>報名成功</title>
    </head>
    <body bgcolor="#F2D6EF" text="#2C0728">
        <h1>報名成功！</h1>
        以下是你的報名資訊<br>
        <?php
            echo "場次：" . $_POST["place"] . "<br>";
            echo "姓名：" . $_POST["name"] . "<br>";
            echo "E=Mail：" . $_POST["email"] . "<br>";
            echo "連絡電話：" . $_POST["phone"] . "<br>";
            echo "備註：<pre>" . nl2br(strip_tags($_POST["note"])) . "</pre>"
        ?>
        <br>
        我們期望到時見到您，謝謝！<br>
        <img src="people.jpeg">
    </body>
</html>