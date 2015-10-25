<html>
	<body>
	<?php include_once('components/header.php') ?>
	<?php
		if (isset($_GET['page'])) {
			$page = './pages/' . $_GET['page'];
		} else {
			$page = './pages/index.php';
		}
		
		if (file_exists($page . '.php')) {
			include_once($page . '.php');
			echo '<link rel="stylesheet" href="styles/' . $_GET['page']. '.css" crossorigin="anonymous">';
		} else {
			include_once('./pages/index.php');
			echo '<link rel="stylesheet" href="styles/index.css" crossorigin="anonymous">';
		}
	?>
	<?php include_once('components/footer.php') ?>
	</body>
</html>