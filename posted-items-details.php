<?php require('includes/conn.php'); ?>

<?php require('includes/header.php'); ?>


<?php 
 if (isset($_POST["add"])){
      if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)){
          $count = count( $_SESSION["cart"]);
          $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_GET["pName"],
            'product_price' => $_GET["price"],
            'item_quantity' => $_GET["quantity"],
          );
          $_SESSION["cart"][$count] = $item_array;
          echo '<script>alert ("Product added to Cart")</script>';
         // echo '<script>window.location="shop.php</script>';
        }
      }else{
        $item_array = array(
          'product_id' => $_GET["id"],
            'pName' => $_GET["pName"],
            'product_price' => $_GET["price"],
            'item_quantity' => $_GET["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
      }
    }
$pid=intval($_GET['pid']);
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
  echo "<script> window.location.assign('user.php'); </script>";
}
else
{
mysqli_query($con,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','$pid')");
echo "<script>alert('Product added in wishlist');</script>";
header('location:wish.php');

}
}

?>

<!-- ==============================================  ============================================== -->


<br>
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product outer-bottom-sm '>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">


				</div>
			</div>
<?php 
$ret=mysqli_query($con,"SELECT * FROM products where id='$pid' ");
while($row=mysqli_fetch_array($ret))
{
?>

			<div class='col-md-9'>
				<div class="row  wow fadeInUp">
 			

					<div class="fh5co-blog animate-box">
					     <?php echo "<img src='shop/images/".$row['productImage1']."' >"; ?>
						<div class="blog-text">
							<h3 >Name :<?php echo htmlentities($row['pName']);?></h3>							
							<span class="posted_on">Price :<?php echo htmlentities($row['price']);?></span>
							<p>Availability :<?php echo htmlentities($row['productAvailability']);?></p>
							<p>Shop :<?php echo htmlentities($row['shop']);?></p>
							<p>description :<?php echo htmlentities($row['description']);?></p>
							<p>category :<?php echo htmlentities($row['category']);?></p>
							<a  data-toggle="tooltip" data-placement="right" title="Wishlist" href="posted-items-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist">Wish</a>
							<form method="post" action="posted-items-details.php?action=add&id=<?php echo $row["id"] ?>">
							
					 <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" disabled>
                </form>
						</div> 
					</div>
				



					
							
						</div>
					</div>
				</div>

						</div>
					</div>

<?php  } ?>

<?php include('includes/footer.php');?>

