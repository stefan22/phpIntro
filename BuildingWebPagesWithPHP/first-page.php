<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>

		<?php $link_name = "Second Page"; ?>
		<a href="second-page.php"><?php echo $link_name; ?></a>	


		<?php $id =2; ?>
		<a href="second-page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>


	</body>
</html>