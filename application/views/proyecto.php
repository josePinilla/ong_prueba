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
                <p class="p-titulo-pag-1">PROYECTOS</p>
                <hr class="hr-personalizado">

                <p>
                    ONG Momento de Cambio, en su labor social fomenta que las empresas obtengan su 
                    certificación en Responsabilidad Social Empresarial (RSE), 
                    además de ayudar en proyectos e investigaciones en distintos ámbitos.
                </p>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <center>
                            <form role="form" id="fom-contacto" action="<?= base_url() ?>proyecto/medio_ambiente" method="POST">
                                <button type="submit" class="btn btn-default btn-proyecto">Medio Ambiente</button>
                            </form>
                        </center>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <center>
                            <form role="form" id="fom-contacto" action="<?= base_url() ?>proyecto/insercion_laboral" method="POST">
                                <button type="submit" class="btn btn-default btn-proyecto">Inserción Laboral</button>
                            </form>
                        </center>
                    </div>
                </div>
                <br><br><br>
                <p class="p-black-negrita-3">!!Ayúdanos a seguir con nuestros proyectos!!</p>
                
            </div>
            </div><br>
        <hr class="hr-personalizado">
            <div class="footer col-sm-12 col-xs-12">
                <?php
                $this->load->view('componente/footer_b');
                ?>
            </div>
        
    </body>
</html>