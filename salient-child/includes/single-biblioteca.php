<section class="livro">

  <img class="cover-column" src="<?= get_field(cover) ?>)" />

  <div class="text-column">
    <h3 class="big mb-30">isbn | <?php the_field(isbn); ?></h3>
    <h1 class="big mb-20"><?php the_title() ?></h1>
    <div class="medium mb-20">Por <?php the_field(book_author); ?></div>
    <?php if(get_field(subject)): ?>
      <div class="small colored-bg mb-10">Assuntos: <?php the_field(subject); ?></div>
    <?php endif; ?>
    <div class="small-plus mb-20">publicado por <?php the_field(publisher); ?></div>
    <div class="livro-dados mb-20">
      <span class="normal mb-10"><?php the_field(country); ?></span>
      <span class="normal mb-10"><?php the_field(pages); ?> páginas</span>
      <span class="normal mb-10">publicado em <?php the_field(published_year); ?></span>
    </div>
    <p class="small mb-10"><?php the_field(book_description); ?></p>
    <p class="small mb-10"><?php the_field(notes); ?></p>
    <?php if(get_field(book_store)): ?>
      <a class="livro-link" href="<?php the_field(book_store); ?>">Link para o livro</a>
    <?php endif; ?>
  </div>



</section>