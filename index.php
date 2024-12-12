<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto"></ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Вычислить значение корней квадратного уравнения</h1>

    <form method="post" action="">
        <div class="form-group">
            <label for="a">Коэффициент a:</label>
            <input type="number" step="any" class="form-control" id="a" name="a" required>
        </div>
        <div class="form-group">
            <label for="b">Коэффициент b:</label>
            <input type="number" step="any" class="form-control" id="b" name="b" required>
        </div>
        <div class="form-group">
            <label for="c">Коэффициент c:</label>
            <input type="number" step="any" class="form-control" id="c" name="c" required>
        </div>
        <button type="submit" class="btn btn-primary">Рассчитать</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем значения коэффициентов a, b и c из формы
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $c = floatval($_POST['c']);

        // Проверка на ноль
        if ($a == 0) {
            echo "<div class='alert alert-danger'>Коэффициент 'a' не может быть равен нулю.</div>";
        } else {
            // Вычисление дискриминанта
            $D = $b * $b - 4 * $a * $c;

            // Определение корней уравнения на основе значений дискриминанта
            if ($D > 0) {
                $x1 = (-$b + sqrt($D)) / (2 * $a);
                $x2 = (-$b - sqrt($D)) / (2 * $a);
                echo "<div class='alert alert-success'>Корни уравнения: x1 = $x1, x2 = $x2</div>";
            } elseif ($D == 0) {
                $x = -$b / (2 * $a);
                echo "<div class='alert alert-success'>Уравнение имеет один корень: x = $x</div>";
            } else {
                echo "<div class='alert alert-warning'>Уравнение не имеет вещественных корней.</div>";
            }
        }
    }
    ?>
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Вашим текстом о лабораторной работе.</span>
    </div>
</footer>
</body>
</html>
