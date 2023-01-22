<!DOCTYPE html>
<html lang="en">
<head>
  <?php $favicon = get_field("site_favicon", "option");?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo $favicon['url'] ?>">
	<!-- <script src="https://kit.fontawesome.com/990ba33bd4.js" crossorigin="anonymous"></script> -->

	<?php wp_head();?>
</head>
<body <?php body_class();?> >
<?php
$logo = get_field("site_logo", "option");
$menu = get_field("site_menu", "option");
$main_buttons = get_field("main_buttons", "option");
$page_title = get_field("page_title");
?>
	<header>
      <div class="cont">
        <img
          class="logo"
          id="s1"
          src="<?php echo $logo['url'] ?>"
          alt=""
        />
        <img
          class="mob open"
          src="<?php echo get_template_directory_uri(); ?>/images/burg.png"
          alt=""
        />
        <img
          class="mob close"
          src="<?php echo get_template_directory_uri(); ?>/images/burg1.png"
          alt=""
        />
        <div class="main-right-div">
          <div class="main-right-div1">Навигация</div>
          <div class="main-right-div2">
            <?php foreach ($menu as $item) {?>
                  <a href="<?php echo $item['menu_url'] ?>"> <span><?php echo $item['menu_text'] ?></span></a>
                <?php }?>
          </div>
        </div>
        <div class="main-but mob">
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
        <div>
          <h1><?php echo $page_title ?></h1>
        </div>
      </div>
    </header>
