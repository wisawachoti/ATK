<?php
    if(isset($_GET['controller'])&&isset($_GET['action']))
    {
        $controller=$_GET['controller'];
        $action=$_GET['action'];
    }
    else
    {
        $controller='pages';
        $action='home';
    }
?>
<html>
    <head></head>
    <body>
        <br>[<a href="?controller=pages&action=home">หน้าหลัก</a>]
            [<a href="?controller=staffcheckpoint&action=index">ข้อมูลเจ้าหน้าที่</a>]
            [<a href="?controller=workschedule&action=index">ตารางงาน</a>]
        <br>
        <?php require_once("routes.php"); ?>
    </body>
</html>
