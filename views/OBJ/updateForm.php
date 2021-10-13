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
    <label>Object ID  : <?php echo $Object->OBJid;?> </label><br>
    <label>Object Name  :  <input type="text" name="OBJname"
        value="<?php echo $Object->OBJname;?>" required/> </label><br>
    <label>Object Type  :  <input type="text" name="OBJtype"
        value="<?php echo $Object->OBJtype;?>" required/> </label><br>
    <label>Object Description  :  <input type="text" name="OBJdesc"
        value="<?php echo $Object->OBJdesc;?>" required/> </label><br>

    
    <input type="hidden" name="controller" value="Object"/>
    <input type="hidden" name="OBJid" value="<?php echo $Object->OBJid; ?>"/>
    <button class="button button1" type="submit" name="action" value="index"> Back </button>
    <button class="button button1" type="submit" name="action" value="update"> Update </button>
</form>