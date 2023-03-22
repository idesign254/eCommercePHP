<?php  require('includes/conn.php'); ?>
  <?php  if(strlen($_SESSION['login'])==0)
    {   
      echo "<script> window.location.assign('trackorderlogin.php'); </script>";
    }else{
?>

<?php  include('includes/header.php'); ?>
    <div style="clear: both"></div><br>
      <div class="table-responsive" style="padding-left: 20px;padding-right: 20px;">
        <center> <span> Track orders </span> </center>
          <table class="table table-bordered">
            <tbody>
             <tr>
              <th width="5%">OrderID</th>
              <th width="10%">Status</th>
              <th width="20%">Remark</th>
              <th width="10%">DateUpdated</th>                                  
             </tr>

          
        <?php
     $email=$_SESSION['login'];
     $query=mysqli_query($con,"SELECT ordertrackhistory.orderId,ordertrackhistory.status,ordertrackhistory.remark,ordertrackhistory.PostingDate FROM ordertrackhistory SELECT user.email FROM user WHERE email='$email' LIMIT 1");
      $num=mysqli_num_rows($query);
          if($num>0) {
            while ($row=mysqli_fetch_array($query)) {
          ?>

              <tr>
                <td><?php echo htmlentities($row['email']);?></td> 
                <td><?php echo htmlentities($row['orderId']);?></td> 
                <td><?php echo htmlentities($row['status']);?></td> 
                <td><?php echo htmlentities($row['remark']);?></td> 
                <td><?php echo htmlentities($row['PostingDate']);?></td> 
               </tr>                 
              <?php } }  ?>
                </tbody>
         </table>
        </div>

<?php include('includes/footer.php');  ?>


<?php  } ?>