<?php 
$servername = "localhost";
$username = "mmdtechc_shops";
$password = "36960722[]";
$dbname='mmdtechc_shops';

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  /*else{
    echo ('connected');
}   */
?>

<?php
     
     
        $callbackJSONData=file_get_contents('php://input');
        $callbackData=json_decode($callbackJSONData);
        $resultCode=$callbackData->Body->stkCallback->ResultCode;
        $resultDesc=$callbackData->Body->stkCallback->ResultDesc;
        $merchantRequestID=$callbackData->Body->stkCallback->MerchantRequestID;
        $checkoutRequestID=$callbackData->Body->stkCallback->CheckoutRequestID;

        $amount=$callbackData->stkCallback->Body->CallbackMetadata->Item[0]->Value;
        $mpesaReceiptNumber=$callbackData->Body->stkCallback->CallbackMetadata->Item[1]->Value;
        $balance=$callbackData->stkCallback->Body->CallbackMetadata->Item[2]->Value;
        $b2CUtilityAccountAvailableFunds=$callbackData->Body->stkCallback->CallbackMetadata->Item[3]->Value;
        $transactionDate=$callbackData->Body->stkCallback->CallbackMetadata->Item[4]->Value;
        $phoneNumber=$callbackData->Body->stkCallback->CallbackMetadata->Item[5]->Value;
        
    $sql="INSERT INTO mpesa_payments (
        TransactionType,
        TransID,
        TransTime,
        TransAmount,
        BusinessShortCode,
        BillRefNumber,
        InvoiceNumber,
        MSISDN,
        FirstName,
        MiddleName,
        LastName,
        OrgAccountBalance)
                 VALUES(
        '$transactiontype',
        '$transid',
        '$transtime',
        '$transamount',
        '$businessshortcode',
        '$billrefno',
        '$invoiceno',
        '$msisdn',
        '$firstname',
        '$middlename',
        '$lastname',
        '$orgaccountbalance')";

if (!mysqli_query($con,$sql))
{
echo mysqli_error($con);
}
else
{
echo '{"ResultCode":0,"ResultDesc":"Confirmation received successfully"}';
}
mysqli_close($con);
        
?>