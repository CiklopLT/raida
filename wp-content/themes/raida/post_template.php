<?php
/*
WP Post Template: Raida šablonas
*/

get_header();

include('custom_functions.php');
$content_post = get_post(get_the_ID());
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$content = $content_post->post_content;

$title = $content_post->post_title;

?>

<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle dropdown-toggle" data-toggle="dropdown">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="<?php echo home_url(); ?>/#about-block"><?php echo __( 'About us', 'raida' );?></a></li>
                <li><a href="<?php echo home_url(); ?>/#activity-block"><?php echo __( 'Activity', 'raida' );?></a></li>
                <li><a href="<?php echo home_url(); ?>/#products-block"><?php echo __( 'Products', 'raida' );?></a></li>
                <?php if (count($testimonials) > 0) : ?>
                    <li><a href="<?php echo home_url(); ?>/#feedback-block"><?php echo __( 'Feedbacks', 'raida' );?></a></li>
                <?php endif; ?>
                <?php if (count($news) > 0) : ?>
                    <li><a href="<?php echo home_url(); ?>/#news-block"><?php echo __( 'News', 'raida' );?></a></li>
                <?php endif; ?>
                <li><a href="<?php echo home_url(); ?>/#contacts-block"><?php echo __( 'Contacts', 'raida' );?></a></li>
            </ul>
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
            </a>
            <ul class="nav navbar-nav navbar-right">
                <button type="button" class="dropdown-toggle navbar-toggle lang-switcher" style="margin-top: 15px;" data-toggle="dropdown"><?php echo $_GET["lang"]; ?> <i class="fa fa-chevron-down"></i></button>
                <ul class="dropdown-menu lang-menu">
                    <li><a href="?lang=lt">LT</a></li>
                    <li><a href="?lang=en">EN</a></li>
                    <li><a href="?lang=ru">RU</a></li>
                </ul>
            </ul>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo home_url(); ?>/#about-block"><?php echo __( 'About us', 'raida' );?></a></li>
                <li><a href="<?php echo home_url(); ?>/#activity-block"><?php echo __( 'Activity', 'raida' );?></a></li>
                <li><a href="<?php echo home_url(); ?>/#products-block"><?php echo __( 'Products', 'raida' );?></a></li>
                <?php if (count($testimonials) > 0) : ?>
                    <li><a href="<?php echo home_url(); ?>/#feedback-block"><?php echo __( 'Feedbacks', 'raida' );?></a></li>
                <?php endif; ?>
                <?php if (count($news) > 0) : ?>
                    <li><a href="<?php echo home_url(); ?>/#news-block"><?php echo __( 'News', 'raida' );?></a></li>
                <?php endif; ?>
                <li><a href="<?php echo home_url(); ?>/#contacts-block"><?php echo __( 'Contacts', 'raida' );?></a></li>
                <li class="dropdown">
                    <button type="button" class="dropdown-toggle lang-switcher" data-toggle="dropdown"><?php echo substr($_GET["lang"], 0, 2); ?> <i class="fa fa-chevron-down"></i></button>
                    <ul class="dropdown-menu lang-menu">
                        <li><a href="?lang=lt">LT</a></li>
                        <li><a href="?lang=en">EN</a></li>
                        <li><a href="?lang=ru">RU</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="template-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/template-banner.fw.png')">
    <div class="container">
        <div class="center-block text-center col-md-10 template-logo margin-bottom">
            <h4><?php echo $title;?></h4>
            <?php
                if($_GET['type'] == 'products') {
                    $back_link = get_more_products_by_locale(get_locale());
                }elseif($_GET['type'] == 'news'){
                    $back_link = get_more_news_by_locale(get_locale());
                }else{
                    $back_link = '';
                }
             ?>
            <p><a href="<?php echo $back_link; ?>" class="back-to-news"><i class="fa fa-chevron-left"></i> <?php echo __( 'Back', 'raida' );?></a></p>

        </div>
        <div class="col-md-12 template-content">
            <?php echo $content; ?>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<?php get_footer(); ?>