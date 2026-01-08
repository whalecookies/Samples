<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AC-DC ICs: Digital Controller IC Products</title>
    <meta name="description" content="AC-DC ICs :: Digital Controller IC Products">
    <?php include('includes/header_new.php'); ?>
</head>
<body>
	<div id="container">
    	<div id="header">
        	<a href="/"><img src="images/logo_green.png" alt="companyX" width="250" height="100" border="0" class="logo"></a>
    <?php include('includes/topnav.php'); ?>
        </div>
	  <div id="nav">
		<?php include('includes/nav_new.php'); ?>
      </div>
	        <div id="messages">
      <?php        
        
         if(isset($_POST['enter']))
         {
            global $obj;
			$to= "sales@companyX.com";
            $sub=".:: companyX.com website contact request ::.";
            $from =$_POST['email'];
             $msg="
            <table align='left' >
        <tr><td>First Name :</td>
        <td>".$_POST['firstname']."</td>
        </tr>
        <tr>
            <td>Last Name :</td>
            <td>".$_POST['lastname']."</td>
        </tr>
		        <tr>
            <td>Company :</td>
            <td>".$_POST['company']."</td>
        </tr>
		        <tr>
            <td>Title :</td>
            <td>".$_POST['title']."</td>
        </tr>
				        <tr>
            <td>Address :</td>
            <td>".$_POST['address']."</td>
        </tr>
				        <tr>
            <td>City :</td>
            <td>".$_POST['city']."</td>
        </tr>
        <tr>
            <td>State :</td>
            <td>".$_POST['state']."</td>
        </tr>
		        <tr>
            <td>Zip :</td>
            <td>".$_POST['zip']."</td>
        </tr>
		        <tr>
            <td>Phone :</td>
            <td>".$_POST['phone']."</td>
        </tr>
				        <tr>
            <td>Email :</td>
            <td>".$_POST['email']."</td>
        </tr>		       
		 <tr>
            <td>Application :</td>
            <td>".$_POST['application']."</td>
        </tr>
				 <tr>
            <td>Annual Volume:</td>
            <td>".$_POST['volume']."</td>
        </tr>
				 <tr>
            <td>Part Number :</td>
            <td>".$_POST['partno']."</td>
        </tr>
				 <tr>
            <td>Quantity Requested :</td>
            <td>".$_POST['quantity']."</td>
        </tr>
				 <tr>
            <td>Sample Urgency :</td>
            <td>".$_POST['urgency']."</td>
        </tr>
        </table>";
       $error=0; // check up variable 
	   $msgfirstname="";
	   $msglastname="";
	   $msgemail="";
       if ($_POST['firstname'] == "Your first name..." || $_POST['firstname'] == "") {
	   		$msgfirstname="<li>Please enter your first name</li>";
			$error++;
	   }
	   if ($_POST['lastname'] == "Your last name..." || $_POST['lastname'] == "") {
	   		$msglastname="<li>Please enter your last name</li>";
			$error++;
	   }
	   if ($_POST['email'] == "Your email..." || $_POST['email'] == "") {
	   		$msgemail="<li>Please enter your email address</li>";
			$error++;
	   }
			
		if ($error <> 0) {
			echo "<p><strong>There were problems with the following fields:</strong></p>
			<ul>";
			echo $msgfirstname;
			echo $msglastname;
			echo $msgemail;
			echo "</ul>";
			echo "<script language=\"javascript\" type=\"text/javascript\">document.getElementById('messages').style.backgroundColor='#002f65';</script>";
			echo "<script language=\"javascript\" type=\"text/javascript\">document.getElementById('messages').style.display='block';</script>";
		}
	   if($error == 0) {
	   		$headers  = "From: $from\r\n";
            $headers .= "Content-type: text/html\r\n";
            $headers .= "From:".$from;        
            mail($to,$sub,$msg,$headers);
			$msgfeedback="<p>Thank you " .$_POST['firstname'].", you don't need to do anything else. We will contact you soon!</p>";
			echo $msgfeedback;
			echo "<script language=\"javascript\" type=\"text/javascript\">document.getElementById('messages').style.display='block';</script>";
	   }        
         }
        ?>
      </div>
	  <div id="banner">
      	<img src="images/acdcbanner.jpg" alt="ACDC" width="765" height="146">      </div>
<div id="insidecol1">
      	  <h1><strong>Products</strong>: AC-DC ICs</h1>
    <p class="headline"><strong>AC DC Controller IC Products</strong></p>
    <p>companyX’s AC-DC controllers are the first in the industry to  bring cost-effective digital control techniques to AC-DC power conversion.  Until now, features like accurate primary feedback  and a full suite of protection features have been difficult to find in a small,  cost-effective package. Our patented technology that has changed all that. We  provide high efficiency and best-in-class line and load regulation while  providing low total BOM cost and exceeding governmental efficiency  regulations.  </p>
    <p>companyX’s adaptive digital control technology allows our  customers to:</p>
    <ul type="disc">
      <li>Reduce system complexity</li>
      <li>Maximize efficiency</li>
      <li>Reduce the number of external components </li>
      <li>Reduce design cost</li>
    </ul>
    <p> </p>
<table class="products">
            <tr>
              <th colspan="6">AC DC Controller IC Products </th>
      </tr>
            <tr  class="bodycopy">
              <td width="58">Product*</td>
              <td width="113">Key Feature</td>
              <td width="313">Applications</td>
      </tr>
            <tr>
              <td class="product"><a href="../iw1689.php">iW1689</a></td>
              <td class="product">Highest Efficiency</td>
              <td class="product">Cordless phones and other low power adapters</td>
            </tr>
            <tr>
              <td class="product"><a href="../iw1690.php">iW1690</a></td>
              <td class="product">RCC Replacement</td>
              <td class="product">Low power cellular phone chargers</td>
            </tr>
            <tr>
              <td class="product"><a href="../iw1691.php">iW1691</a></td>
              <td class="product">Small size</td>
              <td class="product">Ultra-compact AC/DC adapter/chargers for cell phones, PDAs, and digital still cameras up to 10W</td>
	      </tr>
          <tr>
              <td class="product"><a href="../iw1692.php">iW1692</a></td>
              <td class="product">Highest Performance</td>
              <td class="product">Chargers requiring precise output current</td>
	      </tr>
          <tr>
              <td class="product"><a href="../iw1696.php">iW1696</a></td>
              <td class="product">Linear and RCC Replacement</td>
              <td class="product">Cordless phone, cellular phone, and other low power adapters</td>
	      </tr>
          <tr>
              <td class="product"><a href="../iw1698.php">iW1698</a></td>
              <td class="product">Highest performance, lowest BOM cost</td>
              <td class="product">Chargers requiring less than 30mW standby power</td>
	      </tr>
          <tr>
              <td class="product"><a href="../iw1710.php">iW1710</a></td>
              <td class="product">Reduces number of components and cost</td>
              <td class="product">Networking adapters up to 40W</td>
	      </tr>
          <tr>
              <td class="product"><a href="../iw3610.php">iW3610</a></td>
              <td class="product">Dimmable LED driver</td>
              <td class="product">Solid State Dimmable LED driver up to 25W</td>
	      </tr>         
          <tr>
              <td class="product"><a href="../iw3620.php">iW3620</a></td>
              <td class="product">Small size LED driver</td>
              <td class="product">Solid State LED lighting up to 40W</td>
	      </tr>
          </table>
          <p><em>*Note that the datasheets for these products are abbreviated versions; for a full copy of a datasheet, contact your local sales representative or email us at <a href="mailto:sales@companyX.com?subject=Full datasheet request"Full datasheet request"">sales@companyX.com</a></em> </p>
          <p align="center"><a href="../whitepapers.php">White Papers and Application Notes</a></p>
</div>
<div id="insidecol2a">
  <?php include('includes/news.php'); ?>
</div>	
<div id="insidecol2">
      	  <h1>Product Spotlight</h1>
          <p>&nbsp;</p>
          
            <div id="flashcontent">
            	Please download the latest flash player, then refresh this page.
            </div>
        
        <script type="text/javascript">
		   var so = new SWFObject("/flash/spotlight_ACDC.swf", "spotlight", "247", "263", "8", "#fff");
		   so.addParam("wmode", "transparent");
		   so.write("flashcontent");
		</script>
        
    </div>
     
<?php include('includes/footer.php'); ?>
        <div class="clear"></div>
</div>
    <?php include('includes/bottom.php'); ?>
</body>
</html>