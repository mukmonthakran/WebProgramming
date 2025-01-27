<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <?php
    echo "<p class = 'big'>PROFILE </p>";
    $name = "นางสาวมณฑกานต์ ศรีมงคล";
    $nickname = "มุก";
    $age = 19;
    $birth = "28 มกราคม 2548";
    $faculty = "มหาวิทยาลัยพระจอมเกล้าพระนครเหนือ";
    $branch = " เทคโนโลยีสารสนเทศ (IT)";
    $image = 'pic.jpg';

    echo  "<p class= 'normal'>
    ชื่อ - นามสกุล : $name
    <br><br>ชื่อเล่น : $nickname
    <br><br>อายุ : $age
    <br><br>วันเกิด : $birth
    <br><br>คณะ : $faculty
    <br><br>สาขา : $branch
</p><br>";
    echo "<center><img src='$image' width='30%'  ></center>";
    echo "<hr>"

    ?>
</body>
</html>