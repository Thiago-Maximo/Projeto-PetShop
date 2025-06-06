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
    <link rel="stylesheet" href="petsho.css">
    <title>Produtos</title>
</head>
<body>
  <hr class="container">

   <!-- Cabeçalho -->
  <header class="bg-light py-5 text-center">
    <div class="container">
      <h1 class="display-4">Produtos</h1>
      <p class="lead">Tudo que seu pet precisa, com amor e cuidado!</p>
    </div>
  </header>

  <!-- Produtos -->
  <div class="produtos-cards">
    <div class="produtos-list">
      <!-- Produto 1 -->
        <div class="produtos-item">
            <img src="img/racao_caes.jpg" alt="Banho">
            <h3>Ração Pequena Premium </h3>
            <p class="Descricao">Sabor frango e arroz. Para cães de todas as idades.</p>
            <p class="text-primary font-weight-bold valor">R$ 89,90</p>
            <a href="#" class="btn btn-success btn-sm">Comprar</a>
        </div>

      <!-- Produto 2 -->
      <div class="produtos-item">
            <img src="img/brinquedo-gatos.png" alt="Banho">
            <h3>Brinquedo Interativo Gatos </h3>
            <p class="Descricao">Estimula o instinto natural de caça do seu gato.</p>
            <p class="text-primary font-weight-bold valor">R$ 29,90</p>
            <a href="#" class="btn btn-success btn-sm">Comprar</a>
        </div>

        <!-- Produto 2 -->
      <div class="produtos-item">
            <img src="img/Shampoo Hipoalergênico.png" alt="Banho">
            <h3>Shampoo Hipoalergênico </h3>
            <p class="Descricao">Ideal para cães e gatos com pele sensível.</p>
            <p class="text-primary font-weight-bold valor">R$ 19,90</p>
            <a href="#" class="btn btn-success btn-sm">Comprar</a>
        </div>
    </div>
</div>
    <!-- Rodapé -->
    <?php include('rodape.php'); ?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>