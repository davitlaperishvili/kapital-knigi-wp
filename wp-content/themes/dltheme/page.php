
<?php get_header();?>
<?php
$menu = get_field("site_menu", "option");
$main_buttons = get_field("main_buttons", "option");
$games = get_field("games", "option");
?>

<main class="home_page">
    <div class="main">
      <div class="cont">
        <div class="main-left">
          <div
            class="slots"
            id="elements"
          >
              <?php foreach ($games['games_list'] as $game) {?>
                <a
                  href="<?php echo $game['game_url'] ?>"
                  class="slot"
                >
                  <img
                    class="image__slots__main"
                    src="<?php echo $game['game_image']['url'] ?>"
                  />
                  <span> <?php echo $game['game_title'] ?> </span>
                </a>
              <?php }?>


          </div>
          <a
            href="<?php echo $games['games_button']['url'] ?>"
            class="href"
            ><div class="button"><?php echo $games['games_button']['text'] ?></div></a
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