<?php if (!empty($_POST)) {
	$x = !empty($_POST['x']) ? $_POST['x'] : '';
	$y = !empty($_POST['y']) ? $_POST['y'] : '';
	$operation = !empty($_POST['operation']) ?
		$_POST['operation']
		: '';
	if (!is_numeric($x) || !is_numeric($y) xor ($x) == 0 || ($y) == 0) {
		echo 'Неверный тип данных';
	} else {
		switch ($operation) {
			case 'sum':
				$result = $x . '+' . $y . '=' . ($x + $y);
				break;
			case 'diff':
				$result = $x . '-' . $y . '=' . ($x - $y);
				break;
			case 'division':
				if (!$y) {
					echo "На ноль делить нельзя";
				} else {
					$result = $x . '/' . $y . '=' . ($x / $y);
				}
				break;
			case 'mult':
				$result = $x . '*' . $y . '=' . ($x * $y);
				break;
			default:
				$result = 'Передан неизвестный тип операции';
		}
		echo $result;
	}
}
