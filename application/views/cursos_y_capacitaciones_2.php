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
                <p class="p-titulo-pag-1">CURSOS Y CAPACITACIONES</p>
                <hr class="hr-personalizado">
                <br> 
                <p class="p-black-negrita-1">
                    "... Si no escalas la montaña, jamás podrás disfrutar el paisaje..." <br>
                    Pablo Neruda, Escritor
                </p>
                <br>
                <!--Primer curso-->
                <div class="row div-border">
                    <br>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Proyectos de Emprendimiento</p>
                        <p>El objetivo del área de emprendimiento es que los participantes sean capaces de visualizar y desarrollar las mejores alternativas para desarrollar nuevos proyectos de negocios dentro de una compañía, o alternativas de negocios particulares, y así pueden aprovechar su potencial para maximizar sus conocimientos empresariales, adquirirlos desde cero, materializar las ideas que tienen o llevar los negocios familiares.</p>
                    </div>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/6-proyecto.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="btn btn-primary" onclick="mostrar_6()">Ver Más</button>
                        <br>
                            <div id="div_area_pro" style="display:none;">
                                <br>
                                <p>
                                    Cursos: <br>
                                    •	Evaluación de Proyectos <br>
                                    •	Administración de Proyectos <br>
                                    •	Mitigación de Riesgo
                                </p>
                                <p>Estos cursos van destinados que los asistentes obtengan una formación que involucra conocimientos de economía, ingeniería industrial, administración y finanzas, matemáticas y estadística. Aptitudes, habilidades y actitudes que te permitan enfrentar los retos de iniciar tu propia empresa o del trabajo que elijas dentro del mercado laboral.</p>
                            </div>
                        <br>
                    </div> 
                </div>
                <!--Termino del curso-->
                <!--Segundo curso-->
                <div class="row div-border">
                    <br>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/7-habilidades.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Desarrollo de Habilidades Blandas</p>
                        <p>El objetivo del área de desarrollo de habilidades blandas es que los participantes cuenten y conozcan   herramientas comunicacionales que les permitan desarrollarse y sociabilizarse de manera adecuada en la relación con sus pares y sus clientes ya que estos atributos son muy demandados por los empleadores en la actualidad. Las "soft skills" o habilidades blandas permiten que una persona se destaque de otra, sobre todo cuando se tienen desarrollados los buenos modales, el optimismo, el sentido común, el sentido del humor, la empatía y la capacidad de colaborar y negociar.</p>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="prueba btn btn-primary" onclick="mostrar_7()">Ver Más</button>
                        <br>
                            <div id="div_area_des" style="display:none;">
                                <br>
                                <p>
                                    Cursos: <br>
                                    •	Trabajo en Equipo y Resolución de Conflictos <br>
                                    •	Estrategias de RRHH y Trabajo en Equipo <br>
                                    •	Liderazgo y Trabajo en Equipo <br>
                                    •	Gestión y Administración del Tiempo <br>
                                    •	Gestión de Personas <br>
                                    •	Gestión por Competencias <br>
                                    •	Comunicación Efectiva <br>
                                    •	Liderazgo basado por competencia
                                </p>
                                <p>Estos cursos van destinados a que los asistentes adquieran competencias tales como: buena organización, actitud positiva, capacidad para resolver conflictos, trabajo en equipo ,puntualidad, pensamiento crítico, ser sociables, habilidades interpersonales de comunicación, facilidad de adaptación, es decir, generar en su trabajo una personalidad amigable de manera que le permitan ser eficiente y productivo.</p>
                            </div>
                        <br>
                    </div> 
                </div>
                <!--Termino del curso-->
                <!--Tercer curso-->
                <div class="row div-border">
                    <br>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Educación</p>
                        <p>El objetivo del área de educación es que los participantes de los cursos sean capaces de responder de forma adecuada a las necesidades particulares que presentan los estudiantes y las personas en general, en un contexto globalizado de constantes cambios.</p>
                    </div>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/8-educacion.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="btn btn-primary" onclick="mostrar_8()">Ver Más</button>
                        <br>
                            <div id="div_area_edu" style="display:none;">
                                <br>
                                <p>
                                    Cursos: <br>
                                    •	Evaluación por competencias <br>
                                    •	Formación por competencias <br>
                                    •	Estrategias e instrumentos de Evaluación <br>
                                    •	Evaluación del y para el aprendizaje <br>
                                    •	Metodologías Activas
                                </p>
                                <p>En estos talleres se les enseña a los asistentes a realizar propuestas docentes innovadoras que parte de sólidas bases filosóficas, científicas y pedagógicas y que potenciará la vocación de servicio.</p>
                                <p>Estos cursos están orientados al logro de las personas desarrollando liderazgo y aprendiendo a trabajar en equipo y así potenciar la proactividad y flexibilidad adquiriendo una actitud emprendedora y sabiendo manejar los riesgos a los que se ven enfrentados las personas en la vida cotidiana y en la sociedad.</p>
                            </div>
                        <br>
                    </div> 
                </div>
                <!--Termino del curso-->
                <!--Tercer curso-->
                <div class="row div-border">
                    <br>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/9-social.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Desarrollo Social</p>
                        <p>El objetivo del área desarrollo social es que los participantes adquieran conocimientos de dirección en áreas de gestión humana de organizaciones privadas o públicas, que estén interesados en actualizar o estructurar sus conocimientos con un enfoque estratégico, humanista integral y moderno. Estos talleres buscan que el líder alcance una visión integral del ser humano en su entorno laboral y con conocimiento de los enfoques y herramientas que le permitan dirigir la estrategia de gestión humana de cualquier organización.</p>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="prueba btn btn-primary" onclick="mostrar_9()">Ver Más</button>
                        <br>
                            <div id="div_area_soc" style="display:none;">
                                <br>
                                 <p>
                                    Cursos: <br>
                                    •	Creación de Organizaciones Sociales <br>
                                    •	Creación de Microempresas <br>
                                    •	Desarrollo y Emprendimiento para Pymes <br>
                                    •	Habilidades para la Empleabilidad <br>
                                    •	Competencias Laborales Transversales
                                </p>
                                <p>En estos cursos a los asistentes se les enseña a diseñar y dirigir los subsistemas y procesos de las personas en la organización (planeación, ingreso, desarrollo, compensación y control). promotor y gestor de procesos, capacitado para gerenciar, asesorar y/o facilitar la planificación y ejecución de proyectos transformadores tanto a nivel nacional como regional y local, especialmente los que impulsen procesos de Desarrollo Humano. Su formación integral le permitirá participar especialmente en la promoción y apoyo al desarrollo sustentable, estando en capacidad de diseñar y ejecutar investigaciones en equipos inter y transdisciplinarios relacionados con el desarrollo Humano, tanto de manera independiente o como integrante de organizaciones públicas o privadas que lo requieran.</p>
                            </div>
                        <br>
                    </div> 
                </div>
                <!--Termino del curso-->
                <div class="row">
                    <!--<br>
                    <div class="col-sm-12">
                        <p class="text-center">
                            Página
                            <a href="<?= base_url() ?>inicio/cursos_y_capacitaciones/1">
                                1
                            </a> -
                            <a href="<?= base_url() ?>inicio/cursos_y_capacitaciones/2">
                                2
                            </a>
                        </p>
                    </div>-->
                    <nav aria-label="Page navigation" class="text-center">
                        <ul class="pagination">
                          <li>
                            <a href="<?= base_url() ?>inicio/cursos_y_capacitaciones/1" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li><a href="<?= base_url() ?>inicio/cursos_y_capacitaciones/1">1</a></li>
                          <li><a href="<?= base_url() ?>inicio/cursos_y_capacitaciones/2">2</a></li>
                          <li>
                            <a href="<?= base_url() ?>inicio/cursos_y_capacitaciones/2" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    <p class="text-center p-azul-3">¿Necesitas un curso a la medida de tu empresa?</p>
                    <center>
                        <form role="form" id="fom-curso-capacitacion" action="<?= base_url() ?>contacto" method="POST">
                            <button type="submit" class="btn btn-default btn-escribenos">
                                ESCRÍBENOS AQUÍ
                            </button>
                        </form>
                    </center>
                </div>
                    <script src="<?= base_url() ?>template/tools/ong/js/muestra_ver_mas.js" type="text/javascript"></script>
                <hr class="hr-personalizado">
            </div>
            <div class="footer">
                <?php
                $this->load->view('componente/footer_b');
                ?>
            </div>
        </div> 
    </body>
</html>