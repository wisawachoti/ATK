<style>
    .btn1
    {
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
        margin: 30px 120px;
        width: 100px;
        height: 32px;
        position: relative;
        padding: 5px 10px;
        background: #8528ff;
        text-decoration: none;
        color: #fff;
        border: 12px #fff;
        box-sizing: border-box;
        box-shadow: 0 0 4px #8528ff;
        transition: 0.4s;
    }
    .btn1:hover
    {
        background: #ffcd2b;
        box-shadow: 0 0 6px #ffcd2b;
    }
    .btn2
    {
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
        margin: 30px 288px;
        width: 100px;
        height: 32px;
        position: relative;
        padding: 5px 10px;
        background: #8528ff;
        text-decoration: none;
        color: #fff;
        border: 12px #fff;
        box-sizing: border-box;
        box-shadow: 0 0 4px #8528ff;
        transition: 0.4s;
    }
    .btn2:hover
    {
        background: #ffcd2b;
        box-shadow: 0 0 6px #ffcd2b;
    }
    .space
    {
        font-size: 18px;
        text-align: center;
    }
    .New
    {
        text-align: center;
        font-size: 30px;
        font-weight: 600;
        color: #8528ff;
    }
    .box
    {
        margin: 0 100px;
        position: relative;
        width: 652px;
        padding: 20px;
        display: grid;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
    }
</style>
<div class="box">
<label class="New">  DELETE OBJECT  </label>
<p class="space">
    <?php
        echo "<br>Are you sure to Delete this Object<br>
              <br>Object ID  = $Object->OBJid | Object Name = $Object->OBJname<br>";
    ?>
</p>
</div>

<form method="get" action="">
    <input type="hidden" name="controller" value="Object"/>
    <input type="hidden" name="OBJid" value="<?php echo $Object->OBJid; ?>"/>
    <button class="btn1" type="submit" name="action" value="index"> BACK </button>
    <button class="btn2" type="submit" name="action" value="delete"> DELETE </button>
</form>