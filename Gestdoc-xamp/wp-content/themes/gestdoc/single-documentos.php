<?php get_header() ?>

<div id="sections">
      <section class="section--header">
        <div class="section__wrap section__wrap--header-doc">
          <div class="section__body">
            <h1 class="section__title"><?php the_field('titulo')?></h1>
          </div>
        </div>
      </section>
      <section class="section--singledoc">
        <div class="section__wrap section--md">
          <div class="section__body">
            <div class="section__content section--center">
              <h3 class="section__title">En pocas palabras, ¿qué es?</h3>
              <p class="section__description">
              <p class="section__description"><?php the_field('descripcion')?></p>
            </div>
            <div class="section__boxs">
              <div class="cols">
                <div class="col-md-6">
                  <div class="section__box">
                    <h4 class="section__title">Requisitos</h4>
                    <p class="section__description"><?php the_field('requisitos')?></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="section__box">
                    <h4 class="section__title">Valor</h4>
                    <p class="section__description"><?php the_field('valor')?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="section__button"><a id="<?php the_field('id_bpmn')?>" class="btn btn--white">Empezar tramite</a></div>
          </div>
        </div>
      </section>
      <!--<section class="section--fast">
        <div class="section__wrap section--md">
          <div class="section__header">
            <h3 class="h2 section__title">Documentos relacionados</h3>
          </div>
          <div class="section__body">
            <div class="cols cols--scroll">
              <div class="col-md-3">
                <article class="article--fast">
                  <div class="article__tag">Hac habitant
                  </div>
                  <div class="article__icon"><img src="img/icons/1.svg"></div>
                  <div class="article__body">
                    <h5 class="article__title"><a href="#">Ac lacus</a></h5>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="article--fast">
                  <div class="article__tag">Rhoncus faucibus
                  </div>
                  <div class="article__icon"><img src="img/icons/2.svg"></div>
                  <div class="article__body">
                    <h5 class="article__title"><a href="#">Venenatis hac</a></h5>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="article--fast">
                  <div class="article__icon"><img src="img/icons/3.svg"></div>
                  <div class="article__body">
                    <h5 class="article__title"><a href="#">Congue dictumst</a></h5>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="article--fast">
                  <div class="article__icon"><img src="img/icons/4.svg"></div>
                  <div class="article__body">
                    <h5 class="article__title"><a href="#">Accumsan fringilla</a></h5>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="section__footer"><a href="#" class="btn btn--link">Ver todos</a></div>
        </div>
      </section> -->
</div>
<?php get_footer() ?>