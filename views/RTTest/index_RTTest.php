<table border=1>
<br>new RTTest <a href=?controller=RTTest&action=newRTTest> click</a><br>
<br>

<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="RTTest">
        <button type="submit" name="action" value="search">
search</button>
</form>


<tr>
    <td>rt_test_id</td>
    <td>rt_test_date</td>
    <td>rt_test_time</td>
    <td>atk_id</td>
    <td>ws_id</td>
    <td>lab_id</td>
    <td>stafflab_id</td>
    <td>update</td>
    <td>delete</td>
</tr>

<?php foreach($RTTest_List as $RT)
{
        echo "<tr>
        <td>$RT->rt_test_id</td>
        <td>$RT->rt_test_date</td>
        <td>$RT->rt_test_time</td>
        <td>$RT->atk_id</td>
        <td>$RT->ws_id</td>
        <td>$RT->lab_id</td>
        <td>$RT->stafflab_id</td>
        
        
        </tr>";
}

echo "</table>";
?>