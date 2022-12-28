<?php /* Template Name: Home */ ?>
<?php get_header() ?>

    <div id="sections">
      <section class="section--main">
        <div class="section__primary">
          <div class="section__wrap section__wrap--main">
            <div class="section__body dscroll">
              <h1 class="section__title">Descarga, sube, crea y firma  <span class="words-alternate" data-delay="2000" data-words="contratos,facturas,poderes, pagarés, cartas" style>documentos</span> a solo un click</h1>
              <p class="section__description">Contamos con un software de ultima generacion que facilita la gestion y firma de todos tus documentos de manera electronica y avanzada</p><a href="docs.html" class="btn">Ir a ver tramites</a>
              <!--.section__search
              .section__search__results
              	input#search(type="text" placeholder="Buscar documento")
              .section__search__button
              	img(src="./img/icons/search.svg")
              -->
            </div>
            <div class="section__image dscroll"><img src="<?php echo get_template_directory_uri(); ?>/img/gif/3-1.gif"></div>
          </div>
        </div>
      </section>
      <!--section.section--usertype 
      .section__wrap.section__wrap--sm 
      	.cols 
      		.col-xs-12.col-md-6 
      			article.article--user
      				.article__body
      					.article__image
      						img(src="./img/icons/people.svg")
      					h4.article__title Personas 
      					p.article__description Realiza t
      					a.btn(href="persons.html") Ir a personas
      		.col-xs-12.col-md-6 
      			article.article--user
      				.article__body
      					.article__image
      						img(src="./img/icons/business.svg")
      					h4.article__title Empresas
      					p.article__description: +lorem(15)
      					a.btn(href="businesses.html") Ir a empresas
      
      
      -->
      <section class="section--features">
        <div class="section__wrap">
          <div class="cols">
            <div class="col-md-6">
              <div class="section__articles dscroll"> 
                <div class="section__upper">
                  <article class="article--feature article--feature--index">
                    <div class="article__body">
                      <div class="article__image"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/clipboard.gif"></div>
                      <h4 class="article__title">Personaliza tu documento mediante formularios</h4>
                      <p class="article__description">Personaliza muy facilmente la informacion contenida en tu documento completando formularios</p>
                    </div>
                  </article>
                  <article class="article--feature article--feature--index">
                    <div class="article__body"> 
                      <div class="article__image"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/edit.gif"></div>
                      <h4 class="article__title">Firma electrónica o avanzada</h4>
                      <p class="article__description">Firma e invita a firmar  tus documentos a las partes involucradas sin tener que salir de tu casa</p>
                    </div>
                  </article>
                </div>
                <div class="section__lower">
                  <article class="article--feature article--feature--index">
                    <div class="article__body">	
                      <div class="article__image"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/archive.gif"></div>
                      <h4 class="article__title">Almacena tus documentos</h4>
                      <p class="article__description">Crea tu cuenta y almacena todos tu documentos en un solo lugar de manera segura y practica</p>
                    </div>
                  </article>
                  <article class="article--feature article--feature--index">
                    <div class="article__body"> 
                      <div class="article__image"><img src="<?php echo get_template_directory_uri(); ?>/img/gif/bubble-chat.gif"></div>
                      <h4 class="article__title">Obten aseroria de expertos</h4>
                      <p class="article__description">Si tienes dudas cuentas con la asesoria de abogados en tiempo real</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="section__body dscroll"> 
                <h5 class="section__uppertitle">Dile adios a las notarias.</h5>
                <h2 class="section__title">Gestiona tus documentos facilmente.</h2>
                <p class="section__content">Gestdoc te permite obtener documentos tales como contratos, certificado y tramites legales en general. Pudiendo descargarlos, almacenarlos en tu cuenta y firmalos de manera remota sin tener que salir de tu casa. Solo selecciona tu tramite, rellena los formularios solicitados y obten tu documento, pudiendo firmalo tu y la cantidad de personas que estimes de manera simple o avanzada.</p><a href="persons.html" class="btn">Ver mas<span class="fa fa-external-link"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section--partners">
        <div class="section__wrap"> 
          <article class="article--partners">
            <div class="article__image"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/ecert.png"></div>
            <div class="article__image">		<img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-upayments.svg"></div>
            <div class="article__image"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-alc-logo.png"></div>
            <div class="article__image article__image--resit"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-resit-white.png"></div>
            <div class="article__image"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/digevo-logo.png"></div>
          </article>
        </div>
      </section>
      <section class="section--faq">
      <div class="section__wrap">
            <div class="section__header">
                <h2 class="section__title">Como es el proceso de <span>firma</span></h2>
                <p class="section__description">Vestibulum ultrices felis laoreet pretium lobortis arcu aenean nullam litora. Purus lobortis congue tristique tempor sem risus aliquam elit arcu sagittis interdum duis nisl imperdiet porttitor est etiam blandit ullamcorper.</p>
            </div>
            <div class="section__body">
                <div class="cols">
                    <div class="col-md-6 dscroll">
                        <div class="section__faq">
                            <div class="faq">
                                <?php
                    $cajas_tutorial = get_field('caja_tutorial');
                    if ($cajas_tutorial) {
                        foreach ($cajas_tutorial as $caja) {
                    ?>
                                <div class="faq__item">
                                    <h3 class="faq__question"><span class="fa fa-angle-down"></span><?php echo $caja['titulo_paso']; ?></h3>
                                    <div class="faq__answer">
                                        <div class="section__content">
                                            <p class="section__description"><?php echo $caja['descripcion_paso']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 dscroll">
                        <div class="section__gifs">
                            <?php
                                $i = 0; // Inicializar el contador
                                $cajas_tutorial = get_field('caja_tutorial');
                                if ($cajas_tutorial) { 
                                  foreach ($cajas_tutorial as $caja) {
                            ?>
                            <div class="section__gif <?php if($i == 0){ echo "section__gif--show";}?>">
                              <img src="<?php echo $caja['video_paso']; ?>">
                            </div>

                            <?php
                              $i++; 
                                      }
                                 }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="section--features section--features--2">
        <div class="section__wrap"> 
          <div class="cols">	
            <div class="col-md-6 dscroll">
              <div class="section__body"> 
                <h5 class="section__uppertitle">Muchos tramites pocos clicks.</h5>
                <h2 class="section__title">El software de firmas que tu <span>empresa</span> necesita.</h2>
                <p class="section__content">Obten para tu empresa el software de Gestdoc y crea todos los flujos para tus documentos que necesites de manera completamente personalizada. Tenemos diversos planes que se ajustan a tus necesidades basados en la cantidad de procesos y firmas mensuales.</p><a href="/businesses.html" class="btn">Ir a Gestdoc empresas</a>
              </div>
            </div>
            <div class="col-md-6 dscroll">
              <div class="section__image"> <img src="<?php echo get_template_directory_uri(); ?>/img/icons/Contract.svg"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section--faq section--faq--index">
        <div class="section__wrap"> 
          <div class="cols">
            <div class="col-md-6"> 
              <div class="section__image"> <img src="<?php echo get_template_directory_uri(); ?>/img/icons/FAQs.svg"></div>
            </div>
            <div class="col-md-6">
              <div class="section__faq"> 
                <div class="section__header"> 
                  <h2 class="section__title">Preguntas frecuentes </h2>
                </div>
                <div class="section__body">
                  <div class="faq">
                    <div class="faq__item">
                      <h3 class="faq__question"><span class="fa fa-angle-down"></span>Lorem ipsum dolor sit</h3>
                      <div class="faq__answer">
                        <div class="section__content">
                          <p class="section__description">Ut dui at at nam porta consequat malesuada a facilisis. Condimentum gravida phasellus ut velit aenean sociosqu nisl scelerisque scelerisque colus fringilla vulputate lobortis nibh.
                          </p>
                          <p class="section__description">Placerat etiam fusce pulvinar ultricies molestie risus aenean eu cursus. Ultrices aenean ligula sociosqu tristique nisl euismod donec sem fusce egestas diam dapibus aenean eleifend.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="faq__item">
                      <h3 class="faq__question"><span class="fa fa-angle-down"></span>Dicta beatae libero illo</h3>
                      <div class="faq__answer">
                        <div class="section__content">
                          <p class="section__description">Nunc curabitur elit ut tortor morbi adipiscing lacinia per pellentesque. Etiam pulvinar mauris elit sociosqu leo phasellus consequat mauris pellentesque in eleifend eget enim aliquam.
                          </p>
                          <p class="section__description">Gravida inceptos est habitant pellentesque nibh aenean proin hac tempus. Consequat netus vestibulum phasellus lectus nam quisque morbi litora urna nec elementum pharetra morbi egestas.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="faq__item">
                      <h3 class="faq__question"><span class="fa fa-angle-down"></span>Similique omnis dolore accusamus labore dolor porro</h3>
                      <div class="faq__answer">
                        <div class="section__content">
                          <p class="section__description">Luctus lectus torquent eget curabitur class duis dui condimentum potenti. Aliquam ante vestibulum enim felis nisi ullamcorper praesent cras magna tempor viverra viverra primis rhoncus.
                          </p>
                          <p class="section__description">Inceptos inceptos torquent eleifend ac tortor primis litora vivamus placerat. Quisque blandit cursus congue nec ligula adipiscing massa sodales himenaeos lectus orci felis nam libero.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section--contactus"> 
        <div class="section__wrap"> 
          <div class="section__body">	
            <h5 class="section__toptitle">NO ESPERES MAS</h5>
            <h3 class="section__title">Te gustaria conocer todos los beneficios que Gestdoc puede traerle a tu negocio?</h3>
            <p class="section__description">Pharetra eu lacus eros nibh dapibus etiam lectus eget vehicula auctor ad nec dapibus risus pulvinar felis tincidunt sodales hac.
            </p><a href="#" class="btn">Hablar con un experto Gestdoc </a>
          </div>
        </div>
      </section>
      <div class="login">
        <div class="login__back"></div>
        <div class="login__front login__front--login">
          <div class="login__box">
            <div class="login__icon"><img src="img/icons/logo-gestdoc.png"></div>
            <div class="login__form">
              <form class="form">
                <div class="form__element">
                  <div class="form__input">
                    <input type="email" placeholder="Mail">
                  </div>
                </div>
                <div class="form__element">
                  <div class="form__input">
                    <input type="password" placeholder="Clave">
                    <button class="btn">Entrar</button>
                  </div>
                </div>
                <div class="form__element form__element--center">
                  <label>
                    <input type="checkbox" name="#" value="#">Mantener mi sesión
                  </label>
                </div>
              </form>
            </div>
            <div class="login__footer"><a href="#" class="btn btn--link">Olvide mi contraseña</a><a href="#" class="btn btn--link">Registrarme</a></div>
            <p class="login__description">Interdum praesent fusce vehicula euismod sapien sollicitudin elit ad ultricies. Nunc ante semper sociosqu quisque ornare gravida est posuere sem tincidunt donec in placerat est.
            </p>
          </div>
        </div>
        <div class="login__front login__front--register">
          <div class="login__box">
            <div class="login__icon"><img src="img/icons/logo-gestdoc.png"></div>
            <div class="login__form">
              <form class="form">
                <div class="form__element">
                  <div class="form__input">
                    <input type="email" placeholder="Mail">
                  </div>
                </div>
                <div class="form__element">
                  <div class="form__input">
                    <input type="password" placeholder="Clave">
                    <button class="btn">Registrar</button>
                  </div>
                </div>
                <div class="form__element form__element--center">
                  <label>
                    <input type="checkbox" name="#" value="#">Acepto los términos y condiciones
                  </label>
                </div>
              </form>
            </div>
            <div class="login__footer"><a href="#" class="btn btn--link">Olvide mi contraseña</a><a href="#" class="btn btn--link">Ingresar</a></div>
            <p class="login__description">Accumsan eleifend sapien arcu lobortis convallis congue mollis orci interdum. Dictumst pellentesque urna metus eget imperdiet vulputate auctor fusce libero litora commodo aliquet taciti adipiscing.
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php get_footer() ?>