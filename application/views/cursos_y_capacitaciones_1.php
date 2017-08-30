<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <p class="p-black-negrita-1">"... Si no escalas la montaña, jamás podrás disfrutar el paisaje..." 
                    <br>
                    Pablo Neruda, Escritor
                </p>
                <br>
                <!--Primer curso-->
                <div class="row div-border">
                    <br>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Logística de Bodega</p>
                        <p>El Objetivo del área de logística, abastecimiento, administración de bodega e inventario es que los participantes conozcan los conceptos básicos que se ocupan en control de los ingresos y salidas de las mercaderías dentro de una empresa y que sirvan de apoyo a la gestión comercial y al control de inventarios y mermas en una compañía.</p>
                    </div>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/1-logistica.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                        <br>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="btn btn-primary" onclick="mostrar_1()">Ver Más</button>
                        <br>
                            <div id="div_area_bod" style="display:none;">
                                <br>
                                <p>
                                    Cursos: <br>
                                    •	Control y Manejo de Inventarios <br>
                                    •	Gestión y Administración de Bodega <br>
                                    •	Productividad y Calidad del Servicio de Bodega
                                </p>
                                <p>Estos cursos van destinados a que los participantes desarrollen tareas tales como: capacidad de análisis y síntesis para la solución de problemas en los procesos logísticos internos como abastecimiento de materiales y materia prima, administración del almacén y optimización del flujo de los materiales, así mismo, para los procesos logísticos externos, por ejemplo, diseño de rutas, venta y distribución de producto terminados, capacidad de interrelación entre las actividades de gestión de abastecimiento, distribución y el servicio al cliente. Capacidad creativa para la generación o innovación de los procesos logísticos en áreas de diseño de empaques, rutas de distribución y servicios con valor para cliente. Capacidad administrativa para la dirección y control de los recursos intelectuales, financieros y materiales en las áreas de compras, almacenamiento y distribución.</p>
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
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/2-informatica.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Informática y Automatización</p>
                        <p>El objetivo del área informática es que los participantes cuentan con las competencias necesarias para desempeñarse en el área técnica de desarrollo e implementación de software, colaborando con el análisis y efectuando actividades de diseño, programación, prueba, implementación, mantenimiento, documentación y capacitación de sistemas dentro del ámbito de las tecnologías de la información. Asimismo, sus conocimientos le permiten apoyar actividades de gestión asociadas a la organización, planificación y control de tareas relacionadas con el desarrollo de sistemas informáticos.</p>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="prueba btn btn-primary" onclick="mostrar_2()">Ver Más</button>
                        <br>
                            <div id="div_area_inf" style="display:none;">
                                <br>
                                <p>
                                    Cursos: <br>
                                    •	Word Básico <br>
                                    •	Word Intermedio <br>
                                    •	Excel Básico <br>
                                    •	Excel Intermedio <br>
                                    •	Computación nivel Básico
                                </p>
                                <p>Estos cursos van destinados a que los asistentes puedan desempeñar funciones en el ámbito de la Tecnología de la Información, desarrollando Sistemas Informáticos. Sus actividades se centran en el análisis, diseño, programación, prueba, implementación, mantención de Software, y en la determinación y/o adecuación del equipamiento computacional necesarios.</p>
                            </div>
                        <br>
                    </div> 
                </div>
                <!---Termino del curso-->
                <!--Tercer curso-->
                <div class="row div-border">
                    <br>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Venta y Cobranza</p>
                        <p>El objetivo del área de ventas y cobranza, es que los participantes sepan desempeñarse dentro del área de mercadeo en empresas pertenecientes a diversos sectores industriales y en especial a las empresas de consumo masivo.</p>
                    </div>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/3-venta.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="btn btn-primary" onclick="mostrar_3()">Ver Más</button>
                        <br>
                            <div id="div_area_ven" style="display:none;">
                                <br>
                                <p>
                                    Cursos: <br>
                                    •	Técnicas de venta <br>
                                    •	Técnicas de Cobranza <br>
                                    •	Televentas
                                </p>
                                <p>Estos cursos van destinados a que los asistentes puedan desempeñar funciones tales como realizar administración de zonas y especificación de rutas. Elaborar presupuestos de ventas, asignación de cuotas y manejo de la fuerza de ventas. Aplicar técnicas de adiestramiento y supervisión del personal de ventas. Diseñar planes de incentivos, ventas y cobranzas. Elaborar e implementar planes de Mercadeo. Controlar la rotación de los inventarios y participar en la determinación de los canales de distribución.</p>
                            </div>
                        <br>
                    </div> 
                </div>
                <!---Termino del curso-->
                <!--Cuarto curso-->
                <div class="row div-border">
                    <br>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/4-contabilidad.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Contabilidad y Finanzas</p>
                        <p>El objetivo del área de finanzas y contabilidad busca que los participantes de estos cursos se encuentren El Técnico en Administración Financiera, apoya en las áreas fundamentales de las finanzas y la contabilidad de la empresa, con orientación a saber manejar costos y presupuestos y llevar la contabilidad de la empresa. Su formación práctica le permite generar información para la toma de decisiones.</p>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="prueba btn btn-primary" onclick="mostrar_4()">Ver Más</button>
                        <br>
                            <div id="div_area_fin" style="display:none;">
                                <br>
                                <p>
                                    Cursos: <br>
                                    •	Contabilidad Básica <br>
                                    •	Técnicas Financieras <br>
                                    •	Administración Financiera
                                </p>
                                <p>Estos cursos van destinados a que los asistentes puedan desempeñar funciones en áreas tales como: departamento de cobranzas, créditos, presupuestos y planificación financiera. En empresas de servicios, productivas, públicas y privadas su formación práctica le permite desarrollar trabajos relacionados con áreas de control de gestión, atención y evaluación de clientes en los departamentos de administración y finanzas.</p>
                            </div>
                        <br>
                    </div> 
                </div>
                <!---Termino del curso-->
                <!--Quinto curso-->
                <div class="row div-border">
                    <br>
                    <div class="col-sm-6">
                        <p class="p-titulo-pag-2">Área de Administración de Empresas</p>
                        <p>El Objetivo del área de Administración de Empresas busca que los participantes de estos cursos se encuentren capacitados para desarrollar estrategias corporativas con el fin de agregar valor y sustentabilidad en las empresas donde laboren, impactando en las distintas áreas funcionales de la organización, con el fin de mejorar la productividad y la competitividad de la gestión empresarial, considerando las leyes vigentes.</p>
                    </div>
                    <div class="col-sm-6">
                        <picture>
                            <center>
                                <img class="img-tam-6" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/cursos_y_capacitaciones/5-administracion.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <br><br>
                    <div class="col-sm-12"> 
                        <button type="button" class="btn btn-primary" onclick="mostrar_5()">Ver Más</button>
                        <br>
                            <div id="div_area_adm" style="display:none;">
                                <br>
                                <p>
                                    Cursos: <br>
                                    •	Gestión Empresarial <br>
                                    •	Administración de Empresas Familiares <br>
                                    •	Gestión Integral de Microempresa
                                </p>
                                <p>Estos cursos van destinados a que los participantes en los talleres se puedan desempeñar en organizaciones de distintos rubros y tamaños, tales como: instituciones financieras, empresas de servicios y productivas, Pymes entre otras, desempeñándose en funciones estratégicas como ejecutivo, analista, administrador, o jefe de áreas de proyectos y asistencia técnica en el área de la administración.</p>
                            </div>
                        <br>
                    </div> 
                </div>

                <div class="row">
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