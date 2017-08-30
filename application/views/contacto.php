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
                <p class="p-titulo-pag-1">CONTÁCTANOS</p>
                <hr class="hr-personalizado">

                <p>Para contactarte con nosotros, escríbenos al correo: contacto@ongmomentodecambio.cl<br>
                    llámanos al : (562) 2735 4062 / (562) 2454 1760<br><br>
                    O escríbenos a nuestro Whatsapp: <i class="fa fa-whatsapp" aria-hidden="true"></i> (569) 6276 0088<br><br>
                    También puedes escribirnos un mensaje:
                </p>

                <div class="container">
                    <form role="form" id="fom-contacto" action="<?= base_url() ?>contacto/enviar" method="POST">
                        <div class="form-group">
                            <label for="nombre_contacto" class="col-lg-2 control-label">NOMBRE (*)</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="nombre_contacto" name="nombre_contacto" placeholder="Nombre" required="">
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-group">
                            <label for="email_contacto" class="col-lg-2 control-label">EMAIL (*)</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="email_contacto" name="email_contacto" placeholder="Email" required="">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="empresa_contacto" class="col-lg-2 control-label">EMPRESA (*)</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="empresa_contacto" name="empresa_contacto" placeholder="Empresa" required="">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="mensaje_contacto" class="col-lg-2 control-label">MENSAJE (*)</label>
                            <div class="col-lg-10">
                                <textarea rows="5" cols="30" class="form-control" id="mensaje_contacto" name="mensaje_contacto" placeholder="Introduzca su mensaje" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <br>
                                <p> (*) Datos obligatorios</p>
                                <center>
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                    <button type="reset" class="btn btn-default">Limpiar</button>
                                </center>
                            </div>
                        </div>
                    </form>
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