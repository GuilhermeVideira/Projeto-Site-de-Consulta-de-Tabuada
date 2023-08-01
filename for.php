<!DOCTYPE html>
<html>
<head>

     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="./css/style.css" rel="stylesheet">

    <title>Tabuada</title>

    <link rel="shortcut icon" href="./imagens/iconepagina.png" type="image/x-icon"> 

</head>
<body>

<style>
  
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none; 
        }

        input[type="number"]:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px #007BFF;
        }

        a {
           text-decoration: none;
         }

</style>

<nav class="navbar col-12 m-auto position-fixed navbar-expand-lg navbar-dark bg-info" style="z-index:999;">
    <a class="navbar-brand" href="#"> Tabuada </a>
</nav>

<br> <br>

<div class="imagem">
<img src="./imagens/matematica.jpeg" class="imagem" alt="Imagem de fundo cinza" height="500px" width="2266px" >
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-light">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./while.php">While</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./dowhile.php">Do while</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./for.php">For</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br> <br> <br>  <center>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Tabuada</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Laço For </h6>
    <p class="card-text">


    <form method="post" action="">
    💻 Digite um número (1 a 10) ou 0 para todas as tabuadas 💻  <br><br>
        <input type="number" name="numero" min="0" max="10" required> <br><br>
        <input type="submit" value="Ver Tabuada"> 
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero == 0) {
            
            for ($i = 1; $i <= 10; $i++) 
            {
              echo "<br>";
              echo "<h6> 🧮 Resultado: 🧮 </h6>";
              echo "<h3>Tabuada do $i</h3>";

                for ($j = 1; $j <= 10; $j++) 
                {
                    $resultado = $i * $j;
                    echo "$i x $j = $resultado<br>";
                }
            }
        } 
        elseif ($numero >= 1 && $numero <= 10) 
        {
          echo "<br>";
          echo "<h6> 🧮 Resultado: 🧮 </h6>";
          echo "<h3> Tabuada do $numero </h3>";
            
            for ($i = 1; $i <= 10; $i++) 
            {
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado<br>";
            }
  
        } 
        else 
        {
            echo "Digite um número entre 1 e 10 ou 0 para todas as tabuadas.";
        }
    }
    ?>

    </p>
  </div>
</div>

<br> <br> <br><br> 

<center>

<h1>  <span class="texto01"> . </span>  <span class="texto02">  ✧ Tabuada em PHP ✧ </span> </h1> <br>  

<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button"> <a href="./for.php"> Atualizar </a> </button>
</div>

</body>
</html>