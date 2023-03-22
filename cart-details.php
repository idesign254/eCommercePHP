    <?php  require('includes/conn.php'); ?>

  <!-- New Arrivals -->
<?php
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
                      } 
                }
            }
 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
                }
              }
          }
?>

<?php  include('includes/header.php'); ?>


        <div style="clear: both"></div><br>
        <div class="table-responsive" style="padding-left: 20px;padding-right: 20px;">

          <?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>  
          <table class="table table-bordered">
            <tbody>
          <tr>
           <th width="20%">Image</th>  
            <th width="20%">Product Name</th>
            <th width="10%">Quantity</th>
            <th width="13%">UNIT Price </th>
            <th width="10%">Action</th>  
            <th width="10%">Items Total</th>                      
          </tr>

          <?php   
foreach ($_SESSION["shopping_cart"] as $product){
?>
                  <tr>
          <td><?php echo "<img src='$imagePath".$product['productImage1']."' width='50' height='40'>";  ?></td>
          <td><?php echo $product["pName"]; ?><br /></td>              

           <td>
          <form method='post' action=''>
                  <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                  <input type='hidden' name='action' value="change" />
                  <select name='quantity' class='quantity' onChange="this.form.submit()">
                  <option <?php if($product["quantity"]==0) echo "selected";?>value="0">0</option>
                  <option <?php if($product["quantity"]==1) echo "selected";?>value="1">1</option>
                  <option <?php if($product["quantity"]==2) echo "selected";?>value="2">2</option>
                  <option <?php if($product["quantity"]==3) echo "selected";?>value="3">3</option>
                  <option <?php if($product["quantity"]==4) echo "selected";?>value="4">4</option>
              <option <?php if($product["quantity"]==5) echo "selected";?>value="5">5</option>
              </select>
           </form>
                </td>

                <td><?php echo "Ksh.".$product["price"]; ?></td>

                <td>
                <form method='post' action=''>
              <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
              <input type='hidden' name='action' value="remove" />
              <button type='submit' class='btn btn-danger'>Remove Item</button>
              </form>
              </td> 

              <td><?php echo "Ksh.".$product["price"]*$product["quantity"]; ?></td>   
            
                </tr>
                <?php
              $total_price += ($product["price"]*$product["quantity"]);  
              }            
                   ?>

                   <tr>
              <td colspan="5" align="right">
              <strong>TOTAL: <?php echo "Ksh. ".$total_price; ?></strong>
              </td>
              </tr>
                </tbody>
         </table>
         <?php
}else{
  echo "<h3>  Your cart is empty!</h3>";
  }
?>
         <center> <h3 style="margin-bottom: 10px;"> <a href="payment-method.php"><span style="margin-top: 5px;" class="btn btn-success"><?php echo "Ksh  ".$total_price; ?>  | Checkout</span></a>
          </h3>
        </center>
         
        </div>
  <!-- Footer -->

<?php include('includes/footer.php');  ?>