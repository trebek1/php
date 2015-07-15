<?php include("inc/products.php"); 

$product_id = $_GET["id"];
$product = $products[$product_id];

$section = "shirts"; 
$pageTitle = $product["name"];
include("inc/header.php"); ?>

	<div class = "section page">

		<div class = "wrapper"> 

			<div class = "breadcrumb"><a href ='shirts.php'>Shirts</a> &gt; <?php echo $product["name"]; ?> </div>	

			<div class = "shirt-picture">
				<span>
					<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"] ?>" >
				</span>
			</div>
		
			<div class="shirt-details">
				
				<h1><span class = "price"> <?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?> </h1> 
				
				
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product['paypal']; ?>">
						<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>" >
						<table>
						<tr><td><input type="hidden" name="on0" value="Size">Size</td></tr><tr><td><select name="os0">
							<option value="Small">Small</option>
							<option value="Medium">Medium</option>
							<option value="Large">Large</option>
						</select> </td></tr>
						</table>
						<input type="hidden" name="currency_code" value="USD">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>



				<p class = "note-designer"> * All shirts are designed by Mike the Frog </p>

			</div>

		</div>

	</div>

<?php include("inc/footer.php"); ?>