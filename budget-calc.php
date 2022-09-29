<!DOCTYPE HTML>
<html>  
<body>

<form id="form1" name="form1" method="post" action="action.php">
Average CPC: <input type="text" name="cpc" id="cpc"><br>
Click-Through Rate: <input type="text" name="ctr" id="ctr"><br>
Conversion Rate: <input type="text" name="cr" id="cr"><br>
Lead-to-Conversion Rate: <input type="text" name="lcr" id="lcr"><br>
Monthly Goal: <input type="text" name="goal" id="goal"><br> 
Avg. Value of Sale: <input type="text" name="avgSale" id="avgSale"><br>
<p>
 <label>Submit
 <input type="submit" name="submit" id="submit" value="Submit" />
 </label>
 </p>
</form>


echo "Projections";
echo '<br>';
echo '<br>';

echo "Number of Sales Needed: ";
$salesNeeded = $goal / $avgSale;
echo $salesNeeded;
echo '<br>';

echo "Number of Leads Needed: ";
$leadsNeeded = ($salesNeeded / $lcr) * 100;
echo $leadsNeeded;
echo '<br>';

echo "Number of Clicks Needed: ";
$clicksNeeded = ($leadsNeeded / $cr) * 100;
echo round($clicksNeeded, 0);
echo '<br>';

echo "Number of Impressions Needed: ";
$impressionsNeeded = ($clicksNeeded * $ctr);
echo round($impressionsNeeded, 0);
echo '<br>';

echo "Cost of Budget Recommended: $";
$budget = $clicksNeeded * $cpc;
echo round($budget, 2);
?>

</body>
</html>