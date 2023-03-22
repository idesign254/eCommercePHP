<?php
include('includes/conn.php');
if(strlen($_SESSION['login'])==0)
    {   
echo "<script> window.location.assign('wishlogin.php'); </script>";
}
else{
// Code forProduct deletion from  wishlist	

if(isset($_GET['del']))
{
	$wid=intval($_GET['del']);
	//$wid=29;
$query=mysqli_query($con,"DELETE FROM wishlist WHERE id='$wid'");
}


$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$pName = $row['pName'];
$code = $row['code'];
$price = $row['price'];
$productImage1 = $row['productImage1'];
 
$cartArray = array(
 $code=>array(
 'pName'=>$pName,
 'code'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'productImage1'=>$productImage1)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = "<div class='box' style='color:red;'>Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";

    
 }
 
 }
}
?>

<?php require('includes/header.php'); ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="index.php">Home</a></li>
				<li class='active'>Wishlist</li>
			</ul>
		</div>
	</div>
</div>

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="my-wishlist-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 my-wishlist">
	<div class="table-responsive">
		<table class="table">
			
			<tbody>
<?php

$ret=mysqli_query($con,"SELECT products.code, products.pName as productname,products.productImage1 as productimage,products.price as productprice,wishlist.productId as pid,wishlist.id as wid FROM wishlist JOIN products on products.id=wishlist.productId WHERE wishlist.userId='".$_SESSION['id']."'");
$num=mysqli_num_rows($ret);
	if($num>0)
	{
while ($row=mysqli_fetch_array($ret)) {

?>

				<tr>
					<td >
					<div>	<?php //echo "<img src='images/".$row['productimage']."' >" ; ?>   </div>
					<?php echo "<img src='$imagePath".$row['productimage']."' width='50' height='40'>";  ?>
					</td>
					
					<td >
	<a href="product-details.php?pid=<?php echo htmlentities($pd=$row['pid']);?>"><?php echo htmlentities($row['productname']);?></a>		
						<div>
							<?php echo htmlentities($row['productprice']);?>.00
						</div>
					</td>
					<td>
						<form method="post" action="">
				<input type='hidden' name='code' value="<?php  echo $row['code'] ?>" />		
					 <button type="submit" style="margin-top: 5px;" class="btn btn-success">Buy Now</button>
                		</form>
					</td>
					<td >
						<a href="wish.php?del=<?php echo htmlentities($row['wid']);?>" >DELETE</a>						
					</td>
				</tr>
				<?php } } else{ ?>
				<tr>
					<td style="font-size: 18px; font-weight:bold ">Your Wishlist is Empty</td>

				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>			</div>
		</div>
</div>
</div>
<?php include('includes/footer.php');?>


<?php } ?>