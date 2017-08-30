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
                    <a href="<?= base_url() ?>inicio/blog_y_mas" style="text-decoration:none"><p class="p-titulo-pag-1">BLOG Y MÁS...</p></a>
                <hr class="hr-personalizado">
                <br>
                <div class="col-sm-8 col-xs-12">
                    <p class="p-azul-2">Equidad de Género</p>
                </div>
                <div class="col-sm-4">
                   
                </div>
                <div class="col-sm-8 col-xs-10">
                    <p style="margin-left: 73%; color: blue; font-size: 13px;">Por: Usuario Anonimo</p>
                </div>
                <br>
               
                <div class="row">
                    <br>
                    <div class="col-sm-8">
                        <picture>
                            <center>
                                <img class="img-tam-blogs" style="max-width: 100%; height: auto; width: auto/9;" src="<?= base_url() ?>template/tools/ong/image/blog/Equidad_blog.png" alt="Imagen no encontrada"/>
                            </center>
                        </picture>
                    </div>
                    <br>
                    <div class="col-sm-4">
                        <div class="div-lista">
                            <a href="<?= base_url() ?>inicio/blog_y_mas" style="text-decoration:none"><p class="p-lista-blogs">Últimos Blogs</p></a>
                        </div>
                        <div class="list-group">
                            <form role="form" action="<?= base_url()?>Blog/blog_1" method="POST">
                                <button type="submit" class="list-group-item">La felicidad, un tema de elección</button>
                            </form>
                            <form role="form" action="<?= base_url()?>Blog/blog_2" method="POST">
                                <button type="submit" class="list-group-item">Violencia Intrafamiliar</button>
                            </form>
                            <form role="form" action="<?= base_url()?>Blog/blog_4" method="POST">
                                <button type="submit" class="list-group-item">Mujer Familia, estudio y Trabajo.Equilibrio Perfecto</button>
                            </form>
                            <form role="form" action="<?= base_url()?>Blog/blog_5" method="POST">
                                <button type="submit" class="list-group-item">La Mujer como Jefa de Hogar</button>                      </form>
                            <form role="form" action="<?= base_url()?>Blog/blog_6" method="POST">
                                <button type="submit" class="list-group-item">Microemprendedores</button>
                            </form>
                          </div>
                    </div>
                    <br>
                    <div class="col-sm-8">
                        <p style="text-align: left; margin-left: 76%; margin-top: -4%; color: blue;">29 Julio del 2017</p>
                    </div>
                    <div class="col-sm-4">
                        
                    </div>
                    </div>
                </div>
            <div class="col-xs-8">
                <p style="color: blue; font-size: 12px;">Compartir en..</p>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-597a4dbe515c6bc5"></script>

                     <div class="addthis_inline_share_toolbox"></div>
            </div>
            <div class="col-sm-4 col-xs-12">

            </div>
            <div class="col-sm-8 col-xs-12">
                <br><br>
                <p>
                   La felicidad debe ser, para la mayoría de hombres y mujeres, un logro más que un regalo de los dioses, 
                   y, en este logro, el esfuerzo, tanto interior como exterior, juega un papel preponderante.
                   En la actualidad, los psicólogos que estudian la felicidad suelen coincidir en lo siguiente: 
                   la intención de ser feliz es el primer paso de todo aquél que quiera, verdaderamente, tener una vida gratificante.
                </p>
                <p>
                   Por intención entendemos el deseo y compromiso activos de ser feliz. 
                   Es la decisión de elegir conscientemente actitudes y comportamientos que nos conduzcan a la felicidad y no a la infelicidad.
                   Elige hacer de la felicidad un objetivo supremo. Elige sacar ventaja de las oportunidades de aprender cómo ser feliz. 
                   Por ejemplo, reprograma tus creencias y valores.
                </p>
                <br><br>
            </div>
            <div class="col-sm-4 col-xs-12">
                
            </div>  
            <div class="col-sm-8 col-xs-12">
                <div id="disqus_thread">
                    </div>
                        <script>

                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://ongmomentodecambio.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
            <div class="col-xs-4">

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

