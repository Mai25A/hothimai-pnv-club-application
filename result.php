<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/resultStyle.css">
    <title>Document</title>
</head>
<body>
    <img src="https://img5.thuthuatphanmem.vn/uploads/2021/07/17/icon-huy-chuong-trai-tim_054624128.png" alt="HuyChuong">
    <?php 
    
        if (isset($_POST["name"])) {
            echo "<h1>"." Thx you " . $_POST["name"]."!!</h1><br>";
        }
        if (isset($_POST["club"])) {
            echo "We received your application for the ".$_POST["club"]."<br>";
        }
        if (isset($_POST["skills"])) {
            $selected = $_POST["skills"];
         
            $listSelected = implode(" and ", $selected);
            echo "You are".$listSelected."<br>";
        }
        if (isset($_POST["time"])) {
            echo "You available on ".$_POST["time"]."<br>";
        }
    ?>
</body>
</html>