<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>

		<?php $link_name = "Second Page"; ?>
		<?php $id =2; ?>
		<?php $company = "Johnson & Johnson"; ?>
		
		<a href="second-page.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"> <?php echo $link_name; ?></a>


		<br/><br/><br>
		<hr />
		<br/><br/><br>


		<h3>rawurlencode and urlencode:</h3>
		<?php
			$page = "William Shakespeare";
			$quote = "To be or not to be";
			$link1 = "/bio" . rawurlencode($page) . "?quote=" . urlencode($quote);


			echo $link1;

		?>



		<br/><hr /><br />
		<?php	//What to use when

		$url_page = "php/created/page/url.php";
		$param1 = "This is a string with < >";
		$param2 = "&?*[]+ are bad characters";
		$linktext = "<Click> & learn more";

		$url = "http://localhost/";
		$url .= rawurlencode($url_page);
		$url .= "?" . "$param1=" . urlencode($param1);
		$url .= "&" . "$param2=" . urlencode($param2);

		?>

		<a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($linktext); ?></a>








	</body>
</html>