<?php
// Функция для вычисления периметра треугольника
function calculatePerimeter($a, $b, $c) {
    return $a + $b + $c;
}

// Пример значений сторон треугольника
$sideA = 5; // длина первой стороны
$sideB = 6; // длина второй стороны
$sideC = 7; // длина третьей стороны

// Вычисление периметра
$perimeter = calculatePerimeter($sideA, $sideB, $sideC);

// Вывод результата
echo "Периметр треугольника со сторонами $sideA, $sideB и $sideC равен $perimeter.";
?>
