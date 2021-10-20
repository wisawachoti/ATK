<style>
    .search
    {
        position: relative;
        width: 400px;
        margin: 20px 100px;
    }
    .search label
    {
        position: relative;
        width: 100%;
        height: 10px;
        font-weight: 600;
    }
    .search label input
    {
        margin-top: 20px;
        width: 100%;
        height: 40px;
        border-radius: 40px;
        padding: 5px 25px;
        padding-left: 35px;
        font-size: 18px;
        outline: none;
        border: 1px solid #000;
    }
    .search label .box1
    {
        margin-top: 20px;
        width: 100%;
        height: 40px;
        border-radius: 40px;
        padding: 8px 25px;
        padding-left: 35px;
        font-size: 18px;
        outline: none;
        border: 1px solid #000;
    }
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
    .db
    {
        margin: 20px 100px;
    }
    .db label
    {
        position: relative;
        width: 100%;
        height: 10px;
        font-weight: 600;
    }
    .db label select
    {
        margin-top: 20px;
        width: 97%;
        height: 40px;
        border-radius: 40px;
        padding: 5px 25px;
        padding-left: 35px;
        font-size: 18px;
        color: black;
        outline: none;
        border: 1px solid #000;
    }
    .dropbtn {
        background-color: #fff;
        color: grey;
        padding: 4.5px 6.5px;
    }
</style>

<form method="get" action="">

<div class="box">
    <label class="New">  UPDATE DAILYLOG  </label>
    <div class="search">
        <label>  DailyLog ID :  
            <div class="box1"><?php echo $Daily->DLOGid;?></div>
        </label>
    </div>
    <div class="db">
    <label>DailyLog Colour :  <select class="dropbtn" name="DLOGcolour">
            <?php 
                $Colour = array("Green", "Yellow");
                foreach($Colour as $Color){
                    echo "<option value= $Color";
                    if($Daily->DLOGcolour == $Color){
                        echo " selected='selected'";
                    }
                    echo ">$Color</option>";
                }
            ?>
    </select></label><br></div>

    <div class="search">
        <label>  DailyLog Date :  
            <input type="Date" name="DLOGdate" value="<?php echo $Daily->DLOGdate;?>" placeholder="DailyLog Date" required/>
        </label>
    </div>
    <div class="search">
        <label>  DailyLog Illness :  
            <input type="text" name="DLOGillness" value="<?php echo $Daily->DLOGillness;?>" placeholder="DailyLog Illness" required/>
        </label>
    </div>
    
    <div class="db">
    <label>Home Isolation ID :  <select class="dropbtn" name="HIid">
        <?php
            foreach($homeisolationlist as $Home){
                echo "<option value= $Home->HIid";
                if($Home->HIid == $Daily->HIid){
                    echo " selected='selected'";
                }
                echo ">$Home->HIid</option>";
            }
        ?>
    </select></label><br></div>
</div>
    
    <input type="hidden" name="controller" value="DailyLog"/>
    <input type="hidden" name="DLOGid" value="<?php echo $Daily->DLOGid; ?>"/>
    <button class="btn1" type="submit" name="action" value="index"> Back </button>
    <button class="btn2" type="submit" name="action" value="update"> Update </button>
</form>