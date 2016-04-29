<?php
/*
Template Name: Default Template
*/


get_header();

include('custom_functions.php');
$content_post = get_post(get_the_ID());
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$content = $content_post->post_content;

$title = $content_post->post_title;

if (in_array(get_the_ID(), [123, 118, 127])) {
    $template_title = __( 'About us', 'raida' );
}

if (in_array(get_the_ID(), [131, 129, 133])) {
    $template_title = __( 'Products', 'raida' );
}

if (in_array(get_the_ID(), [135, 138, 140])) {
    $template_title = __( 'News', 'raida' );
}

function correct_redirect($locale){
    if (in_array(get_the_ID(), [123, 118, 127])) {
        $redirect = get_more_banner_by_locale($locale);
    }
    if (in_array(get_the_ID(), [131, 129, 133])) {
        $redirect = get_more_products_by_locale($locale);
    }
    if (in_array(get_the_ID(), [135, 138, 140])) {
        $redirect = get_more_news_by_locale($locale);
    }
    return $redirect;
};

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
                    <button type="button" class="dropdown-toggle lang-switcher" data-toggle="dropdown"><?php echo $_GET["lang"]; ?> <i class="fa fa-chevron-down"></i></button>
                    <ul class="dropdown-menu lang-menu">
                        <li><a href="<?php echo correct_redirect("lt_LT"); ?>">LT</a></li>
                        <li><a href="<?php echo correct_redirect("en_GB"); ?>">EN</a></li>
                        <li><a href="<?php echo correct_redirect("ru_RU"); ?>">RU</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="template-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/template-banner.fw.png')">
    <div class="container">
        <div class="col-md-12 col-sm-12 template-logo">
            <div class="center-block text-center col-md-6" style="margin-bottom: 30px;">
                <?php if (in_array(get_the_ID(), [135, 138, 140])) : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/news-logo.fw.png">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/template-logo.fw.png">
                <?php endif; ?>
                <?php echo $template_title; ?>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 template-content">
            <?php if(in_array(get_the_ID(), [135, 138, 140])) : ?>
                <?php $rowCount = 0;?>
                <div class="row">
                    <?php foreach($news as $new) : ?>
                        <div class="col-md-6 col-sm-6 news-block text-left" style="margin-bottom: 20px;">
                            <h5><a href="<?php echo($new->guid . '&type=news'); ?>" class="font-blue semi-bold"><?php echo $new->post_title; ?></a></h5>
                            <p><?php echo explode(" ", $new->post_date)[0]; ?></p>
                            <p><?php echo apply_filters('the_excerpt',$new->post_excerpt); ?></p>
                            <a href="<?php echo($new->guid . '&type=news'); ?>" class="news-more-link"><?php echo __( 'Read', 'raida' );?></a>
                        </div>
                        <?php if ($rowCount++ % 2 == 1 ) echo '</div><div class="row">'; ?>
                    <?php endforeach; ?>
                </div>
            <?php elseif(in_array(get_the_ID(), [131, 129, 133])) : ?>
                <?php foreach($products as $product) : ?>
                    <div class="col-md-12 col-sm-12 news-block text-left" style="border-bottom: 1px solid #eee;padding-bottom: 30px;margin-bottom: 30px;">
                        <h5 class="semi-bold"><?php echo $product->post_title; ?></h5>
                        <p><?php echo apply_filters('the_excerpt',$product->post_excerpt); ?></p>
                        <a href="<?php echo($product->guid . '&type=products'); ?>" class="news-more-link" style="float: right;margin-right: 10px;"><?php echo __( 'Read', 'raida' );?></a>
                    </div>
                    <hr />
                <?php endforeach; ?>
            <?php else : ?>
                <?php echo $content; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<?php get_footer(); ?>