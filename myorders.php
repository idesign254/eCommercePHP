<?php  require('includes/conn.php'); ?>

 <?php
    if(isset($_GET['cancel'])){
      $orderid=intval($_GET['cancel']);
        //$wid=29;
      $query=mysqli_query($con,"DELETE FROM orders WHERE id='$orderid'");
    }
  ?>

<?php  include('includes/header.php'); ?>

        <div style="clear: both"></div><br>
        <div class="table-responsive" style="padding-left: 20px;padding-right: 20px;">
                 <?php
                  $email=$_SESSION['login'];
$result = mysqli_query($con,"SELECT * FROM orders WHERE email='$email'");
            $myorders = mysqli_num_rows($result);
            {
            ?>
             <center> <span> My orders = <?php echo htmlentities($myorders);?> </span> </center>
                      <?php } ?>

          <table class="table table-bordered">
            <tbody>
          <tr>
            <th width="10%">username</th>
            <th width="10%">address</th>
            <th width="10%">cash</th>
            <th width="10%">paymentMethod</th>  
            <th width="10%">orderStatus</th>                      
            <th width="10%">DatePosted</th>                      
            <th width="10%">Action</th>                      
          </tr>

                      <?php
                $email=$_SESSION['login'];
             
                $query=mysqli_query($con,"SELECT orders.id as orderid,orders.username,orders.address,orders.cash,orders.paymentMethod,orders.orderStatus,orders.DatePosted FROM orders  WHERE email='$email' ");
             
                $num=mysqli_num_rows($query);
                   if($num>0)
                   {
                  while ($row=mysqli_fetch_array($query)) {

                      ?>
                
                  <tr>
                <td><?php echo htmlentities($row['username']);?></td>
                <td><?php echo htmlentities($row['address']);?></td> 
                <td><?php echo htmlentities($row['cash']);?></td> 
                <td><?php echo htmlentities($row['paymentMethod']);?></td> 
                <td><?php echo htmlentities($row['orderStatus']);?></td> 
                <td><?php echo htmlentities($row['DatePosted']);?></td> 
                <td> <a href="myorders.php?cancel=<?php echo htmlentities($row['orderid']);?>" >Cancel</a></td>                
                </tr>
              <?php } }  ?>
                </tbody>
         </table>
         
        <center> <span><a href="trackorder.php"> Track my orders </a></span> </center>
        </div>

<?php include('includes/footer.php');  ?>