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
<label class="New">  DELETE DAILYLOG  </label>
<p class="space">
    <?php
        echo "<br>Are you sure to Delete this DailyLog<br>
              <br>DailyLog ID  = $Daily->DLOGid | DailyLog Date = $Daily->DLOGdate <br> People Name = $Daily->PPname<br>";
    ?>
</p>
</div>

<form method="get" action="">
    <input type="hidden" name="controller" value="DailyLog"/>
    <input type="hidden" name="DLOGid" value="<?php echo $Daily->DLOGid; ?>"/>
    <button class="btn1" type="submit" name="action" value="index"> BACK </button>
    <button class="btn2" type="submit" name="action" value="delete"> DELETE </button>
</form>