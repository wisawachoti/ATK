<style>
  table {
    margin: auto;
    margin-bottom: 40px;
    border-collapse: collapse;
    border-spacing: 0;
    width: 70%;
    border:1px solid #ddd;
}
h2{
    text-align: center;
}
th, td {
    text-align: left;
    padding: 15px;
}

tr:nth-child(even){
    background-color: #f2f2f2;
    transition: .4s;
}
tr:nth-child(odd){
    transition: .4s;
    background-color: white;
}


th {
    background-color: #C64B8C;
    color: black;
}
tr:nth-child(even):hover{
        background: rgb(67,61,167);
background: linear-gradient(90deg, rgba(67,61,167,1) 0%, rgba(49,4,92,1) 0%, rgba(63,10,112,1) 30%, rgba(24,115,177,1) 100%);
    color: white;
}
tr:nth-child(odd):hover{
        background: rgb(14,237,122);
background: linear-gradient(90deg, rgba(14,237,122,1) 0%, rgba(169,58,196,1) 0%, rgba(94,41,184,1) 30%, rgba(45,140,227,1) 100%);
    color: white;
}
.btn {
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;
  position: relative;
  color: #fff;
  font-weight: 700;
  font-size: 15px;
  background-color: #222;
  padding: 17px 60px;
  margin: 0 auto;
  box-shadow: 0 5px 15px rgba(0,0,0,0.20);
}

.btn span {
  position: relative; 
  z-index: 1;
}

.btn:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 490%;
  width: 140%;
  background: rgb(218,118,118);
background: radial-gradient(circle, rgba(218,118,118,1) 0%, rgba(251,173,255,1) 100%);
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);
}

.btn:hover:after {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}

.a{
        padding-left: 290px;
        padding-bottom: 10px;
}
.b{
  text-align: center;
        font-size: 80px;
}
</style>

<div class = "b">
  ตารางพนักงานแลป
</div>
<table border=1>
<div class = "a">
<br>new StaffLab <a href=?controller=StaffLab&action=newStaffLab> click</a><br>
<br></div>
<form method="get" action="">
        <div class = "a">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="StaffLab">
        <button type="submit" name="action" value="search">
search</button></div>
</form>



<tr>
    <td>staff_lab_id</td>
    <td>staff_lab_name</td>
    <td>update</td>
    <td>delete</td>
</tr>

<?php foreach($StaffLab_List as $SL)
{
        echo "<tr>
        <td>$SL->staff_lab_id</td>
        <td>$SL->staff_lab_name</td>
        <td><a href=?controller=StaffLab&action=updateForm&staff_lab_id=$SL->staff_lab_id>update</a></td>
        <td><a href=?controller=StaffLab&action=deleteConfirm&staff_lab_id=$SL->staff_lab_id>delete</a></td>
        </tr>";
}

echo "</table>";
?>