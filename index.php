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

<br> <br> <br> <br> <br><br><br><br> <br> <br> <br> <br><br><br><br> <br> <br> <br>

<h1>  <span class="texto01"> . </span>  <span class="texto02">  ✧ Tabuada em PHP ✧ </span> </h1> <br>   

<h4>A tabuada é uma tabela matemática que mostra as multiplicações de um número específico por outros números. Geralmente, a tabuada é ensinada como uma ferramenta para facilitar os cálculos matemáticos de multiplicação. </h4> <br> 

<h4> A tabuada tradicionalmente vai de 1 a 10, e cada número, chamado de "multiplicador", é multiplicado pelos números de 1 a 10, chamados de "multiplicandos". O resultado de cada multiplicação é chamado de "produto". </h4>

<center><div class='justify-center'> <hr> </div></center>

  <h1> <span class="texto01"> . </span>   <span class="texto02">  Confira todas as tabuada do 01 ao 10:  </span> </h1>

<br><br>

<div class="row row-cols-1 row-cols-md-3 g-4">

<div class="cartao">

  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"> 📐 Tabuada com While 📐 </h5>
        <p class="card-text"> Acessa, e digite o valor da multiplicação da tabuada que deseja consultar: </p>
      </div>
      <button type="button" class="btn btn-info"> <a href="./while.php"> Acesse </a> </button>
    </div>
 </div>
  </div>

<div class="cartao">

  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"> 📐 Tabuada com Do While 📐 </h5>
        <p class="card-text"> Acessa, e digite o valor da multiplicação da tabuada que deseja consultar: </p>
      </div>
      <button type="button" class="btn btn-info"> <a href="./dowhile.php"> Acesse </a> </button>
    </div>
  </div>
</div>

<div class="cartao">

  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"> 📐 Tabuada com For 📐 </h5>
        <p class="card-text"> Acessa, e digite o valor da multiplicação da tabuada que deseja consultar: </p>
      </div>
      <button type="button" class="btn btn-info"> <a href="./for.php"> Acesse </a> </button>
    </div>
  </div>
</div>
</div>

<br>

</body>
</html>