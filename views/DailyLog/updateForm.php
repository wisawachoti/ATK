<style>
    input[type=text], [type=number], [type=date] {
        width: 10%;
        padding: 5px 8px;
        margin: 5px 0px;
        text-align: center;
        box-sizing: border-box;
        border: none;
        background-color: rgb(57, 57, 78);
        color: white;
    }

    .dropbtn {
        background-color: rgb(57, 57, 78);
        color: white;
        padding: 4.5px 6.5px;
        border: none;
    }

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

<form method="get" action="">
    <label>DailyLog ID  : <?php echo $Daily->DLOGid;?> </label><br>
    <label>DailyLog Date  :  <input type="date" name="DLOGdate"
        value="<?php echo $Daily->DLOGdate;?>" required/> </label><br>
    <label>DailyLog Colour  :  <select class="dropbtn" name="DLOGcolour">
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
    </select></label><br>
    <label>DailyLog Illness  :  <input type="text" name="DLOGillness"
        value="<?php echo $Daily->DLOGillness;?>" required/> </label><br>
    <label>Home Isolation ID  :  <select class="dropbtn" name="HIid">
        <?php 
            foreach($homeisolationlist as $Home){
                echo "<option value= $Home->HIid";
                if($Home->HIid == $Daily->HIid){
                    echo " selected='selected'";
                }
                echo ">$Home->HIid</option>";
            }
        ?>
    </select></label><br>

    
    <input type="hidden" name="controller" value="DailyLog"/>
    <input type="hidden" name="DLOGid" value="<?php echo $Daily->DLOGid; ?>"/>
    <button class="button button1" type="submit" name="action" value="index"> Back </button>
    <button class="button button1" type="submit" name="action" value="update"> Update </button>
</form>