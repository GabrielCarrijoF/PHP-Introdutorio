<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<h1 style="text-align: center;">Bem Vindos!! </h1>
<h3 style="text-align: center;">Escolha Uma Opção</h3>

<form style="position: absolute; top: 200px; left: 500px;" action="opcaoUm.php" class="row md-3">

    <button type="submit" class="btn btn-primary btn-lg">1° - Mostrar Apenas o Resultado  </button>
</form>

<form style="position: absolute; top: 300px; left: 500px;" action="opcaoDois.php" class="row md-3">
    <button type="submit" class="btn btn-secondary btn-lg">2° - Mostrar tabuada Completa  </button>
</form>

<?php

    session_start();

    $num = $_GET['txtNum'];
    $_SESSION['num'] = $num;

?>