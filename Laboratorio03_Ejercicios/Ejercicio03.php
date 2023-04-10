<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Ejercicio 03</title>
</head>
<body>
    <div class="m-0">
        <nav class="navbar navbar-expand-lg navbar-success bg-success">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Laboratorio #3</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="Ejercicio01.php" class="nav-item nav-link">Ejercicio #1</a>
                        <a href="Ejercicio02.php" class="nav-item nav-link">Ejercicio #2</a>
                        <a href="Ejercicio03.php" class="nav-item nav-link disabled">Ejercicio #3</a>
                        <a href="Ejercicio04.php" class="nav-item nav-link">Ejercicio #4</a>
                        <a href="Ejercicio05.php" class="nav-item nav-link">Ejercicio #5</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-2">
                <div class="card text-bg-success">
                    <h5 class="card-header">Ejercicio #3</h5>
                    <div class="card-body">
                        <form action="Ejercicio03.php" method="post">
                            <div class="form-group">
                                <div>
                                    <label for="num1">Número 1</label>
                                    <input type="number" id="num1" name="num1" placeholder="Enter the 1st number" required><br>
                                    <label for="num2">Número 2</label>
                                    <input type="number" id="num2" name="num2" placeholder="Enter the 2nd number" required><br>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-primary col-12">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            
            $add = $num1+$num2;
            $dif = $num1-$num2;
            $mult = $num1*$num2;
            $quot = $num1/$num2;

            if ($num1>$num2){
                echo "The addition is: $add <br> The difference is: $dif <br>";
            } else {
                echo "The product is: $mult <br> The quotient is: $quot <br>";
            }
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>