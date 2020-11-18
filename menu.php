<!DOCTYPE html>
<!--
	File Name: menu.php
	Date:7/15/20
	Programmer: Maqsuda Kabir
	-->
<html>

<head>
    <title>Pulse Web-Report</title>
    <meta charset="utf-8">
    <html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”stylesheet” href=style.css> </head>
    
<!--Title Redesign -->
<BODY bgcolor="blue">
    <header>
        <div class="plate">
            <p class="script"><span> </span></p>
            <p class="shadow text1">Pulse Web-Report</p>
            <p class="script"><span> </span></p>
        </div>
    </header>
    <!--Dropdown Forms  -->
    <form id="form1" name="form1" method="post" action="              
           <?php echo $PHP_SELF; ?>"> Graph-Type :
        <select name="select graph-type">
            <option value="">--- List ---</option>
            <option value="line-graph">Line-Graph (Raw Data)</option>
            <option value=”box-plot”>Box-Plot (Summary Data)</option>
            <option value="column-graph">Column-Graph (Timeouts Data)</option>
            <option value="0">All</option> ?>
            <option value="<? echo $row_list['graph_type']; ?>" <? if($row_list[ 'data_type']==$select){ echo "selected"; } ?>
                <?echo $row_list['data_type'];?>
        </select>
        <table>
            <!-- form method attribute is used for buttons with type="submit." The form-data can be sent as URL variables (with method="get) or as HTTP post (with method="post"). -->
            <form method="post" action="http://webdevbasics.net/scripts/demo.php">
                <input type="submit" name="Submit" value="Select" /> </form>
        </table>
</body>

</html>
