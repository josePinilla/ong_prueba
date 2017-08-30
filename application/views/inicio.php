<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        $this->load->view('componente/head');
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <link href="<?php echo base_url(); ?>template/tools/externo/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>template/tools/ong/css/style-bootstrap-inicio.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>template/tools/ong/css/style-ong.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>template/tools/ong/slider/sliderengine/amazingslider.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>template/tools/ong/slider/sliderengine/amazingslider-1.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>template/tools/ong/slider/sliderengine/initslider-1.js" type="text/javascript"></script>
    <!--<div class="row">-->
    <div class="col-sm-12 col-xs-12">
        <p style="color: blue; font-size: 12px" >Síguenos en...</p>
    </div>
        <div class="col-sm-4 col-xs-12">
            <table >
                <tr>
                    <td>
                        <a href="<?php echo base_youtube; ?>" target="_blank">
                            <img src="<?php echo base_url(); ?>template/tools/ong/image/social_network/youtube.png" alt="Imagen no encontrada"/>
                        </a> &VeryThinSpace;
                        <a href="<?php echo base_facebook; ?>" target="_blank">
                            <img src="<?php echo base_url(); ?>template/tools/ong/image/social_network/facebook.png" alt="Imagen no encontrada"/>
                        </a> &VeryThinSpace;
                        <a href="<?php echo base_twitter; ?>" target="_blank">
                            <img src="<?php echo base_url(); ?>template/tools/ong/image/social_network/twitter.png" alt="Imagen no encontrada"/>
                        </a> &VeryThinSpace;
                        <a href="<?php echo base_instagram; ?>" target="_blank">
                            <img src="<?php echo base_url(); ?>template/tools/ong/image/social_network/instagram.png" alt="Imagen no encontrada"/>
                        </a> &VeryThinSpace;
                        <a href="<?php echo base_linkedin; ?>" target="_blank">
                           <img src="<?php echo base_url(); ?>template/tools/ong/image/social_network/linkedin.png" alt="Imagen no encontrada"/>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-2 col-xs-12" style="border: none;">
            <p><img src="<?php echo base_url(); ?>template/tools/ong/image/logos/Telefono.png" alt="Imagen no encontrada"/> (562) 2735 4062 </p>
        </div>
        <div class="col-sm-3 col-xs-12" style="border: none;">
            <p><img src="<?php echo base_url(); ?>template/tools/ong/image/logos/Correo.png" alt="Imagen no encontrada"/> contacto@ongmomentodecambio.cl </p>
        </div>     
        <div class="col-sm-3 col-xs-12" style="border: none;">
            <p><img src="<?php echo base_url(); ?>template/tools/ong/image/logos/Casa.png" alt="Imagen no encontrada"/> Av. Puma 1480, Recoleta - Santiago de Chile </p>
        </div>  
    <br>
    <br>
    <br>
    <hr class="hr-personalizado">
    </head>
    <body>
        <div class="container">
            <div class="header col-xs-12">
                <?php
                $this->load->view('componente/menu');
                ?>
            </div>
            <div class="mainbody col-xs-12">
                <hr class="hr-personalizado">
                <br>
                <p class="p-black-negrita-1 ">
                    "... Volví a sentir unas inmensas ganas de vivir, cuando descubrí que el sentido de mi vida era el que yo le quisiera dar..."
                </p>
                <p class="p-black-negrita-1">
                    Paulo Cohelo, Escritor 
                </p>
                <br>
                <div class="div-bienvenido col-xs-12">
                    <p class="p-azul-negrita-1">
                        BIENVENIDOS
                    </p>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                      <br>
                        <picture>
                            <center>
                                <a href="<?= base_url() ?>inicio/labor_social">
                                    <img class="img-tam-3" src="<?= base_url() ?>template/tools/ong/image/inicio/1.LABOR SOCIAL.png" alt="Imagen no encontrada"/>
                                </a>
                            </center>
                        </picture>
                        <br>
                        <form role="form" id="fom_labor_social" action="<?= base_url() ?>inicio/labor_social" method="POST">
                            <button type="submit" class="btn btn-primary btn-inicio">LABOR SOCIAL</button>
                        </form>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                       <br>
                        <picture>
                            <center>
                                <a href="<?= base_url() ?>inicio/blog_y_mas">
                                    <img class="img-tam-3" src="<?= base_url() ?>template/tools/ong/image/inicio/2.Blog y Más Edit.png" alt="Imagen no encontrada"/>
                                </a>
                            </center>
                        </picture>
                        <br>
                        <form role="form" id="fom_blog_mas" action="<?= base_url() ?>inicio/blog_y_mas" method="POST">
                            <button type="submit" class="btn btn-primary btn-inicio">BLOG Y MÁS</button>
                        </form>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                       <br>
                        <picture>
                            <center>
                                <a href="<?= base_url() ?>inicio/cursos_y_capacitaciones/1">
                                    <img class="img-tam-3" src="<?= base_url() ?>template/tools/ong/image/inicio/3.Cursos y Capacitaciones Edit.png" alt="Imagen no encontrada"/>
                                </a>
                            </center>
                        </picture>
                         <br>
                        <form role="form" id="fom_curso_capacitacion" action="<?= base_url() ?>inicio/cursos_y_capacitaciones/1" method="POST">
                            <button type="submit" class="btn btn-primary btn-inicio">CURSOS Y CAPACITACIONES</button>
                        </form>
                    </div>
                </div>
                <br>
                <br><br>
                <div class="row">
                    <p class="p-azul-3">Videos Cursos en Centro de Capacitación</p>
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
            <div class="footer col-sm-12 col-xs-12">
                <?php
                $this->load->view('componente/footer_a');
                ?>
            </div>
    </body>
</html>