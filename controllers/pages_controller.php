<?php
class  PagesController
{
    public function home()
    {
        $wsList=wshomeModel::getAll();
        require_once('views/pages/home.php');

    }

    public function error()
    {   require_once('views/pages/error.php');}


    public function searchwsHome()
    {
        $key=$_GET['key'];
        $wsList=wshomeModel::search($key);
        require_once('views/pages/home.php');
    }
}

?>
