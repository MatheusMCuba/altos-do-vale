<?
    defined('BASEPATH') OR exit('No direct script access allowed');
    $base_path = base_url('/assets/');
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Altos do Vale - Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <nav class="nav flex-column nav-pills">
                    <a class="nav-link active" href="#">Banners</a>
                </nav>
            </div>
            <div class="col">
                <button class="btn btn-outline-primary" onclick="$('#filesInput').click()">
                    <span class="fas fa-upload"></span>&nbsp;
                    Upload de Banner
                </button>
                <input type="file" class="d-none" id="filesInput" name="filesInput" accept="image/x-png,image/gif,image/jpeg">
                <ul class="list-group mt-5" id="wpImages">
                    <?php foreach ($listaBanners as $banner): ?>
                        <li class="list-group-item" data-uploud>
                            <div class="row">
                                <div class="col-xs-1">
                                    <button class="btn btn-outline-danger btn-excluir d-inline">
                                        <span class="fas fa-trash"></span>
                                    </button>
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="<?php echo $banner['url']?>">
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="row text-center">
            <div class="col mt-5">
                <button class="btn btn-outline-success">
                    <span class="fas fa-save"></span>&nbsp; Salvar
                </button>
            </div>
        </div>
    </div>
    <script type="text/template" id="templateItem">
        <li class="list-group-item" data-uploud>
            <div class="row">
                <div class="col-xs-1">
                    <button class="btn btn-outline-danger btn-excluir d-inline">
                        <span class="fas fa-trash"></span>
                    </button>
                </div>
                <div class="col">
                    <img class="img-fluid" src="#">
                </div>
            </div>
        </li>
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $('#filesInput').change(function(){
            if (this.files && this.files[0]) {
                Array.from(this.files).forEach(function(file){
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        let listElement = $($('#templateItem').html());
                        listElement.find('img')
                            .attr('src', e.target.result)

                        $('#wpImages').append(listElement);
                    };
                    reader.readAsDataURL(file);
                });
            }
        });
    </script>
</body>
</html>
