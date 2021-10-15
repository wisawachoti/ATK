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
    .left{
        width:110px;
        float:left;
        text-align:left;
    }
    .right{
        width:110px;
        float:right;
        text-align:right;
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
    
    <label>Necessary Object ID  :  <input type="text" name="NESid" required/> </label><br>
    <label>Necessary Object Quantity  :  <input type="number" name="NESquantity" min="1" max="20" required/> </label><br>
    <label>Object ID  :  <select class="dropbtn" name="OBJid">
        <?php 
            foreach($objectlist as $objectas){
                echo "<option value= $objectas->OBJid>
                $objectas->OBJid</option>";
            }
        ?>
    </select></label><br>
    <label>Home Isolation ID  :  <select class="dropbtn" name="HIid">
        <?php 
            foreach($homeisolationlist as $Home){
                echo "<option value= $Home->HIid>
                $Home->HIid</option>";
            }
        ?>
    </select></label><br>

    <input type="hidden" name="controller" value="NesObject"/>
    <button class="button button1" type="submit" name="action" value="index"> Back </button>
    <button class="button button1" type="submit" name="action" value="addNesObject"> ADD </button>
</form>