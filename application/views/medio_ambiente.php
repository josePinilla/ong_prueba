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
                <p class="p-titulo-pag-1">MEDIO AMBIENTE</p>
                <hr class="hr-personalizado">
                <br>
                <div class="row">
                    <div class="col-sm-8">
                        <p>
                            ONG Momento de Cambio y su preocupación por el Medio Ambiente, 
                            está relacionado con la investigación y germinación de la Paulownia Tomentosa, 
                            este es un árbol originario de China que cuenta con varios beneficios, 
                            como, por ejemplo: <br><br>
                            •	&nbsp; Consume más CO2 y produce más O2, que el resto de las especies arbóreas
                            debido a sus grandes hojas y características metabólicas. Un árbol de Paulownia captura 
                            un promedio 21,7 kg de CO2 y devuelve 5,9 kg de O2 al día, una cifra superior a cualquier 
                            otro árbol conocido en hasta casi diez veces. <br>
                            •	&nbsp; Es el árbol de más rápido crecimiento de todas las especies conocidas, 
                            llegando a un crecimiento de hasta 2 cm/día, logrando una altura de 6 m en un tiempo 
                            de entre diez meses y un año y medio, observándose una etapa inicial muy acelerada y 
                            sorprendente. En sólo un mes o algo más, en condiciones favorables, puede alcanzar la 
                            altura de una persona promedio, y su altura total, algo menos de 30 m, la alcanzará en 
                            un período de entre seis y siete años. <br>
                            •	&nbsp; Es una especie notablemente resistente a plagas y enfermedades. 
                            Esto se debe a su bajo contenido de aceites y resinas. <br>
                            •	&nbsp; Se adapta a suelos pobres, empobrecidos por sobre cultivo, contaminados 
                            con sustancias sintéticas o hidrocarburos, y recupera sus propiedades aportando nitrógeno 
                            y oxigenándolos, por la acción expansiva de sus raíces de desarrollo vertical y profundo. 
                            Atrae gran cantidad de microorganismos y fauna edáfica en mayor grado que otras especies, 
                            lo cual contribuye a restablecer el ecosistema del sustrato. <br>
                            •	&nbsp; Tolera muy bien las sequías y el fuego, habiendo sobrevivido íntegro a temperaturas de 425 °C. <br>
                            •	&nbsp; Favorece la permeabilidad y la retención hídrica del suelo, como la mayoría de los árboles, 
                            pero en mayor cantidad. <br>
                            •	&nbsp; Su madera posee propiedades excelentes para toda clase de usos industriales. <br>
                            •	&nbsp; Su tono es claro, tiene pocos nudos, es liviana y de elevado rendimiento. 
                            <br><br>

                            El principal el que absorba diez veces más dióxido de carbono que cualquier otro árbol 
                            y que al mismo tiempo emite grandes cantidades de oxígeno, lo que termina siendo clave 
                            en el combate de la contaminación y el cambio climático.
                        </p>

                        <p>Fuente:
                            <a target="_blank" href="http://paulownia.bg/es/cualidades-de-paulownia">
                                http://paulownia.bg/es/cualidades-de-paulownia
                            </a>
                        </p>
                    </div>

                    <div class="col-sm-4">
                        <picture>
                            <center>
                                <img class="img-tam-5" src="<?= base_url() ?>template/tools/ong/image/medio_ambiente/paulownia_tomentosa.jpg" alt="Imagen no encontrada"/>
                                <p class="p-black-negrita-1">Paulownia Tomentosa</p>
                            </center>
                        </picture>
                    </div>
                </div><br>
                <p class="p-black-negrita-3">!!Ayúdanos a seguir con nuestros proyectos!!</p>
                <br>                
              </div> 
        </div><br>
            <hr class="hr-personalizado">
            <div class="footer col-sm-12">
                <?php
                $this->load->view('componente/footer_b');
                ?>
            </div>
    </body>
</html>