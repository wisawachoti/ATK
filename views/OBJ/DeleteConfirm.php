<style>
    .button {
        padding: 5.75px 8px;
        text-align: center;
        text-decoration: none;
        font-size: 12px;
        margin: 0px 0px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: rgb(57, 57, 78); 
        color: white; 
        border: 2px solid rgb(57, 57, 78);
    }

    .button1:hover {
        background-color: white;
        color: rgb(57, 57, 78);
        border: 2px solid white;
    }
</style>
<?php
    echo "<br>Are you sure to Delete this Object<br>
          <br>Object ID  = $Object->OBJid Object Name = $Object->OBJname<br>";
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="Object"/>
    <input type="hidden" name="OBJid" value="<?php echo $Object->OBJid; ?>"/>
    <button class="button button1" type="submit" name="action" value="index"> Back </button>
    <button class="button button1" type="submit" name="action" value="delete"> Delete </button>
</form>