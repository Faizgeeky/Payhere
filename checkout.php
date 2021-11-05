<html>
<body>
<form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
    <input type="hidden" name="merchant_id" value="1219073">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://sample.com/return">
    <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
    <input type="hidden" name="notify_url" value="localhost://pay/notify.php">  
    <br><br>Item Details<br>
    <input type="text" name="order_id" value="ItemNo12345">
    <input type="text" name="items" value="Course1"><br>
    <input type="text" name="currency" value="LKR">
    <input type="text" name="amount" value="31">  
    <br><br>Customer Details<br>
    <input type="text" name="first_name" value="Faiz">
    <input type="text" name="last_name" value="M"><br>
    <input type="text" name="email" value="fzoffcial429@gmail.com">
    <input type="text" name="phone" value="8347131200"><br>
    <input type="text" name="address" value="No.1, Demo Road">
    <input type="text" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka"><br><br> 
    <input type="submit" value="Buy Now">   
</form> 
</body>
</html>
