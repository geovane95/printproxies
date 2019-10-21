<?php
    session_start();
    
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Proxies Casa do Carvalho</title>
    <style>
        .imgList {
            height: 8.8cm;
            width: 6.3cm;
            margin:0.5px;
            float:left;
        }
        @media print {
            body * {
                visibility: hidden;
            }
            #preview, #preview * {
                visibility: visible;
            }
            #preview {
                position: fixed;
                left: 0;
                top: 0;
            }
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#photoimg').on('change', function() {

                $("#imageform").ajaxForm({
                    target: '#preview',
                    beforeSubmit: function(){
                        console.log('Antes de enviar');
                        $("#imageloadstatus").show();
                        $("#imageloadbutton").hide();
                    },
                    success:function(){
                        console.log('Envio com sucesso');
                        $("#imageloadstatus").hide();
                        $("#imageloadbutton").show();
                    },
                    error:function(){
                        console.log('Erro ao realizar operação');
                        $("#imageloadstatus").hide();
                        $("#imageloadbutton").show();
                    }
                }).submit();
            });
            $('#addlastcard').on('click', function () {
                let elem = $('.imgList')[0];
                $('#preview').prepend(elem);
            });
            $('#removelastcard').on('click', function () {
                $('.imgList')[0].remove();
            });
        });
    </script>
</head>
<body>
    <header>
        <h1>Impressor de proxies</h1>
    </header>
    <section>
        <article id="search" class="col-md-9">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#busca">Busca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#update">Meu Computador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#online">Código PTCGO</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade show active" id="busca">
                    <form id="searchform" method="post" action='./search.php' style="clear:both">
                        <h1>Procure pelas cartas a imprimir</h1>
                        <div id='imageloadstatus' style='display:none'>
                            <img src="loader.gif" alt="A carregar....">
                        </div>
                        <label for="cardname">Nome da carta</label>
                        <input type="text" name="cardname" id="cardname" placeholder="Buscar Carta" class="form-control" /> <br><br>
                    </form>
                </div>
                <div class="tab-pane fade" id="update">
                    <form id="imageform" method="post" enctype="multipart/form-data" action='./ajaxImageUpload.php' style="clear:both">
                        <h1>Escolha as cartas a imprimir</h1>
                        <div id='imageloadstatus' style='display:none'>
                            <img src="loader.gif" alt="A carregar....">
                        </div>
                        <div id='imageloadbutton'>
                            <label for="photoimg"></label>
                            <input type="file" name="photoimg[]" id="photoimg" multiple> <br><br>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="online">
                    <form id="ptcgoform" method="post" action='./ptcgoUpload.php' style="clear:both">
                        <h1>Digite o código do pokémon TCG Online</h1>
                        <div id='imageloadstatus' style='display:none'>
                            <img src="loader.gif" alt="A carregar....">
                        </div>
                        <div id='imageloadbutton'>
                            <label for="cardlist">Lista de Cartas</label>
                            <textarea name="ptcgolist" id="ptcgolist" rows="30" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </article>
        <article id="options" class="col-md-3">
            <button class="btn btn-info" id="addlastcard">Adicionar Carta</button>
            <br><br>
            <button class="btn btn-warning" id="removelastcard">Remover última carta</button>
            <br><br>
            <button class="btn btn-success" id="printallcards" onClick="window.print()">Imprimir</button>
            <br><br>
        </article>
        <article id="preview" class="col-md-12">

        </article>
    </section>
</body>
</html>
