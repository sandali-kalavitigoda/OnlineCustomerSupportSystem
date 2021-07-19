<?php require_once('inc/conn.php'); ?>
<?php 

	$query = "SELECT Item_id,Item_name, Item_description, Price,Quantity, Item_code FROM product";

	$result_set = mysqli_query($conn, $query);

	if ($result_set) {
		// checking how many records returned from the query
		//echo mysqli_num_rows($result_set) . " Records found.";
		$table = '<table>';
		$table .= '<tr><th>ID</th><th>Item Name</th><th>Item Description</th><th>Price</th><th>Quantity</th><th>Item Code</th></tr>';

		while ($record = mysqli_fetch_assoc($result_set)) {
			$table .= '<tr>';
			$table .= '<td>' . $record['Item_id'] . '</td>';
			$table .= '<td>' . $record['Item_name'] . '</td>';
			$table .= '<td>' . $record['Item_description'] . '</td>';
			$table .= '<td>' . $record['Price'] . '</td>';
			$table .= '<td>' . $record['Quantity'] . '</td>';
			$table .= '<td>' . $record['Item_code'] . '</td>';
			$table .= '</tr>';
		}

		$table .= '</table>';
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Official Techly Support </title>

<style>
<center>
		table { border-collapse: collapse; }
		td, th { color:white; border: 1px solid white; padding: 10px; }
		</center>
	</style>
	
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<link rel="stylesheet" type="text/css" href="styles/stylespr.css">
<script src="js/myScript2.js"></script>
<script>
<script>
alert("News page loaded");
</script>
</head>
<body>
<div id="page-container"> 
<div id="content-wrap">
<div class="productData tbl" style="border-style:none; border-color:white;">
 
 <tr>
<img src="images/logo3.jpg" align="140" width="150" height="50">
</tr>

</div>

 
<div class="nav">
  <a href="index.php">Home</a>
  <a class="active" href="#">Products</a>
  <a href="software.php">Software and Drivers</a>
  <a href="agent.php">Contact an Agent</a>
  <a href="support.php">Support</a>
  <a href="register.php">Register</a>
  <a href="about.php">About</a>
  <div class="login-container">
    
      <button  type="submit">Login</button>
 
  </div>
</div>
<br>
<br>
<?php echo $table; ?>
<footer id="footer">
  <div class="footer-gray">
    <div class="footer-custom">
      <div class="footer-lists">
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Order Toll Free</h6>
          <ul class="ftr-links-sub">
            <li>766-592-4554</li>
          </ul>
          
        </div>
        <!--/.footer-list-wrap-->
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Customer Service</h6>
          <ul class="ftr-links-sub">
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Contact Us</a></li>
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Inqueries</a></li>
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Contact an Agent</a></li>
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Support</a></li>
            <li><a href="/help/faq.html" rel="nofollow">FAQs</a></li>
          </ul>
        </div>
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">About Techly.com</h6>
          <ul class="ftr-links-sub">
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Our Company</a></li>
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Careers</a></li>
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Privacy Policy</a></li>
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Our Products</a></li>
            <li><a href="https://courseweb.sliit.lk/" rel="nofollow">Our Mission</a></li>
           
          </ul>
        </div>
        <!--/.footer-list-wrap-->
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">My Account</h6>
          <ul class="ftr-links-sub">
              <li><a href="https://courseweb.sliit.lk/">Access My Account</li>
              <li><a href="https://courseweb.sliit.lk/">View My Activity</li>
        
        </div>
        <!--/.footer-list-wrap-->
      </div>
      <!--/.footer-lists-->
      <div class="footer-email">
        <h6 class="ftr-hdr">Provide Feedback to Techly</h6>
        <div id="ftr-email" class="ftr-email-form">
          <form id="ftrEmailForm" method="post" action="https://courseweb.sliit.lk/">
            <input type="text" name="email_address_" id="ftrEmailInput" class="input" placeholder="Type Your Feedback" />
            <!--
                -->
            <input type="submit" class="button" value="SUBMIT" />
           </form>
        </div>
		</div>
   
		<br>
        <br>
     <div class="footer-social">
        <h6 class="ftr-hdr">Follow Us</h6>
        <ul>
          <li>
            <a href="https://www.facebook.com" title="Facebook" >
              <img width="24" height="24" alt="Like us on Facebook" src="images/fb.png">
            </a>
          </li>
          <li>
            <a href="https://instagram.com" title="Insta" >
              <img width="24" height="24" alt="Follow us on Instagram" src="images/ins.png">
            </a>
          </li>
          <li>
            <a href="https://linkedin.com" target="_blank" title="Linkedin">
              <img width="24" height="24" alt="Follow us on Linkedin" src="images/link.png">
            </a>
          </li>
          <li>
            <a target="_blank" href="http://twitter.com" title="Twitter">
              <img width="24" height="24" alt="Follow us on Twitter" src="images/twit.png">
            </a>
          </li>
          
        </ul>
      </div>
      <!--/.footer-social-->
      <div class="footer-legal">
        <p>&copy; Techly.com Inc. All Rights Reserved. | <a href="https://courseweb.sliit.lk/" rel="nofollow">Privacy Policy</a> | <a href="https://courseweb.sliit.lk/" rel="nofollow">Terms of Use</a> | <a href="https://courseweb.sliit.lk/" rel="nofollow">Terms of Sale</a></p>
        <p>Techly.com has All Rights Reserved Techly.com Inc.</p>
        <p>This Website is coverd by US patent Number 67,89,567. Only authorized users have rights to change this Website.</p>
      </div>
      <!--/.footer-legal-->
	   <div class="footer-social">
        <h6 class="ftr-hdr">Payment Methods</h6>
        <ul>
          <li>
            <a href="https://www.visa.com"  >
              <img width="24" height="24" src="images/visa.png">
            </a>
          </li>
          <li>
            <a href="https://www.mastercard.us/en-us.html" >
              <img width="24" height="24" src="images/master.png">
            </a>
          </li>
          <li>
            <a href="https://paypal.com" target="_blank">
              <img width="24" height="24" src="images/paypal.png">
            </a>
          </li>
        </ul>
      </div>
   
      <!--/.footer-payment-->
    </div>
    <!--/.footer-custom-->
  </div>
  <!--/.footer-gray-->
</footer>
</div> 
</body>
<html/>
<?php mysqli_close($conn); ?>