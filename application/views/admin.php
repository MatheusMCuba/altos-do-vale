<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $base_path = base_url('/assets/');
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Altos do Vale - Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .banner-image{
            width: 150px;
            height: 70px;
            background-size: cover !important;
            position: relative;
        }

        .banner-image img{
            width: 100%;
            height: 100%;
        }

        .banner-image[data-temp]{
            cursor: pointer;
        }

        .banner-image[data-temp]:hover::after{
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #ff0000;
            opacity: .4;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <nav class="nav flex-column nav-pills">
                    <a class="nav-link active" href="#">Banners</a>
                    <a class="nav-link" href="/">Acessar Site</a>
                </nav>
            </div>
            <div class="col">

                <button class="btn btn-outline-success" data-toggle="modal" data-target="#bannerModal">
                    <span class="fas fa-plus"></span>&nbsp;
                    Novo Banner
                </button>
                <span class="text-dark ml-3">
                    <span class="fas fa-expand-arrows-alt"></span>&nbsp; Arraste e solte os banners para ordena-los
                </span>

                <ul class="list-group mt-5" id="wpBannersLista">
                    <?php foreach ($listaBanners as $banner): ?>
                        <li class="list-group-item" data-codigo="<?php echo $banner['codigo']?>">
                            <div class="row p-4">
                                <div class="col">
                                    <h1>
                                        <span class="cardinal">#<?php echo $banner['posicao']?></span>&nbsp;
                                        <span class="h4"><?php echo $banner['descricao']?></span>
                                    </h1>
                                    <button class="float-right btn btn-outline-danger btnExcluir">
                                        <span class="fas fa-trash"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start align-items-center">
                                    <div class="banner-image m-1" style="background: url(<?php echo $banner['imagem_1']?>)"></div>
                                    <div class="banner-image m-1" style="background: url(<?php echo $banner['imagem_2']?>)"></div>
                                    <div class="banner-image m-1" style="background: url(<?php echo $banner['imagem_3']?>)"></div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bannerModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open_multipart('admin/salvar_banner');?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">

                            <label>Descrição:</label>
                            <input class="form-control mb-2" name="descricao" id="descricao">
                            <label>Arquivos: <small class="text-muted">(máximo 3)</small></label>
                            <br>
                            <button type="button" class="btn btn-outline-primary" onclick="$('#filesInput').click()">
                                <span class="fas fa-upload"></span>&nbsp;
                                Upload de Arquivos
                            </button>
                            <input type="file" name="banner_images[]" id="filesInput" class="d-none" accept="image" multiple>
                            <ul id="wpImages" class="mt-3 p-0 d-flex justify-content-start align-items-center"></ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" id="btnSalvar">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.6.1/Sortable.min.js"></script>
    <script src="<?php echo $base_path?>/js/admin.js"></script>
</body>
</html>
