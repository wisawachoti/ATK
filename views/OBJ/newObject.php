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
    
    <label>Object ID  :  <input type="text" name="OBJid" required/> </label><br>
    <label>Object Name  :  <input type="text" name="OBJname" required/> </label><br>
    <label>Object Type  :  <input type="text" name="OBJtype" required/> </label><br>
    <label>Object Description  :  <input type="text" name="OBJdesc" required/> </label><br>

    <input type="hidden" name="controller" value="Object"/>
    <button class="button button1" type="submit" name="action" value="index"> Back </button>
    <button class="button button1" type="submit" name="action" value="addObject"> ADD </button>
</form>