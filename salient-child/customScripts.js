(function ($) {
  $(document).ready(function () {

    // BIBLIOTECA DIGITAL - SETUP DE CATEGORIAS DO SEARCH
    $('.search-cat-btn').click(function () {
      $(this).toggleClass('active');
      fillCatIds();
    });

    function fillCatIds() {
      let catIds = [];
      $('.search-cat-btn.active').each(function () {
        const catId = $(this).data('catid');
        catIds.push(catId);
      });

      if (catIds.length === 0) {
        catIds = [1491, 9, 22, 1351, 20, 1493];
      }

      $('#search-by-cat').val(catIds.concat());
    };

    $('.livros-em-destaque .recent-post-container a.nectar-button span').each(function () {
      $(this).html('Leia Mais');
    });

    // BACK BUTTON DA HOME
    $('.menu-back-button a').attr('href', 'javascript:history.back()');

    // MENU DA HOME
    $('.megamenu.append-title').each(function () {
      const anchorText = $(this).children(['a']).html();
      $(this).find('ul').prepend('<li class="megamenu-submenu-title">' + anchorText + '</li>');
    });



  });
})(jQuery);