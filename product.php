<?php
if ($_GET['product']==1){
	$product = 'Mac';
} else if ($_GET['product']==2){
	$product = 'Ubuntu';
}	else if ($_GET['product']==3){
	$product = 'Windows';
} else {
	echo 'Invalid';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="styles.css">
	<meta charset="UTF-8">
	<title>Products</title>
</head>
<body>
	
	<?php include "header.php"; ?>
	
	<div class="choice">
		<h1>Your choice was <?php echo $product; ?>!</h1>
	</div>

	<?php include "footer.php"; ?>

</body>
</html>