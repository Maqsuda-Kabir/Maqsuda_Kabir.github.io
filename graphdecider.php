
<!DOCTYPE html>
<!--
	File Name: graphdecider.php
	Date:7/15/20
	Programmer: Maqsuda Kabir
	-->
<html>

<head>
    <title>Pulse GraphDecider Report</title>
    <meta charset="utf-8">
    <html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”stylesheet” href=style3.css>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--  jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
    
<!--Title Redesign -->
<BODY bgcolor="blue">
    <header>
        <div class="plate">
            <p class="script"><span> </span></p>
            <p class="shadow text1">Pulse GraphDecider Report</p>
            <p class="script"><span> </span></p>
        </div>
    </header>
    <script type="text/javascript">
        function changeStartDate() {
            oForm = eval(document.getElementById("frmForm"));
            iCustomerId = document.getElementById("startdate").value;
            url = "showDetails1.php?frm_action=3&cust_id=" + iCustomerId;
            document.location = url;
        }
    </script>
    <!-- Dropdown Form -->
    <form name="frmForm" id="frmForm">
        <table border="0" cellspacing="2" cellpadding="2" width="50%">
            <tr>
                <td align="right"><strong>GraphDecider</strong></td>
                <td align="left">
                    <select name="GraphDecider" id="graphdecider" onchange="javascript:changeGraphDecider();">
                        <option value="">--- Select ---</option>
                        <option value="line-graph">Line-Graph (Raw Data)</option>
                        <option value=”box-plot”>Box-Plot (Summary Data)</option>
                        <option value="column-graph">Column-Graph (Timeouts Data)</option>
                        <option value="0">All</option>
                        <!-- Viewing Data -->
                        <tr>
                            <td align="right"><strong>Graph Parameter</strong></td>
                            <td align="left">
                                <select name="Graph Parameter" id="graphparameter" onchange="javascript:changeGraphDecider();">
                                    <option value="">--- Select ---</option>
                                    <option value="abortbatch">abortbatch</option>
                                    <option value="aggregation">aggregation</option>
                                    <option value="commentlot">commentlot</option>
                                    <option value="completebatch">completebatch</option>
                                    <option value="dispatchlistupdate">dispatchlistupdate</option>
                                    <option value="eventlogged">eventlogged </option>
                                    <option value="fetchlot">fetchlot </option>
                                    <option value="getbackupargusdata">getbackupargusdata</option>
                                    <option value="getbatchstatus">getbatchstatus</option>
                                    <option value="getdispatchlist">getdispatchlist</option>
                                    <option value="getentitiesbetweenoperations">getentitiesbetweenoperations</option>
                                    <option value="getentityatoperation">getentityatoperation</option>
                                    <option value="getentityhistory">getentityhistory </option>
                                    <option value="getentitystatus">getentitystatus</option>
                                    <option value="getholdcodes">getholdcodes</option>
                                    <option value="getlotattributes">getlotattributes </option>
                                    <option value="getlothistory">getlothistory </option>
                                    <option value="getlotobject">getlotobject </option>
                                    <option value="getprocesscapability">getprocesscapability </option>
                                    <option value="getstrinfo">getstrinfo </option>
                                    <option value="getsublots">getsublots</option>
                                    <option value="holdbatch">holdbatch</option>
                                    <option value="logevent">logevent </option>
                                    <option value="moveinbatch">moveinbatch </option>
                                    <option value="moveoutbatch">moveoutbatch </option>
                                    <option value="recipechanged">recipechanged</option>
                                    <option value="setentityobject">setentityobject</option>
                                    <option value="setlotattributes">setlotattributes</option>
                                    <option value="setlotobject">setlotobject</option>
                                    <option value="shutdown">shutdown </option>
                                    <option value="startbatch">startbatch</option>
                                    <option value="validatebatchstatus">validatebatchstatus</option>
                                    <option value="validateoperator">validateoperator</option>
                                </select>
                                <tr>
                                    <td align="right"><strong>Summary Data</strong></td>
                                    <td align="left">
                                        <select name="Summary Data " id="summarydata" onchange="javascript:changeSummaryData();">
                                            <option value="">--- Select ---</option>
                                            <option value="day">Day</option>
                                            <option value="week">Week</option>
                                            <option value="month">Month</option>
                                            <?php if($_REQUEST['frm_action'] == 3) 
?>
                                                <!-- Table & Date Input -->
                                                <tr>
                                                    <td colspan="2">
                                                        <table style="border:1px solid #003366;" cellspacing="2" cellpadding="2" width="100%" bgcolor="#003366">
                                                            <tr bgcolor="#EFEFEF">
                                                                <td><b><font color='Black'>Start Date</font></b>
                                                                    <input type="date" name="myDate" id="myDate"> </td>
                                                                <td><b><font color='Black'>End Date</font></b>
                                                                    <input type="date" name="myDate" id="myDate"> </td>
                                                                <td><b><font color='Black'>Category</font></b>
                                                                    <select name="select category">
                                                                        <option value="">--- Select ---</option>
                                                                        <option value="averageresponsetime">Average Response Time</option>
                                                                        <option value="maxrsptime">Max. Response Time</option>
                                                                        <option value="totaltrans">Count of Transactions</option>
                                                                        <option value="totaltimeout">Total Timeouts</option>
                                                                    </select>
                                                                    <tr bgcolor="#89cfef">
                                                                        <td><b><font color='#663300'>
</font></b></td>
                                                                        <td><b><font color='#663300'><?php echo $enddate;?></font></b></td>
                                                                        <td><b><font color='#663300'><?php echo $category;?></font></b></td>
                                                                        <?php  ?>
                                                                            <table>
                                                                                <!-- Label tag used to associate text label with a form. -->
                                                                                <form method="post" action="http://webdevbasics.net/scripts/demo.php">
                                                                                    <input type="submit" name="Submit" value="Submit" /> </form>
                                                                            </table>
</body>

</html>
