<?php

$cpc = $_REQUEST['cpc'];
$ctr = $_REQUEST['ctr'];
$cr = $_REQUEST['cr'];
$lcr = $_REQUEST['lcr'];
$goal = $_REQUEST['goal'];
$avgSale = $_REQUEST['avgSale'];

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