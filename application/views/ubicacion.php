<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        $this->load->view('componente/head');
        ?>
        <link href="<?= base_url() ?>template/tools/ong/css/style-bootstrap-ubicacion.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <?php
                $this->load->view('componente/menu');
                ?>
            </div>
            <div class="mainbody">
                <hr class="hr-personalizado">
                <p class="p-titulo-pag-1">UBICACIÓN</p>
                <hr class="hr-personalizado">

                <div class="row">                   
                    <center>
                         <p class="ubi-titulo">Oficina Central</p>
                        <p class="ubi-1">Francisco Bilbao 2907, Providencia Oficina 03</p>
                        <p class="ubi-1">(562) 2735 4062 </p>
                    </center>
                    <br>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-ubicacion-1" style="max-width: 100%; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/ubicacion/Oficina central.jpg" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                       <br>
                    </div>
                    <div class="col-sm-6">
                        <center>
                            <iframe style="background-repeat: no-repeat;background-position: 50%;border-radius: 5%;background-size: 100% auto; max-width: 100%; width: auto/9;" class="iframa-border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.5305959901943!2d-70.59248528480109!3d-33.43548028077822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf09dd2f01cb%3A0xdb9f441c1277bc3!2sAv.+Francisco+Bilbao+2907%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1500623643126" 
                                    width="400"
                                    height="250"
                                    frameborder="0"
                                    allowfullscreen>
                            </iframe>
                        </center>
                    </div>
                </div>
                <br> <br> <br>
                <div class="row">
                    <center>
                        <p class="ubi-titulo">Casa Matriz</p>
                        <p class="ubi-1">Avenida Puma 1480, Recoleta</p>
                        <p class="ubi-1">(562) 2454 1760 </p>
                    </center>
                    <br>
                    <div class="col-sm-6">
                        <center>
                            <iframe style="background-repeat: no-repeat;background-position: 50%;border-radius: 5%;background-size: 100% auto; max-width: 100%; width: auto/9;" class="iframa-border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.3509113661103!2d-70.64189141363768!3d-33.414094582817235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5ef2b465097%3A0xb5e986562d905b86!2sPuma+1480%2C+Recoleta%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1500624133855"
                                    frameborder="0"
                                    allowfullscreen>
                            </iframe>
                        </center>
                      <br>
                    </div>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-ubicacion-1" style="max-width: 100%; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/ubicacion/CasaMatriz.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                </div>
                <br> <br> <br>
                <div class="row">
                    <center>
                        <p class="ubi-titulo">Centro de Emprendimiento</p>
                        <p class="ubi-1">Santa Aida 6031, Quinta Normal. Población Barea</p>
                    </center>
                    <br>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-ubicacion-1" style="max-width: 100%; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/ubicacion/Centro.jpeg" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                       <br>
                    </div>
                    <div class="col-sm-6">
                        <center>
                            <iframe style="background-repeat: no-repeat;background-position: 50%;border-radius: 5%;background-size: 100% auto; max-width: 100%; width: auto/9;" class="iframa-border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.4011263411476!2d-70.71600848480156!3d-33.41278508078476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c6aa7fc5693d%3A0x4e0d4fc700970394!2sSta+Aida+6031%2C+Quinta+Normal%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1500624342321" 
                                    frameborder="0"
                                    allowfullscreen>
                            </iframe>
                        </center>
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