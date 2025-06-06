<?php
include('topo.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="petsho.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link type="image/png" sizes="16x16" rel="icon" href="PetShop/img/favicon.svg">
    <title>Pet-Shop</title>
</head>
<body>
<!-- Header Section -->
  <header class="header-home">
    <div class="container">
      <h1>Seja-Bem Vindo</h1>
      <p>Aqui Cuidamos Bem Do Seu Amiguinho!</p>
    </div>
  </header>

<!-- Seção de informações após o Carrossel -->
<section class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <h3 class="text-success">🐾 Cuidados com seu Pet</h3>
            <p class="text-muted">
                Oferecemos banho, tosa, serviços de estética e muito amor! Seu pet tratado com carinho e profissionalismo.
            </p>
        </div>
        <div class="col-md-4">
            <h3 class="text-primary">🩺 Serviços Veterinários</h3>
            <p class="text-muted">
                Atendimento veterinário especializado, consultas, vacinas e acompanhamento para a saúde e bem-estar do seu pet.
            </p>
        </div>
        <div class="col-md-4">
            <h3 class="text-warning">🏠 Petshop & Acessórios</h3>
            <p class="text-muted">
                Tudo que seu pet precisa! Rações, brinquedos, roupinhas, caminhas e muito mais com os melhores preços.
            </p>
        </div>
    </div>
</section>

<hr class="container">

<!-- Outra seção destacando diferencial -->
<section class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="img/frente-pethsop.png" class="img-fluid rounded shadow" alt="Foto do Petshop">
        </div>
        <div class="col-md-6">
            <h2 class="text-center text-secondary">❤️ Aqui seu pet é tratado como família!</h2>
            <p class="lead text-justify">
                Nossa missão é proporcionar bem-estar, saúde e alegria aos animais de estimação. Contamos com uma equipe apaixonada por pets, pronta para atender com qualidade, amor e respeito.
            </p>
            <ul class="list-group">
                <li class="list-group-item">✔ Atendimento especializado</li>
                <li class="list-group-item">✔ Produtos de alta qualidade</li>
                <li class="list-group-item">✔ Ambiente seguro e confortável</li>
            </ul>
        </div>
    </div>
</section>

    <!-- Rodapé -->
    <?php include('rodape.php'); ?>
</body>
</html>