<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        $this->load->view('componente/head');
        ?>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <?php
                $this->load->view('componente/menu');
                ?>
                <script src="<?php echo base_url(); ?>template/tools/ong/slider/sliderengine/amazingslider.js" type="text/javascript"></script>
                <link href="<?php echo base_url(); ?>template/tools/ong/slider/sliderengine/amazingslider-1.css" rel="stylesheet" type="text/css"/>
                <script src="<?php echo base_url(); ?>template/tools/ong/slider/sliderengine/initslider-1.js" type="text/javascript"></script>
            </div>
            <div class="mainbody">
                <hr class="hr-personalizado">
                <p class="p-titulo-pag-1">LABOR SOCIAL</p>
                <hr class="hr-personalizado">
                <br>
                <p class="p-black-negrita-1">
                    "... Confía en el tiempo, que suele dar dulces salidas a muchas amargas dificultades..."<br>
                    Miguel de Cervantes, Escritor 
                </p>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <picture>
                            <center>
                                <img class="img-tam-4" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/labor_social/laborSocial.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                </div>
                <br><br>
                <p class="text-center">
                    Es una Organización No Gubernamental orientada a la ayuda humanitaria, 
                    medio ambiental, al progreso del país en su <br>cambio y apoyo en la integración 
                    social de las personas y familias en SER LIBRES
                </p>
                <br><br>
                <div class="row">
                    <p class="p-azul-3">Testimonios</p>
                    <br>
                    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 98px;">
                        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                            <ul class="amazingslider-slides" style="display:none;">
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/1 - G.png" />
                                    <video preload="none" src="https://www.youtube.com/watch?v=JmfE3wHZbgQ&feature=youtu.be" ></video>
                                </li>
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/2 - G.png" />
                                    <video preload="none" src="https://www.youtube.com/watch?v=tYzCyAIBLYo&feature=youtu.be" ></video>
                                </li>
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/3 - G.png" />
                                    <video preload="none" src="https://www.youtube.com/watch?v=tjmYW3hSUJQ&feature=youtu.be" ></video>
                                </li>
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/4 - G.png" />
                                    <video preload="none" src="https://www.youtube.com/watch?v=TKzIvoD4I5M&feature=youtu.be" ></video>
                                </li>
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/5 - G.png" />
                                    <video preload="none" src="https://www.youtube.com/watch?v=KwHFc1PEnUI&feature=youtu.be" ></video>
                                </li>
                            </ul>
                            <ul class="amazingslider-thumbnails" style="display:none;">
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/1 - G.png" /></li>
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/2 - P.png" /></li>
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/3 - P.png" /></li>
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/4 - P.png" /></li>
                                <li><img src="<?= base_url() ?>template/tools/ong/slider/images/5 - P.png" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <hr class="hr-personalizado">
            <div class="footer col-sm-12">
                <?php
                $this->load->view('componente/footer_b');
                ?>
            </div> 
    </body>
</html>