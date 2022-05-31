<?php
$name=$_GET["name"];
$item=$_GET["item"];
$r=$_GET["rate"];
$qty=$_GET["quantity"];
$c=count($item);
$price=0;
$gt=0;
$quantity=array();
$rate=array();
$j=0;
for($i=0;$i<count($qty);$i++)
{
    if($qty[$i]>0)
    {
         $quantity[$j]=$qty[$i];
         $rate[$j]=$r[$i];
         $j++;
    }
}
error_reporting(0);

// 


//
echo"<table align='center' border='0'>";
echo"<tr><td><h3><b>$name, Your Grocery Bill Is</b></h3></td></tr>";
echo"<table border='1' align='center'>";
echo"<tr><th>Item Name</th><th>Rate</th><th>Quantity</th><th>Total</th>";

for($i=0;$i<$c;$i++)
{
    echo"<tr>";
    $price=$rate[$i] * $quantity[$i];
    $gt=$gt + $price;
    echo"<td>$item[$i]</td>";
    echo"<td>$rate[$i]</td>";
    echo"<td>$quantity[$i]</td>";
    echo"<td>$price</td>";
    echo"</tr>";
}
echo"<tr><td colspan=3>Grand Total</td><td>$gt</td></tr>";
echo"<table>";
 ?>
