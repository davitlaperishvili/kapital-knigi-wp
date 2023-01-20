    <footer>
      <div class="cont">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/fff.png"
          alt=""
        />
      </div>
    </footer>
    <style>
      body,
      html {
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <style>
      #elements a {
        display: none;
      }

      /*additional style*/
      table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
      }
      table,
      td,
      th {
        border: 1px solid #595959;
      }
      td,
      th {
        padding: 3px;
        width: 30px;
        height: 25px;
      }
      th {
        background-color: #7accee !important;
      }
      .anchor__menu:hover {
        text-decoration: underline;
      }

      #FAQ {
        padding-left: 40px;
      }
      .faq__item {
        margin-bottom: 5px;
      }
      .faq__head {
        font-style: italic;
        display: list-item;
        list-style-image: url(<?php echo get_template_directory_uri(); ?>/images/fug.png);
      }

      .image__slots__main {
        position: absolute;
        width: 100%;
        display: flex;
        bottom: 0;
        min-height: 100%;
        height: auto;
      }
      .img-micro {
        margin: 0;
      }
    </style>

    <?php wp_footer();?>
  </body>
</html>