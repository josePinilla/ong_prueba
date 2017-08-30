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
                <p class="p-titulo-pag-1">INSERCIÓN LABORAL</p>
                <hr class="hr-personalizado">

                <p>
                    ONG Momento de Cambio y su preocupación por su labor social, ayuda a mujeres en 
                    dificultades, que no cuentan con los recursos ni las herramientas para salir 
                    adelante y las ayuda a desarrollarse como mujeres y madres.
                    <br><br>    
                    En nuestro Centro de Rehabilitación, se les entrega ayuda psicológica, 
                    mejoramos su autoestima y les entregamos cursos que las ayudan a integrarse al mundo 
                    laboral de mejor manera o para emprender y crear sus propia empresa.
                </p>
                <br><br>
                <p class="p-black-negrita-1">
                    "... Nunca es tarde para emprender un nuevo rumbo, vivir una nueva historia o construir un nuevo sueño..."
                </p>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <picture>
                            <center>
                                <img class="img-tam-1" src="<?= base_url() ?>template/tools/ong/image/insercion_laboral/image_1.jpg" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <picture>
                            <center>
                                <img class="img-tam-1" src="<?= base_url() ?>template/tools/ong/image/insercion_laboral/image_2.jpg" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <picture>
                            <center>
                                <img class="img-tam-1" src="<?= base_url() ?>template/tools/ong/image/insercion_laboral/image_3.jpg" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                </div>
                <br><br>
                <p class="p-black-negrita-3">!!Ayúdanos a seguir con nuestros proyectos!!</p>
                <br>
                
            </div>
            </div> 
        <hr class="hr-personalizado">
            <div class="footer col-sm-12">
                <?php
                $this->load->view('componente/footer_b');
                ?>
            </div> 
    </body>
</html>