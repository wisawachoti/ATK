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
</style>

<form method="get" action="">

<div class="box">
    <label class="New">  UPDATE OBJECT  </label>
    <div class="search">
        <label>  Object ID :  
            <div class="box1"><?php echo $Object->OBJid;?></div>
        </label>
    </div>
    <div class="search">
        <label>  Object Name :  
            <input type="text" name="OBJname" value="<?php echo $Object->OBJname;?>" placeholder="Object Name" required/>
        </label>
    </div>
    <div class="search">
        <label>  Object Type :  
            <input type="text" name="OBJtype" value="<?php echo $Object->OBJtype;?>" placeholder="Object Type" required/>
        </label>
    </div>
    <div class="search">
        <label>  Object Description :  
            <input type="text" name="OBJdesc" value="<?php echo $Object->OBJdesc;?>" placeholder="Object Description" required/>
        </label>
    </div>
</div>

    <input type="hidden" name="controller" value="Object"/>
    <input type="hidden" name="OBJid" value="<?php echo $Object->OBJid; ?>"/>
    <button class="btn1" type="submit" name="action" value="index"> Back </button>
    <button class="btn2" type="submit" name="action" value="update"> Update </button>
</form>