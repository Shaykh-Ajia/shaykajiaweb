<?php
session_start();
$cust_id=$_SESSION["cust_id"];
$email=$_SESSION['user_email'];
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM event WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('item'=>$productByCode[0]["item"], 'price_diff'=>$productByCode[0]["price_diff"],'avg_weight'=>$productByCode[0]["avg_weight"],'other_market_price'=>$productByCode[0]["other_market_price"],'code'=>$productByCode[0]["code"], 'product_id'=>$productByCode[0]["id"],'quantity'=>$_POST["quantity"], 'cust_id'=>$cust_id, 'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE><?php echo $_SESSION["schoolid"] ?></TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<center>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
	$item_totalprice = 0;
	$item_totalweight = 0;
?>	
<form method="post" action="add-cart2_cod.php">
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;"><strong>Name</strong></th>
<th style="text-align:left;"><strong>Code</strong></th>
<th style="text-align:right;"><strong>Quantity</strong></th>
<th style="text-align:right;"><strong>Avg. Weight</strong></th>
<th style="text-align:right;"><strong>Price</strong></th>
<th style="text-align:right;"><strong>OtherMarket Price</strong></th>
<th style="text-align:right;"><strong>AmtSaved</strong></th>
<th style="text-align:center;"><strong>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["item"]; ?></strong></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["avg_weight"]*$item["quantity"]."Kg"; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "&#8358;".$item["price"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "&#8358;".$item["other_market_price"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "&#8358;".$item["price_diff"]*$item["quantity"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="cart_cod.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		 $item_totalprice += ($item["price_diff"]*$item["quantity"]);
		  $item_totalweight += ($item["avg_weight"]*$item["quantity"]);
	// INSERT CODE
		
		
		
		
		}
		?>

<tr>
<td colspan="4" align=right><strong>Total Avg Weight:</strong> <?php echo $item_totalweight."Kg"; 
$_SESSION["item_totalweight"]=$item_totalweight;
?></td>
<td colspan="2" align=right><strong>Total Amt Saved:</strong> <?php echo "&#8358;".$item_totalprice; 
$_SESSION["item_totalprice"]=$item_totalprice;
?></td>
<td colspan="2" align=right><strong>Total Price:</strong> <?php echo "&#8358;".$item_total; 
$_SESSION["item_total"]=$item_total;
?></td>

</tr>
<tr>
<td colspan="10" align=right> <select   name="location"   >
									<option>Select Delivery Location</option>
                                       <?php 
				$product_array = $db_handle->runQuery("SELECT * FROM tlblocation ");
				foreach($product_array as $key=>$value){
				 
				?>
				<option  ><?php echo $product_array[$key]["location"]; ?></option>
				<?php
				}
				?>
                                        
                                        
                                    </select>
       <input type="text"   name="address"  placeholder="Address"></td>
</tr>

<tr>
<td colspan="7" align=right>   <a href="dashboard.php"> <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Goto dashboard
                        </button></a>  <button type="submit" class="btn btn-success">
                            Continue <span class="glyphicon glyphicon-play"></span>
                        </button> </td>
</tr>

</tbody>
</table>	</form>	
  <?php
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM event ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="cart_cod.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["eventBanner"]; ?>" width="100" height="70"></div>
			<div><strong><?php echo $product_array[$key]["item"]; ?></strong></div>
			<div class="product-price"><?php echo "&#8358;".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}
	?>
</div>
</BODY></center>
</HTML>