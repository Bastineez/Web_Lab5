<?php

session_start();
//1
function displayTask1() {
    if (isset($_POST['task1'])) {
        $n = intval($_POST['n1']);
        for ($i = 0; $i < $n; $i++) {
            echo "You are welcome!<br>";
        }
    }
}

//2
function displayTask2() {
    if (isset($_POST['task2'])) {
        $sum = 0;
        for ($i = 1; $i <= 112; $i += 3) {
            $sum += $i;
        }
        echo "Сума чисел: " . $sum;
    }
}

//3
function displayTask3() {
    if (isset($_POST['task3'])) {
        $a = intval($_POST['a']);
        $b = intval($_POST['b']);
        $sum = 0;
        for ($i = $a; $i <= $b; $i++) {
            $sum += $i;
        }
        echo "Сума чисел від $a до $b: " . $sum;
    }
}

//4
function displayTask4() {
    if (isset($_POST['task4'])) {
        for ($i = 1; $i < 10000; $i++) {
            if (strpos((string)$i, '3') !== false && $i % 5 !== 0) {
                echo $i . "<br>";
            }
        }
    }
}

//5
function displayTask5() {
    if (isset($_POST['task5'])) {
        $n = intval($_POST['n5']);
        echo "<table style='border-collapse: collapse;'>";
        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $n; $j++) {
                $randColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                echo "<td style='width: 30px; height: 30px; background-color: $randColor; border: 1px solid black;'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

//6
function displayTask6() {
    if (isset($_POST['task6'])) {
        $numbers = range(0, 100);
        shuffle($numbers);
        $result = array_slice($numbers, 0, 3);
        echo implode(", ", $result);
    }
}

//7
function displayTask7() {
    if (isset($_POST['task7'])) {
        $count = 0;
        for ($a = 1; $a < 100; $a++) {
            for ($b = $a; $b < 100; $b++) {
                $c = sqrt($a * $a + $b * $b);
                if (is_int($c) && $c < 100) {
                    $count++;
                }
            }
        }
        echo "Кількість прямокутних трикутників: " . $count;
    }
}

//8
function displayTask8() {
	if (isset($_POST['task8'])) {
			$n = intval($_POST['n8']);
			for ($i = 0; $i < $n; $i++) {
					$size = mt_rand(10, 100);
					$x = mt_rand(0, 900);
					$y = mt_rand(0, 300);
					echo "<div style='width: {$size}px; height: {$size}px; background-color: red; position: absolute; top: {$y}px; left: {$x}px;'></div>";
			}
	}
}

//9
function displayTask9() {
    if (isset($_POST['task9'])) {
        $n = intval($_POST['n9']);
        $s = intval($_POST['s9']);
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            $a = mt_rand(0, 2);
            $b = mt_rand(0, 2);
            $c = $s - $a - $b;
            if ($c >= 0 && $c <= 2) {
                $result[] = [$a, $b, $c];
            }
        }
        foreach ($result as $res) {
            echo implode(", ", $res) . "<br>";
        }
    }
}

//10
function displayTask10() {
    if (isset($_POST['task10'])) {
        $colors = [];
        for ($i = 0; $i < 150; $i++) {
            $randColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            while (in_array($randColor, $colors)) {
                $randColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            }
            $colors[] = $randColor;
        }
        echo "<div style='display: grid; grid-template-columns: repeat(10, 10%);'>";
        foreach ($colors as $color) {
            echo "<div style='width: 40px; height: 40px; background-color: $color; border: 1px solid #ccc;'></div>";
        }
        echo "</div>";
    }
}

//11
function displayTask11() {
    if (isset($_POST['task11'])) {
        $n = intval($_POST['n11']);
        if ($n > 10) {
            $result = $n + 100;
        } else {
            $result = $n - 30;
        }
        echo "Результат: " . $result;
    }
}

//12
function displayTask12() {
    if (isset($_POST['task12'])) {
        $n = intval($_POST['n12']);
        if ($n % 2 == 0) {
            $result = $n / 2;
        } else {
            $result = $n * 3;
        }
        echo "Результат: " . $result;
    }
}

// 13
function displayTask13() {
    if (isset($_POST['task13'])) {
        $n = intval($_POST['n13']);
        if ($n % 2 == 0) {
            echo "Число парне";
        } else {
            echo "Число непарне";
        }
    }
}

//14
function displayTask14() {
    if (isset($_POST['task14'])) {
        $num1 = intval($_POST['num1_14']);
        $num2 = intval($_POST['num2_14']);
        $num3 = intval($_POST['num3_14']);
        $max = max($num1, $num2, $num3);
        echo "Максимальне число: " . $max;
    }
}

// Завдання 15
function displayTask15() {
    if (isset($_POST['task15'])) {
        $a = intval($_POST['a15']);
        $b = intval($_POST['b15']);
        if (abs($a - $b) == 100) {
            echo "Так";
        } else {
            echo "Ні";
        }
    }
}

//16
function displayTask16() {
    if (isset($_POST['task16'])) {
        $a = intval($_POST['a16']);
        $b = intval($_POST['b16']);
        if (abs($a - $b) <= 20) {
            echo "Так";
        } else {
            echo "Ні";
        }
    }
}

//17
function displayTask17() {
    if (isset($_POST['task17'])) {
        $month = intval($_POST['month17']);
        switch ($month) {
            case 12:
            case 1:
            case 2:
                echo "Зима";
                break;
            case 3:
            case 4:
            case 5:
                echo "Весна";
                break;
            case 6:
            case 7:
            case 8:
                echo "Літо";
                break;
            case 9:
            case 10:
            case 11:
                echo "Осінь";
                break;
            default:
                echo "Помилка";
        }
    }
}

//18
function displayTask18() {
    if (isset($_POST['task18'])) {
        $num = intval($_POST['num18']);
        $numStr = str_split($num);
        rsort($numStr);
        $maxNum = implode('', $numStr);
        echo "Найбільше можливе число: " . $maxNum;
    }
}

//19
function displayTask19() {
    if (isset($_POST['task19'])) {
        $a = floatval($_POST['a19']);
        $b = floatval($_POST['b19']);
        $c = floatval($_POST['c19']);
        $D = $b * $b - 4 * $a * $c;
        if ($D < 0) {
            echo "Немає дійсних коренів.";
        } elseif ($D == 0) {
            $x = -$b / (2 * $a);
            echo "Один корінь: " . $x;
        } else {
            $x1 = (-$b + sqrt($D)) / (2 * $a);
            $x2 = (-$b - sqrt($D)) / (2 * $a);
            echo "Два корені: " . $x1 . " і " . $x2;
        }
    }
}

//20
function displayTask20() {
    if (isset($_POST['task20'])) {
        $a = floatval($_POST['a20']);
        $b = floatval($_POST['b20']);
        $c = floatval($_POST['c20']);
        $result = max($a, $b, $c) - 3 * min($a, $b, $c) + max($a, $b - $c) / min($b, $c);
        echo "Результат: " . $result;
    }
}

//21
function displayTask21() {
	if (!isset($_SESSION['order'])) {
			$_SESSION['order'] = [1, 2, 3]; // Ініціалізуємо початковий порядок
	}

	if (isset($_POST['task21'])) {
			// Зміна порядку
			$_SESSION['order'] = [$_SESSION['order'][1], $_SESSION['order'][2], $_SESSION['order'][0]];
	}

	return $_SESSION['order'];
}

//22
function displayTask22() {
	if (isset($_POST['a'])) {
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$x_start = $_POST['x_start'];
		$x_end = $_POST['x_end'];
		$dx = $_POST['dx'];

		echo "<table><tr><th>x</th><th>F(x)</th></tr>";

		for ($x = $x_start; $x <= $x_end; $x += $dx) {
				if ($x < 0 && $b != 0) {
						$fx = $a * pow($x, 3) + $b;
				} elseif ($x > 0 && $b == 0) {
						$fx = ($x - $a) / ($x - $c);
				} else {
						$fx = $x / $c;
				}
				echo "<tr><td>" . $x . "</td><td>" . $fx . "</td></tr>";
		}

		echo "</table>";
}
}
?>
