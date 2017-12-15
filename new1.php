<html>
	<head>
		<title>Вторник</title>
	</head>
	<body>
		<h1>Узнать сколько вторников осталось в этом месяце</h1>
		<?php
		$today = getdate();
		if (isset($_GET['d'])) {
			$d = $_GET['d'];
		} else {
			$d = '';
		}
		if (isset($_GET['m'])) {
			$m = $_GET['m'];
		} else {
			$m = '';
		}
		if (isset($_GET['y'])) {
			$y = $_GET['y'];
		} else {
			$y = '';
		}
		if (is_numeric($d) && is_numeric($m) && is_numeric($y)) {
			$Day = $d;
			$Tue = 0;
			While ($Day <= 31) {
				$Day++;
				if (date('w',mktime(0, 0, 0, $m, $Day, $y)) == 2) {
					$Tue++;
				}
			}
			echo "$Tue вторников осталось до конца месяца.";
		} else if ($d == '' || $m == '' || $y == ''){
			$d = $today['mday'];
			$m = $today['mon'];
			$y = $today['year'];
			$Tue = 0;
			$Day = $d;
			While ($Day <= 31) {
				$Day++;
				if (date('w',mktime(0, 0, 0, $m, $Day, $y)) == 2) {
					$Tue++;
				}
			}
			echo "$Tue вторников осталось до конца месяца.";
		} else if ($d != '' || $m != '' || $y != ''){
			echo 'В значении не могут присутствовать не числовые значения';
		} 
		?>
		<form method="GET">
			<p>День <input type="text" name="d" value="<?= htmlspecialchars($d)?>"></p>
			<p>Месяц <input type="text" name="m" value="<?= htmlspecialchars($m)?>"></p>
			<p>Год <input type="text" name="y" value="<?= htmlspecialchars($y);?>"></p>
			<input type="submit" value="OK">
		</form>
		<hr/>
     </body>
</html>