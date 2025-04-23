<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background:rgb(200, 199, 199);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-weight: 700;
        }

        .btn-primary {
            width: 100%;
        }

        .result {
            background-color: #e9f5ff;
            border-left: 4px solid #0d6efd;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-top: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card p-4 w-100" style="max-width: 600px;">
            <div class="text-center mb-4">
                <h1 class="text-primary">Sequência de Fibonacci</h1>
                <p class="text-muted">Informe um número para gerar a sequência</p>
            </div>
            <form action="" method="GET">
                <div class="mb-3">
                    <label for="number" class="form-label">Digite um número</label>
                    <input type="number" name="number" class="form-control form-control-lg" id="number" placeholder="Ex: 10" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Calcular</button>
            </form>

            <?php
            if (isset($_GET['number']) && is_numeric($_GET['number'])) {
                $number = intval($_GET['number']);
                $fibonacci = [0, 1];

                for ($i = 2; $i < $number; $i++) {
                    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                }

                echo "<div class='result'>";
                echo "<h5>Resultado:</h5>";
                echo "<p>" . implode(", ", array_slice($fibonacci, 0, $number)) . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>
