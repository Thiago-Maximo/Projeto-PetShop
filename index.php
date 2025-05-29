

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
  <!---Barra de Navegação------>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 100 100">
                <path d="M87.795,47.603c-0.108-0.108-0.218-0.214-0.328-0.319c1.215-1.131,2.267-2.557,3.106-4.246 c0.026-0.052,0.844-1.848,0.844-1.848c1.206-2.651,0.498-5.668-1.568-7.519C93.502,31.743,96,27.91,96,23.5 C96,17.159,90.841,12,84.5,12c-2.737,0-5.251,0.964-7.227,2.567c-0.768-0.91-1.597-1.611-2.364-2.087 c-1.031-0.641-2.218-0.979-3.433-0.979c-0.528,0-1.056,0.064-1.581,0.195l-3.643,0.914c-1.96-0.964-4.047-1.453-6.206-1.453 c-0.634,0-1.274,0.044-1.906,0.131c-1.271,0.175-2.693,0.572-4.005,1.014l-2.295-1.377C50.831,10.32,49.676,10,48.5,10 c-0.771,0-1.527,0.135-2.254,0.403c-1.861,0.688-3.287,2.162-3.911,4.039c-0.284,0.85-2.382,7.678,1.383,13.242l-0.556,4.996 C40.984,36.964,36.005,44,30.5,44c-2.257,0-4.813-5.181-5.646-8.872c-0.547-2.526-2.536-4.489-5.062-4.998 C19.366,30.044,18.93,30,18.496,30c-2.121,0-4.112,1.039-5.315,2.765c-0.092,0.131-8.368,12.296,3.615,26.236l-4.203,5.283 c-4.355,4.62-3.998,11.345,0.205,16.148c0,0,10.673,10.17,12.576,11.598c0,0,3.554,2.812,4.767,3.52 C31.344,96.253,32.734,97,34.127,97c1.396,0,2.78-0.461,3.901-1.3c2.996-2.249,4.501-6.257,3.987-10.522l2.168-2.168 c2.868-2.868,4.737-6.5,5.406-10.505l0.717-4.301c2.474-1.124,5.957-2.979,9.822-5.858l3.146,1.797 C64.255,64.704,65.37,65,66.497,65c0.226,0,0.452-0.012,0.65-0.033l8.616-0.862l1.411,0.471c1.243,0.413,2.533,0.623,3.834,0.623 c0.001,0,0.001,0,0.001,0c3.213,0,6.24-1.258,8.524-3.542l1.564-1.564C92.325,58.866,93,57.234,93,55.5 c0-1.736-0.676-3.369-1.904-4.596L87.795,47.603z" opacity=".35"></path><path fill="#f2f2f2" d="M85.795,45.603c-0.108-0.108-0.218-0.214-0.328-0.319c1.215-1.131,2.267-2.557,3.106-4.246 c0.026-0.052,0.844-1.848,0.844-1.848c1.206-2.651,0.498-5.668-1.568-7.519C91.502,29.743,94,25.91,94,21.5 C94,15.159,88.841,10,82.5,10c-2.737,0-5.251,0.964-7.227,2.567c-0.768-0.91-1.597-1.611-2.364-2.087 C71.878,9.839,70.691,9.5,69.477,9.5c-0.528,0-1.056,0.064-1.581,0.195l-3.643,0.914c-1.96-0.964-4.047-1.453-6.206-1.453 c-0.634,0-1.274,0.044-1.906,0.131c-1.271,0.175-2.693,0.572-4.005,1.014l-2.295-1.377C48.831,8.32,47.676,8,46.5,8 c-0.771,0-1.527,0.135-2.254,0.403c-1.861,0.688-3.287,2.162-3.911,4.039c-0.284,0.85-2.382,7.678,1.383,13.242l-0.556,4.996 C38.984,34.964,34.005,42,28.5,42c-2.257,0-4.813-5.181-5.646-8.872c-0.547-2.526-2.536-4.489-5.062-4.998 C17.366,28.044,16.93,28,16.496,28c-2.121,0-4.112,1.039-5.315,2.765c-0.092,0.131-8.368,12.296,3.615,26.236l-4.203,5.283 c-4.355,4.62-4.512,11.894-0.309,16.697c0,0,10.965,9.955,12.867,11.383l4.458,3.343C28.726,94.541,30.107,95,31.5,95 c1.396,0,2.78-0.461,3.901-1.3c2.996-2.249,5.128-6.257,4.613-10.522l2.168-2.168c2.868-2.868,4.737-6.5,5.406-10.505l0.717-4.301 c2.474-1.124,5.957-2.979,9.822-5.858l3.146,1.797C62.255,62.704,63.37,63,64.497,63c0.226,0,0.452-0.012,0.65-0.033l8.616-0.862 l1.411,0.471c1.243,0.413,2.533,0.623,3.834,0.623c0.001,0,0.001,0,0.001,0c3.213,0,6.24-1.258,8.524-3.542l1.564-1.564 C90.325,56.866,91,55.234,91,53.5c0-1.736-0.676-3.369-1.904-4.596L85.795,45.603z"></path><path fill="#d47f56" d="M74.685,47.5H69.5l-3-3l8-3l2.579,0.263c2.518,0.42,4.432-1.123,5.652-3.573L83.5,36.5l-3.037-1.519 c-1.915-0.958-4.104-1.218-6.19-0.736L64.5,36.5l-1-4l7-7c3-7-1.022-9.5-1.022-9.5L63.5,17.5l-2.071-1.036 c-1.36-0.68-2.893-0.946-4.399-0.738C54.892,16.022,52.5,16.5,52.5,16.5l-6-2c0,0-2,6,2,9l-1,9c0,0-7,16-19,16c-9,0-12-14-12-14 s-7,10,7,22l-8.022,10.083c-2.234,2.199-2.366,5.759-0.302,8.118L18.5,78.5c0,0,4-2,2-6l7.936-7.054 c0.03,0.014,0.034,0.015,0.064,0.029V71.5l-3.163,6.958c-1.073,2.361-0.36,5.15,1.715,6.706L31.5,88.5c0,0,4-3,1-7l5.087-5.087 c1.895-1.895,3.15-4.334,3.591-6.977L42.5,61.5c0,0,7-2,15-9l7,4l10-1l2.728,0.909c2.005,0.668,4.216,0.146,5.711-1.348L84.5,53.5 l-3.302-3.302C79.47,48.47,77.128,47.5,74.685,47.5z"></path><circle cx="82.5" cy="21.5" r="5" fill="#96c362" stroke="#40396e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></circle><circle cx="59.5" cy="21.5" r="1.5" fill="#40396e"></circle><path fill="#40396e" d="M24.933,56.062c0,0,0,5.815,4.449,8.216l-8.526,7.906l-0.727,5.139l-4.677-2.604 l-1.492-4.07L24.933,56.062z" opacity=".35"></path><path fill="#40396e" d="M63.056,37c0,0,1.382,3.91,1.972,7.989l6.522-2.882l3.135-1.112h4.348l3.763-4.846 l-4.44-1.915l-5.43,0.322l-7.089,2.091L63.056,37z" opacity=".35"></path><path fill="none" stroke="#40396e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="M74.685,47.5H69.5l-3-3l8-3l2.579,0.263c2.518,0.42,4.432-1.123,5.652-3.573L83.5,36.5l-3.037-1.519 c-1.915-0.958-4.104-1.218-6.19-0.736L64.5,36.5l-1-4l7-7c3-7-1.022-9.5-1.022-9.5L63.5,17.5l-2.071-1.036 c-1.36-0.68-2.893-0.946-4.399-0.738C54.892,16.022,51.5,17.5,51.5,17.5l-5-3c0,0-2,6,2,9l-1,9c0,0-7,16-19,16c-9,0-12-14-12-14 s-7,10,7,22l-4.62,5.807l-3.402,4.277c-2.234,2.199-2.366,5.759-0.302,8.118L18.5,78.5c0,0,4-2,2-6l7.936-7.054 c0.03,0.014,0.034,0.015,0.064,0.029V71.5l-3.163,6.958c-1.073,2.361-0.36,5.15,1.715,6.706L31.5,88.5c0,0,4-3,1-7l5.087-5.087 c1.895-1.895,3.15-4.334,3.591-6.977L42.5,61.5c0,0,7-2,15-9l7,4l10-1l2.728,0.909c2.005,0.668,4.216,0.146,5.711-1.348L84.5,53.5 l-3.302-3.302C79.47,48.47,77.128,47.5,74.685,47.5z"></path>
            </svg>
        </a>
        <!-- Botão para menu de sandwich -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Links do menu -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="petshop.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre-nos.html">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicos.html">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produtos.html">Produtos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Carrossel sem navegação por cliques e sem botões de controle -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Pet-Food.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

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


<!-- Incluindo os scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7W6JHVB7WfIPFbSkvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>