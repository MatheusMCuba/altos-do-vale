<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $base_path = base_url('/assets/');
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $base_path?>css/grid.min.css">
    <link rel="stylesheet" href="<?php echo $base_path?>css/style.css">
    <title>Altos do Vale</title>
</head>
<body>
<nav class="navbar flex-center">
    <div class="w-100 flex-center space-around">
        <a href="#" class="navbar-logo" rel="noopener">
            <img src="<?php echo $base_path?>images/logo.png" alt="Logo Altos do Vale">
        </a>
        <ul class="hidden-mobile">
            <li class="active">
                <a href="#" rel="noopener">Home</a>
            </li>
            <li>
                <a href="#" rel="noopener">Empresa</a>
            </li>
            <li>
                <a href="#" rel="noopener">Eventos</a>
            </li>
            <li>
                <a href="#" rel="noopener">Contato</a>
            </li>
        </ul>
        <div class="social flex-center">
            <a href="#" rel="noopener" class="flex-center">
                <span class="fab fa-facebook-f"></span>
            </a>
            <a href="#" rel="noopener" class="flex-center">
                <span class="fab fa-instagram"></span>
            </a>
        </div>
    </div>
</nav>
<section>

</section>
<section class="chamada section-padding">
    <div class="container text-white">
        <div class="row">
            <div class="col">
                <h1 class="uppercase">Altos do Vale</h1>
                <h2>Casa de Eventos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <a href="#" type="button" class="btn-transparent uppercase mt-1" name="button">
                    Conheça a <strong>casa</strong>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="instagram section-padding">
    <div class="container text-center">
        <h1 class="uppercase text-white">Instagram</h1>
        <h2>Altos do Vale</h2>
    </div>
</section>
<section class="newsletter section-padding">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1 class="uppercase">Newsletter</h1>
                <p>Cadastre-se e receba nossas novidades</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form>
                    <input class="input-transparent" placeholder="NOME" aria-placeholder="Nome">
                    <div class="input-group">
                        <input class="input-transparent" type="email" placeholder="E-MAIL" aria-placeholder="E-mail">
                        <button class="btn-white uppercase">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="flex-center">
    <div class="container-fluid">
        <div class="row mx-5 border-0">
            <div class="col-md-4">
                <div class="row">
                    <strong class="text-white mt-3">Nosso Endereço</strong>
                    <br/>
                    <span>Rua da Unidade 2800, Forqueta</span>
                    <br/>
                    <span>Caxias do Sul - Rio Grande do Sul</span>
                </div>
                <div class="row">
                    <strong class="mt-3 text-white">Horários de Atendimento</strong>
                    <br/>
                    <span>
                    <span class="fas fa-calendar text-white"></span>&nbsp; Terça a Sábado - 9h às 18h
                </span>
                    <br/>
                    <span>
                    <span class="fas fa-phone text-white"></span>&nbsp; (54) 3207.7015 | 99971.4179
                </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row flex-center">
                    <span class="text-white">
                        <span class="fas fa-map-marked-alt fa-3x"></span>&nbsp;
                        <strong class="uppercase">Visualize o mapa do</strong>
                    </span>
                    <br />
                    <a href="#" class="navbar-logo mt-5" rel="noopener">
                        <img src="<?php echo $base_path?>images/logo.png" alt="Logo Altos do Vale">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row border-0">
                    <div class="col offset-4 hidden-mobile">
                        <div class="social flex-center">
                            <a href="#" rel="noopener" class="flex-center">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a href="#" rel="noopener" class="flex-center">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col text-center">
                        <a class="ezoom">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="91.568px" height="20.04px" viewBox="0 0 91.568 20.04" enable-background="new 0 0 91.568 20.04" xml:space="preserve">
                                <polygon points="73.097,0.067 69.94,0.067 69.94,20.04 74.238,20.04 74.204,8.461 79.574,16.759 81.935,16.759
                                    87.268,8.532 87.268,20.04 91.568,20.04 91.568,0.067 88.381,0.067 80.756,11.556 	"></polygon>
                                        <polygon points="4.301,16.416 4.301,11.913 8.831,11.913 11.471,8.38 4.301,8.38 4.301,3.767 13.147,3.767
                                    15.913,0.067 0,0.067 0,20.04 13.147,20.04 15.855,16.416 	"></polygon>
                                        <path d="M33.74,16.354h-9.651l9.079-12.676l2.696-3.611H18.793l-2.756,3.689H28.19L16.026,20.04h21.131
                                    C35.779,19.067,34.616,17.815,33.74,16.354"></path>
                                        <path d="M57.413,0c-1.561,0-3.033,0.311-4.387,0.926c0.99,0.901,1.819,1.954,2.47,3.144
                                    c0.625-0.212,1.269-0.319,1.917-0.319c3.376,0,6.021,2.749,6.021,6.257c0,3.51-2.645,6.258-6.021,6.258
                                    c-0.651,0-1.295-0.106-1.915-0.317c-0.652,1.19-1.481,2.244-2.472,3.144c1.357,0.615,2.829,0.926,4.387,0.926
                                    c5.823,0,10.216-4.303,10.216-10.011C67.629,4.303,63.236,0,57.413,0"></path>
                                        <path d="M44.49,0c-5.711,0-10.185,4.396-10.185,10.008c0,5.613,4.474,10.012,10.185,10.012
                                    c5.824,0,10.216-4.305,10.216-10.012C54.706,4.303,50.314,0,44.49,0 M44.49,16.267c-3.376,0-6.021-2.749-6.021-6.258
                                    c0-3.509,2.645-6.258,6.021-6.258c3.377,0,6.022,2.749,6.022,6.258C50.513,13.518,47.867,16.267,44.49,16.267"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
</body>
</html>
