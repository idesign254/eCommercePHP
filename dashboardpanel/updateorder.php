<?php
session_start();

include_once 'include/config.php';
if(strlen($_SESSION['admnlogin'])==0)
  { 
echo "<script> window.location.assign('index.php'); </script>";
}
else{
$oid=intval($_GET['oid']);
if(isset($_POST['submit2'])){
$email= $_POST['email'];
$status=$_POST['status'];
$remark=$_POST['remark'];//space char

$query=mysqli_query($con,"insert into ordertrackhistory(orderId,email,status,remark) 
  values('$oid','$email','$status','$remark')");
$sql=mysqli_query($con,"update orders set orderStatus='$status' where id='$oid'");
echo "<script>alert('Order updated sucessfully...');</script>";
echo "<script> window.close(); </script>";
//}
}

 ?>
      <script language="javascript" type="text/javascript">
        function f2(){
        window.close();
            }ser
              function f3(){
        window.print(); 
          }
      </script>

<?php include('include/header.php'); ?>

<div style="margin-left:50px;padding: 80px;">
    <form name="updateticket" id="updateticket" method="post"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
    
    <?php
   $query=mysqli_query($con,"SELECT * FROM orders WHERE id='$oid' ");
   $cnt=1;
    while($row=mysqli_fetch_array($query))
      {
            ?> 
    
    <tr height="30">
      <td  class="fontkink2"><b>Oder Status : </b> <?php echo $row['orderStatus'];  ?></td>      
    </tr>

    <tr height="30">
      <td  class="fontkink1"><b>order Id:</b> <?php echo $oid;?></td>
    </tr>

    <tr height="30">
      <td  class="fontkink1"><b>Users Email :</b> <?php echo $row['email']; ?></td>
    </tr>

<?php } ?>
   
   <?php 
   $st='Delivered';
   $rt = mysqli_query($con,"SELECT * FROM orders WHERE id='$oid'");
     while($num=mysqli_fetch_array($rt)){
     $currrentSt=$num['orderStatus'];
   }
     if($st==$currrentSt)
     { ?>
   <h1>Product Delivered!! </h1>
   <?php }else {
      ?>
   
    <tr height="30">
      <td class="fontkink1"><b>Update Status: </b>
        <select name="status" class="fontkink" required="required" >
          <option value="">Select Status</option>
          <option value="in Transit">In Transit</option>
          <option value="Delivered">Delivered</option>
          <option value="Delivered">Refunded</option>
          <option value="Cancelled">Cancelled</option>
        </select>
        </span>
      </td>
    </tr>

     <tr>
      <td class="fontkink1" ><b>Remark:</b></td>      
    </tr>

    <tr>
      <td class="fontkink" align="justify" ><span class="fontkink">
        <textarea name="remark"></textarea>
        </span>        
      </td>
    </tr>


    <tr>
      <td class="fontkink1">
        <input type="submit" name="submit2"  value="update"   size="40" 
        style="cursor: pointer; padding: 6px 12px; font-size: 18px; line-height: 1.42857143;color: #fff;border: 0;
        background-color: #8bc34a;padding: 10px 14px; border-radius: 0; box-shadow: none; font-weight: 900;" />
      </td>
    </tr>

     <tr>
      <td style="padding-top: 40px;">
        <input name="Submit2" type="submit" class="txtbox4" value="Close this Window " onClick="return f2();" style="cursor: pointer;"  />
      </td>
    </tr>

<?php } ?>
</table>
 </form>
</div>

</body>
</html>
<?php } ?>

     