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
            </div>
            <div class="mainbody">
                <hr class="hr-personalizado">
                <p class="p-titulo-pag-1">NUESTRA HISTORIA</p>
                <hr class="hr-personalizado">

                <p>ONG Momento de Cambio parte en el año 2012 como una ayuda directa a la mujer, 
                    donde a través de asesorías y proyectos nos aseguramos de darles la oportunidad 
                    de desarrollarse en cada ámbito, ya sea social, profesional y familiar, 
                    todo esto bajo la atenta mirada de profesionales que nos ayudan en este proceso. 
                    Además, nuestro compromiso social y espiritual, nos hace contribuir con el desarrollo 
                    humanitario, protección del medio ambiente y al progreso del país.
                </p>
                <br>
                <p class="p-black-negrita-1">
                    "Llego el momento del cambio, es hora de transformar el miedo y convertirlo en una oportunidad…"
                </p>
                <br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Misión</p>
                        <p>
                            La mujer es el pilar fundamental en la familia y se merece toda la ayuda posible para superar los difíciles momentos que le ha tocado vivir, es por eso que nos enfocamos en mejorar su autoestima y en entregarles las herramientas necesarias para que logren sus objetivos.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/conocenos/1.MISION.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/conocenos/2.VISION.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <p class="p-titulo-pag-2">Visión</p>
                        <p>
                            Promover el desarrollo social por medio de asesorías y alianzas estratégicas, 
                            lo cual provoca una sinergia positiva para el desarrollo de proyectos y así de 
                            esta manera poder lograr mejoras en las condiciones de la comunidad como también 
                            dentro de las empresas.
                        </p>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <picture>
                        <center>
                            <p class="p-azul-3">Directorio</p>
                            <img class="img-tam-2" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/conocenos/Willy.png" alt="Imagen no encontrada"/>
                        </center>
                    </picture>
                    <br>
                    <p class="p-azul-2">Willy Conejeros Gajardo</p>
                    <p class="p-azul-2">Director General ONG Momento de Cambio</p>
                </div>
                
            </div>
            </div> <br><br>
            <hr class="hr-personalizado">
            <div class="footer col-sm-12">
                <?php
                $this->load->view('componente/footer_b');
                ?>
            </div>
    </body>
</html>