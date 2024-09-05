<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIXELSELECTRONICS WIFI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
      <h1>PIXELS ELECTRONICS WIFI LOGIN</h1>
      <P class="p1">(CUSTOMER CARE:0794541860 OR 0708581662)</P>
      <label class="label">Tap one circle below and enter phone number to pay</label>
      <div class="payment">
        <div class="row1">
             <button onclick="pay1()" class="pay1">
                 <label class="h3">2Hours</label>
                 <label class="p4">KSH:10/-</label><br>
                 <label>MAX 3mbps</label>
             </button>
             <button onclick="pay2()" class="pay2">
                 <label class="h3">12Hours</label>
                 <label class="p4">KSH:20/-</label><br>
                 <label>MAX 3mbps</label>
             </button>
             <button onclick="pay3()" class="pay3">
                 <label class="h3">24Hours</label>
                 <label class="p4">KSH:30/-</label><br>
                 <label>MAX 3mbps</label>
             </button>
 
        </div> 
        <div class="row2">
             <button onclick="pay4()" class="pay4">
                 <label class="h3">24Hours</label><br>
                 <label class="p4">KSH:100/-</label><br>
                 <label>MAX 5mbps</label>
             </button>
             <button onclick="pay5()" class="pay5">
                 <label class="h3">7days</label>
                 <label class="p4">KSH:200/-</label><br>
                 <label>MAX 3mbps</label>
             </button>
         
             <button onclick="pay6()" class="pay6">
                 <label class="h3">1 month</label>
                 <label class="p4">KSH:600/-</label><br>
                 <label>MAX 3mbps</label>
             </button>
             <button onclick="pay7()" class="pay7">
                 <label class="h3">1 month</label>
                 <label  class="p4">KSH:1000/-</label><br>
                 <label>MAX 5mbps</label>
             </button>
         </div> 
            
     </div>



    
    <div id="recoform" class="reconnect">
        <label class="p2">Reconnect account</label>
        <p class="p3">(Enter mpesa code below from the payment you made eg:QAH9QWWZRR)</p>
        <input class="input1" type="text" name="" id="input1" placeholder="Enter Mpesa Code you paid with">
        <button class="reconnectbtn" onclick="reconnect()" >Reconnect</button>
    </div>
    <div class="voucher">
        <label class="p2">Voucher recharge</label>
        <p class="p3">(Call admni for voucher recharge incase your payment is not successfull)</p>
        <input class="input2" type="text" id="input2" placeholder="Enter voucher code">
        <button class="voucherbtn" onclick="voucher()">Activate voucher</button>
    </div>
    <div class="login">
        <h1 class="h1">PIXELS ELECTRONICS WIFI LOGIN</h1>
        <P class="p3">(Enter your username plus password to login.)</P>
        <input class="input3" type="text" id="username" placeholder="Username">
        <input class="input4" type="password" placeholder="Password" id="password">
        <button class="btn1" onclick="login()">LOGIN</button>
    </div>    
    
    <div id="popup" class="popup">
        <button class="close" onclick="close1()">❌</button>
        <h2>Make payment</h2>
        <p id="paymessage"></p>
        <input id="phonenumber" type="number">
        <p id="alert1"></p>
        <button onclick="paynow()" class="pay">Pay now</button>
    </div>
    <div id="processing" class="processing">
        <div class="loader" id="loader"></div>
        <p class="process">Please wait...</p>
        <p>Kindly wait as we try to validate your transaction and connect you, this may take up to a minute ,ensure you have ENTER the pin and confirmed the payment on your phone</p>

    </div>
    <div id="recopop" class="reconnectpop">
        <img class="alert0" src="download.png" alt=""><br>
        <label class="px">Please enter the mpesa code</label><br>
        <button class="okbtn" onclick="ok1()">OK</button>
    </div>
    <div id="vouchpop" class="voucherpop">
        <img class="alert0" src="download.png" alt="">
        <p class="pw">Please enter the voucher code</p>
        <button class="okbtn" onclick="ok2()">OK</button>
    </div>

    <div id="paystack" class="paystack">
        <form id="paymentForm"      method="post">
        
            <label class="p3" for="email" >Enter your valid email</label><br>
            <input  class="input0" type="email" name="email" required><br><br>
            <label class="p3" for="amount">Confirm the Wifi Package Amount</label>
            <input  class="input0"  type="text" name="amount">
                <button type="submit" onclick="payWithPaystack()"> Pay </button>
    
            
        </form>
        
    </div>    
</div> 

<script>
    



</script>

<script src="https://js.paystack.co/v1/inline.js"></script>

<script src="wifi.js"></script>

<?php
include 'configs.php';
include 'formhandler.php'
?>


<script type="text/javascript">
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {
      e.preventDefault();
      let handler = PaystackPop.setup({
        key: '<?php echo $PublicKey; ?>', // Replace with your public key
        email: '<?php echo $email; ?>',
        amount: <?php echo $amount; ?> * 100,
        currency: '<?php echo $currency; ?>', // Use GHS for Ghana Cedis or USD for US Dollars or KES for Kenya Shillings
        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function() {
          alert('Transaction was not completed, window closed.');
        },
        callback: function(response) {
          let message = 'Payment complete! Reference: ' + response.reference;
          alert(message);
          window.location.href = "http://localhost/PayStack-With-PHP/verify_transaction.php?reference=" + response.reference;
        }
      });

      handler.openIframe();
    }
  </script>



</body>
</html>