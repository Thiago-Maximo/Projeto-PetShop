<?php
include('topo.php')
?>

<!DOCTYPE html>
<html lang="en">
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
    <title>Sobre Nós</title>
</head>
<body>

  <!-- Header Section -->
  <header class="header-section">
    <div class="container">
      <h1>Quem Somos</h1>
      <p>Amor, cuidado e dedicação para o seu melhor amigo</p>
    </div>
  </header>

  <!-- About Section -->
  <section class="about py-5">
    <div class="container">
      <div class="row align-items-center gx-5">
        <div class="col-md-6 mb-4 mb-md-0">
          <img
            src="https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?auto=format&fit=crop&w=800&q=80"
            alt="Petshop care"
            class="img-fluid rounded shadow"
          />
        </div>
        <div class="col-md-6">
          <h2 class="mb-4">Nossa História</h2>
          <p class="lead">
            Fundado em 2010, nosso PetShop nasceu do amor pelos animais e do desejo de oferecer serviços e produtos de qualidade para seu bichinho de estimação.
          </p>
          <p>
            Com uma equipe apaixonada e experiente, garantimos cuidado, atenção e carinho para tornar a vida dos seus pets mais feliz e saudável.
          </p>
          <p>
            Estamos localizados no coração da cidade, prontos para receber você e seu amigo com um atendimento personalizado e ético.
          </p>
          <a href="contato.html" class="btn btn-primary mt-3">Fale Conosco</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team py-5 bg-white">
    <div class="container">
      <h2 class="text-center mb-5">Nossa Equipe</h2>
      <div class="row text-center gy-4">
        <div class="col-sm-6 col-md-4">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ana Silva" class="team-img shadow" />
          <h5>Ana Silva</h5>
          <p class="text-muted">Veterinária</p>
          <p>Ana é apaixonada por cuidar dos animais e tem mais de 10 anos de experiência clínica.</p>
        </div>
        <div class="col-sm-6 col-md-4">
          <img src="https://randomuser.me/api/portraits/men/34.jpg" alt="Carlos Souza" class="team-img shadow" />
          <h5>Carlos Souza</h5>
          <p class="text-muted">Técnico em Pet Shop</p>
          <p>Carlos é especialista em banho e tosa, sempre garantindo o melhor para os nossos pets.</p>
        </div>
        <div class="col-sm-6 col-md-4">
          <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Juliana Costa" class="team-img shadow" />
          <h5>Juliana Costa</h5>
          <p class="text-muted">Atendimento ao Cliente</p>
          <p>Juliana cuida para que sua experiência na nossa loja seja sempre a melhor.</p>
        </div>
      </div>
    </div>
  </section>

    <!-- Rodapé -->
    <?php include('rodape.php'); ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3o5lXtkfQbi7ZZ8EB4co8FblheHo"
    crossorigin="anonymous"></script>
</body>
</html>