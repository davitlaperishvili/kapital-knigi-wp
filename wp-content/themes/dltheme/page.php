
<?php get_header();?>
<?php
$menu = get_field("site_menu", "option");
$main_buttons = get_field("main_buttons", "option");
?>

<main class="home_page">
    <div class="main">
      <div class="cont">
        <div class="main-left">
          <div
            class="slots"
            id="elements"
          >
            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/7.png"
              />
              <span> PIN-UP Fruits </span>
            </a>
            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/8.jpg"
              />
              <span> Millionaire </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/4.jpg"
              />
              <span> Space Wars </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/6.png"
              />
              <span> Ecuador Gold </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/3.jpg"
              />
              <span> 243 Crystal Fruits </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/5.jpg"
              />
              <span> Bonanza </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/1.png"
              />
              <span> Allways Hot Fruits </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/2.png"
              />
              <span> Big Panda </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/15.png"
              />
              <span>Artemis Medusa </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/16.png"
              />
              <span> Mustang Gold </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/17.png"
              />
              <span> Pirates Map </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/18.png"
              />
              <span> Fu Fortunes </span>
            </a>

            <a
              href="#"
              class="slot"
            >
              <img
                class="image__slots__main"
                src="<?php echo get_template_directory_uri(); ?>/images/19.png"
              />
              <span> Tractor Bean </span>
            </a>
          </div>
          <a
            href="#"
            class="href"
            ><div class="button">Перейти на сайт</div></a
          >
          <div class="promo"></div>
          <div class="page_content_text"><?php the_content()?></div>
        </div>
        <div class="main-right">
          <div class="main-right-div0">
            <div class="main-but">
            <a
              href="<?php echo $main_buttons['first_button_url'] ?>"
              class="href"
              ><?php echo $main_buttons['first_button_text'] ?></a
            >
            <a
              href="<?php echo $main_buttons['second_button_url'] ?>"
              class="href"
              ><?php echo $main_buttons['second_button_text'] ?></a
            >
            </div>
            <div class="main-right-div">
              <div class="main-right-div1">Навигация</div>
              <div class="main-right-div2">
                <?php foreach ($menu as $item) {?>
                    <a href="<?php echo $item['menu_url'] ?>"> <div><?php echo $item['menu_text'] ?></div></a>
                  <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

<?php get_footer();?>