<?php

// jCart v1.3
// http://conceptlogic.com/jcart/

// This file demonstrates a basic store setup

// If your page calls session_start() be sure to include jcart.php first
include_once('jcart/jcart.php');

if(!isset($_SESSION)){
	session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Sharks Cart</title>
		<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />
		<link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />
		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
			<div id="sidebar">
				<div id="jcart"><?php $jcart->display_cart();?></div>
			</div>
			<div id="content">
				<div id="productsList">
				</div>

				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>

		<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript">

			//populate products
			jQuery(document).ready(function($){
				
				//the products list dom...
				var productList = $('#productsList');
				
				// there's at least one matching element
				if(productList.length){
					$.getJSON("/Products/listJson", function(data) {
						var forms = '';
						$.each(data, function(key, val){
							forms = forms + '\r\n<form method="post" action="" class="jcart">\r\n\t<fieldset>\r\n\t\t<input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />\r\n\t\t<input type="hidden" name="my-item-id" value="'+val['Product']['id']+'" />\r\n\t\t<input type="hidden" name="my-item-name" value="'+val['Product']['name']+'" />\r\n\t\t<input type="hidden" name="my-item-price" value="'+val['Product']['price']+'" />\r\n\t\t<input type="hidden" name="my-item-url" value="" />\r\n<img src="'+val['Product']['img']+'" class="productImg" />\r\n\t\t<h2>'+val['Product']['name']+'</h2>\r\n\t\t<ul>\r\n\t\t\t<li>\r\n\t\t\t\t'+val['Product']['description']+'\r\n\t\t\t</li>\r\n\t\t\t<li>\r\n\t\t\t\tPrice: $'+val['Product']['price']+'\r\n\t\t\t</li>\r\n\t\t\t<li>\r\n\t\t\t\t<label>Qty:<input type="text" name="my-item-qty" value="1" size="3" style="width: 25px;" /></label>\r\n\t\t\t</li>\r\n\t\t</ul>\r\n\t\t<input type="submit" name="my-add-button" value="add to cart" class="button" />\r\n\t</fieldset>\r\n</form>';
						});
						$("#productsList").html(forms);
					});
				}
			});
		</script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>
	</body>
</html>