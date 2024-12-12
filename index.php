<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Вычисление периметра треугольника</title>
</head>
<body>
<div class="container">
    <h1 class="mt-5">Вычислить периметр треугольника</h1>
    <form method="POST" class="mt-4">
        <div class="form-group">
            <label for="a">Сторона A</label>
            <input type="number" class="form-control" id="a" name="a" required>
        </div>
        <div class="form-group">
            <label for="b">Сторона B</label>
            <input type="number" class="form-control" id="b" name="b" required>
        </div>
        <div class="form-group">
            <label for="c">Сторона C</label>
            <input type="number" class="form-control" id="c" name="c" required>
        </div>
        <button type="submit" class="btn btn-primary">Рассчитать</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $c = floatval($_POST['c']);

        // Проверка существования треугольника
        if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
            // Вычисление периметра
            $perimeter = $a + $b + $c;
            // Проверка на равносторонний треугольник
            $is_equilateral = ($a == $b && $b == $c) ? "Да" : "Нет";

            // Вывод результатов
            echo "<h3 class='mt-4'>Результаты:</h3>";
            echo "<p>Периметр треугольника: " . round($perimeter, 2) . "</p>";
            echo "<p>Равносторонний треугольник: " . $is_equilateral . "</p>";
        } else {
            echo "<p class='text-danger'>Треугольник с такими сторонами не существует.</p>";
        }
    }
    ?>
</div>
</body>
</html>
