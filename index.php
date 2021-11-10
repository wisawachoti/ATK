<?php 

    if(isset($_GET['controller'])&&isset($_GET['action']))
    {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }
    else
    {
        $controller = 'pages';
        $action = 'home' ;
    }
?>
<html>
    <head></head>
    <body>
        <?php echo "controller = ".$controller, " & action = ".$action ; ?>
        <br>
            [<a href = "?controller=pages&action=home">หน้าหลัก</a>]
            [<a href = "?controller=medicine&action=index">ยารักษา</a>]
            [<a href = "?controller=medicalRecord&action=index">บันทึกการให้ยารักษา</a>]
        <br>
        <?php require_once("routes.php"); ?>
    </body>
</html>