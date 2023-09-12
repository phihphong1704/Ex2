display_discount.php -

<!DOCTYPE html>
<html>
<head>
<title>Product Discount Calculator</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<main>
<h1>This page is under construction</h1>

<label>Product Description:</label>
<span><?php echo ''; ?></span><br>

<label>List Price:</label>
<span><?php echo ''; ?></span><br>

<label>Standard Discount:</label>
<span><?php echo ''; ?></span><br>

<label>Discount Amount:</label>
<span><?php echo ''; ?></span><br>

<label>Discount Price:</label>
<span><?php echo ''; ?></span><br>
</main>
</body>
</html>

index.php

<!DOCTYPE html>
<html>
<head>
<title>Product Discount Calculator</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<main>
<h1>Product Discount Calculator</h1>
<form action="display_discount.php" method="post">

<div id="data">
<label>Product Description:</label>
<input type="text" name="product_description"><br>

<label>List Price:</label>
<input type="text" name="list_price"><br>

<label>Discount Percent:</label>
<input type="text" name="discount_percent"><span>%</span><br>
</div>

<div id="buttons">
<label>&nbsp;</label>
<input type="submit" value="Calculate Discount"><br>
</div>

</form>
</main>
</body>
</html>