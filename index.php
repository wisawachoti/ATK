<?php
if(isset($_GET['controller']) && isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else{
    $controller = 'pages';
    $action = 'home';
} ?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ATK Project</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="ATKicon"><ion-icon name="shield-half-outline"></ion-icon></span>
                            <span class="ATK">ATK Project</span>
                        </a>
                    </li>
                    <li>
                        <a href="?controller=pages&action=home">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="?controller=Object&action=index">
                            <span class="icon"><ion-icon name="gift-outline"></ion-icon></span>
                            <span class="title">Object</span>
                        </a>
                    </li>
                    <li>
                        <a href="?controller=DailyLog&action=index">
                            <span class="icon"><ion-icon name="calendar-outline"></ion-icon></span>
                            <span class="title">DailyLog</span>
                        </a>
                    </li>
                    <li>
                        <a href="?controller=NesObject&action=index">
                            <span class="icon"><ion-icon name="checkmark-circle-outline"></ion-icon></span>
                            <span class="title">NecessaryObject</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            
            
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="reorder-four-outline"></ion-icon>
                    </div>
                    <div class="search">
                        <label>
                            <form method="get" action="">
                            <input type="text" name="key" placeholder="Search here">
                            <input type=hidden name=controller value=Object>
                            <button class="button button1" type="submit" name="action" value="search">
                                <ion-icon name="search-sharp"></ion-icon></button>
                            </form>
                        </label>
                    </div>
                </div>
                <br><br><?php require_once("routes.php");?></br>
            </div>

        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
        <script>
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function(){
                navigation.classList.toggle('active');
                main.classList.toggle('active');
            }

            let list = document.querySelectorAll('.navigation li');
            function activeLink(){
                list.forEach((item) => 
                item.classList.remove('hovered'));
                this.classList.add('hovered');
            }
            list.forEach((item) =>
            item.addEventListener('mouseover',activeLink));
        </script>
        
        
    </body>
</html>