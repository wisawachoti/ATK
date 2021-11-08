<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
    <head></head>
    <body>
        <?php echo "controller= ".$controller.",action=".$action;?>
        <br>
        [<a href="?controller=pages&action=home">home</a>]
        [<a href="?controller=StaffLab&action=index">StaffLab</a>]
        [<a href="?controller=LabTest&action=index">LabTest</a>]
        [<a href="?controller=RTTest&action=index">RTTest</a>]
        <br>
         
        <?php require_once("./routes.php");?>
    </body>
</html>