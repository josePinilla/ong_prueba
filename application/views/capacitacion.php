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
                <p class="p-titulo-pag-1">CENTRO DE CAPACITACIÓN</p>
                <hr class="hr-personalizado">

                <p>
                    ONG Momento de Cambio, a través de su Centro de Capacitación, realiza cursos laborales 
                    entregando nuevas y mejores herramientas a sus trabajadores, nuestro plus esta en 
                    entregar una certificación en Responsabilidad Social Empresarial (RSE) y así aportar 
                    con el desarrollo y crecimiento de sus colaboradores. <br><br>
                    Nuestro equipo de trabajo cuenta con un alto nivel de profesionales y académicos que son 
                    especialistas en su área, logrando así mejoras en los resultados a corto y largo plazo.
                </p>
                <br><br>
                <p class="p-azul-3">
                    Nuestro Equipo
                </p>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <p class="text-left p-black-negrita-3">
                            José Manuel Saldaña
                        </p>
                        <p class="text-center p-black-negrita-1">
                            Director Centro de Capacitación <br> ONG Momento de Cambio
                        </p>
                        <picture>
                            <center>
                                <img class="img-tam-2" src="<?= base_url() ?>template/tools/ong/image/capacitacion/Saldania.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <br> <br> <br> <br>
                    
                    <div class="col-sm-8">
                        <div>
                            <p class="text-left">
                                &bull; Periodista, Licenciado en Ciencias de la comunicación, Universidad Santo Tomás
                            </p>
                            <p class="text-left">
                                &bull; Máster en Ciencias de la Educación, Universidad Europea de Madrid
                            </p>
                            <p class="text-left">
                                &bull; MBA en Administración y Gestión Educacional, IED
                            </p>
                            <p class="text-left">
                                &bull; MBA en Marketing Internacional, Lauréate International Universities
                            </p>
                            <p class="text-left">
                                &bull; Magister en Gestión Educacional, Universidad de las Américas
                            </p>
                            <p class="text-left">
                                &bull; Diplomado en Marketing Estratégico, Ventas y RRHH, Universidad Adolfo Ibáñez
                            </p>
                            <p class="text-left">
                                &bull; Experto y creador de proyectos de emprendimiento y programas educativos para la red del Sistema Universitario de las Américas
                            </p>
                            <p class="text-left">
                                &bull; Creador de mapas de rutas para empresas para el desarrollo organizacional basado en igualdad de oportunidades entre hombre y mujer
                            </p>
                            <p class="text-left">
                                &bull; Actualmente Docente  de DuocUC (máxima categorización académica modelo educativo Universidad Católica)
                            </p>
                            <button type="button" class="btn btn-primary" onclick="mostrar_ver_mas_jose()">
                                Ver Más
                            </button>
                            <div id="div_mas_jose" style="display: none;">
                                <br>
                                <p class="text-left" style="text-align: justify;">
                                    Profesional con más de 17 años de experiencia en Planificación, Diseño y Dirección de Proyectos Educativos, especialmente en la Educación Técnica, y ocupando cargos gerencias de importancia en diferentes empresas, especialmente en el rubro del retail, y negocios relacionados con la industria. Mis principales fortalezas están relacionadas con poseer una visión transversal, estratégica y operativa del mundo empresarial y del Sistema de Educación Superior y Universitaria, integrando lo académico y lo comercial.  Son cualidades de personalidad, perseverancia, un gran dinamismo, autonomía, compromiso, estabilidad laboral, flexibilidad y habilidad para liderar equipos de trabajo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
                <div class="row">
                    <div class="col-sm-8">
                        <br><br><br><br>
                        <div>
                            <p class="text-left">
                                &bull; Magíster en Dirección de Empresas, Universidad Arturo Prat
                            </p>
                            <p class="text-left">
                                &bull; Licenciada en Ciencias de la Administración
                            </p>
                            <p class="text-left">
                                &bull; Ingeniero en Administración de Empresas
                            </p>
                            <p class="text-left">
                                &bull; Cursando Diplomado en Educación Vocacional
                            </p>
                            <button type="button" class="btn btn-primary" onclick="mostrar_ver_mas_pamela()">Ver Más</button>
                            <div id="div_mas_pamela" style="display: none;">
                                <br>
                                <p class="text-left" style="text-align: justify;">
                                    Profesional que cuenta con 20 años de experiencia en las áreas Comercial, Servicios al Cliente y Gestión de Personas, amplia experiencia en formación de equipos de trabajo en el área técnica. Actualmente Docente para la Escuela de Administración y Negocios de DuocUC y Gerente de Toso Propiedades.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-center p-black-negrita-3">
                            Pamela Torres
                        </p>
                        <p class="text-center p-black-negrita-1">
                            Directora Centro de Capacitación <br> ONG Momento de Cambio
                        </p>
                        <picture>
                            <center>
                                <img class="img-tam-2" src="<?= base_url() ?>template/tools/ong/image/capacitacion/pamela.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="p-azul-3">Nuestro Centro de Capacitación</p>
                    </div>
                    
                    <br>
                        <div class="col-xs-12">
                           <p>
                            Si ustedes así lo solicitan, contamos con la infraestructura adecuada para realizar las capacitaciones en las dependencias de Nuestra ONG, la Casa Matriz está ubicada en Avenida Puma 1480, Comuna de Recoleta.
                        </p>
                        </div>
                        <br>
                    <div class="col-xs-12 col-sm-6">                      
                        <picture>
                            <center>
                                <img class="img-capacitacion-1" src="<?= base_url() ?>template/tools/ong/image/capacitacion/centro_de_capacitacion_2.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                        <br>
                        <center>
                            <a href="<?= base_url() ?>template/descargas/Presentación ONG Momento de Cambio.pdf" target="_blank">
                                <button type="submit" class="btn btn-default btn-proyecto">
                                    DESCARGA NUESTRA PRESENTACIÓN
                                </button>
                            </a>
                        </center>
                        <br>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <picture>
                            <center>
                                <img class="img-capacitacion-2" src="<?= base_url() ?>template/tools/ong/image/capacitacion/centro_de_capacitacion.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                        <br>
                        <center>
                            <form role="form" id="fom-contacto" action="<?= base_url() ?>inicio/cursos_y_capacitaciones/1" method="POST">
                                <button type="submit" class="btn btn-default btn-capacitacion">
                                    REVISA NUESTRA LISTA DE CURSOS
                                </button>
                            </form>
                        </center>
                        <br>
                    </div>
                </div>
                <br>
                
                <script src="<?= base_url() ?>template/tools/ong/js/muestra_ver_mas.js" type="text/javascript"></script>
            </div>
            </div><br><br> 
            <hr class="hr-personalizado">
            <div class="footer col-sm-12 col-xs-12">
                <?php
                $this->load->view('componente/footer_b');
                ?>
            </div>
        
    </body>
</html>