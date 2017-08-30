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
                <p class="p-titulo-pag-1">BLOG Y MÁS...</p>
                <hr class="hr-personalizado">
                <br>
                <p class="p-black-negrita-1">
                    "... Quién no ha caído nunca, no tiene una idea justa del esfuerzo que hay que hacer para ponerse nuevamente de pie..."
                    <br>
                    Multatuli, Escritor
                </p>
                <br>
                
                <div class="row">
                    <p class="p-azul-2" style="text-align: center;">Blogs Temas Contingentes</p>
                    <br>
                    
                    <div class="col-sm-4 invitado">
                        <a href="<?= base_url()?>Blog/blog_1">
                            <img class="img-blog" src="<?= base_url() ?>template/tools/ong/image/blog/Feliz.png" alt="Imagen no encontrada"/>
                        </a>
                        <p class="p-black-negrita-1">La felicidad, un tema de elección</p>
                    </div>
                    
                    <div class="col-sm-4 invitado">
                        <a href="<?= base_url()?>Blog/blog_2">
                            <img class="img-blog" src="<?= base_url() ?>template/tools/ong/image/blog/Violencia.png" alt="Imagen no encontrada"/>
                        </a>
                        <p class="p-black-negrita-1">Violencia Intrafamiliar</p>
                    </div>
                    
                    <div class="col-sm-4 invitado">
                        <a href="<?= base_url()?>Blog/blog_3">
                            <img class="img-blog" src="<?= base_url() ?>template/tools/ong/image/blog/Equidad.png" alt="Imagen no encontrada"/>
                        </a> 
                        <p class="p-black-negrita-1">Equidad de Género</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 invitado">
                        <a href="<?= base_url()?>Blog/blog_4">
                            <img class="img-blog" src="<?= base_url() ?>template/tools/ong/image/blog/Equilibrio.png" alt="Imagen no encontrada"/>
                        </a>
                        <p class="p-black-negrita-1">Mujer Familia, estudio y Trabajo.<br>Equilibrio Perfecto</p>
                    </div>
                    
                    <div class="col-sm-4 invitado">
                        <a href="<?= base_url()?>Blog/blog_5">
                            <img class="img-blog" src="<?= base_url() ?>template/tools/ong/image/blog/JefaDeHogar.png" alt="Imagen no encontrada"/>
                        </a>
                        <p class="p-black-negrita-1">La Mujer como Jefa de Hogar</p>
                    </div>
                    
                    <div class="col-sm-4 invitado">
                        <a href="<?= base_url()?>Blog/blog_6">
                            <img class="img-blog" src="<?= base_url() ?>template/tools/ong/image/blog/Microemprendedor.png" alt="Imagen no encontrada"/>
                        </a>
                        <p class="p-black-negrita-1">Microemprendedores</p>
                    </div>
                    
                </div>
             </div> 
   
                <div class="row">
                    <br><br><br>
                    <div class="col-sm-8">
                        <p class="p-azul-3">Noticias</p>
                        <br>
                        <p class="p-black-negrita-3">
                            Confirman que las emociones positivas mejoran la salud: ¿Cuáles experimentas tú día a día?
                        </p>
                        <p style="margin-left: 87%;">Emol.cl</p>
                        <picture>
                            <center>
                                <img class="img-tam-7" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/blog/Noticia.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                        <br><br>
                        <p>
                            No solo ser feliz ayuda a ser saludable, sino que existen una serie de otras emociones positivas que al experimentarlas a diario, 
                            reducen la inflamación y, por lo tanto, disminuyen el riesgo de padecer males como la diabetes o la enfermedad coronaria.
                        </p>
                        <p>
                            Así lo determinó un estudio en el que participaron 175 personas de entre 40 y 65 años, 
                            quienes durante un mes debieron registrar en un diario qué emociones positivas experimentaban día a día. Seis meses después, 
                            los investigadores les tomaron muestras de sangre para hallar marcadores de inflamación.
                        </p>                 
                        <p>
                            Al analizar los resultados, los científicos descubrieron que experimentar una amplia gama de emociones positivas, 
                            reduce los niveles de inflamación 
                        </p>                      
                        <p>
                            "Hay muchos tipos de felicidad y experimentar diversos estados emocionales podría reducir la vulnerabilidad de una persona, 
                            al evitar que una sola emoción domine su vida", declaró Anthony Ong profesor de medicina paliativa y geriátrica en la Universidad de Cornell.
                        </p>
                        <br>
                        <button type="button" class="btn btn-primary " onclick="mostrar_0()">Ver Más</button>
                        <div id="div_mas_noticia" style="display: none;">
                            <br>
                            <p class="text-left">
                                En ese sentido, Ong aseguró que la simple práctica diaria de etiquetar y categorizar los buenos sentimientos, 
                                "puede ayudarnos a experimentar emociones más diferenciadas en distintos contextos".
                            </p>
                            <p>
                                A continuación la lista de emociones positivas mejoran la salud. ¿Cuáles experimentas tú día a día?  
                            </p>
                            <p>
                                1.- Entusiasmo<br>
                                2.- Interés<br>
                                3.- Determinación<br>
                                4.- Emoción<br>
                                5.- Diversión<br>
                                6.- Inspiración<br>
                                7.- Alerta<br>
                                8.- Actividad<br>
                                9.- Fortaleza<br>
                                10.- Orgullo<br>
                                11.- Atención<br>
                                12.- Felicidad<br>
                                13.- Relajación<br>
                                14.- Alegría<br>
                                15.- Estar a gusto<br>
                                16.- Calma<br>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        
                    </div>

                    <div class="col-sm-3">
                        <br><br><br><br>
                        <br><br><br>
                        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=350&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=es.cl%23holiday%40group.v.calendar.google.com&amp;color=%2329527A&amp;ctz=Europe%2FLondon" style="border-width:0" width="250" height="250" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>

                <script src="<?= base_url() ?>template/tools/ong/js/muestra_ver_mas.js" type="text/javascript"></script>
            
        </div><br><br>
                <hr class="hr-personalizado">
            <div class="footer col-sm-12">
                <?php
                $this->load->view('componente/footer_b');
                ?>
            </div>
        </div>
    </body>
</html>