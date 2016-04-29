<?php get_header(); ?>

<?php include('custom_functions.php'); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle dropdown-toggle" data-toggle="dropdown">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a data-page="about"><?php echo __( 'About us', 'raida' );?></a></li>
                    <li><a data-page="activity"><?php echo __( 'Activity', 'raida' );?></a></li>
                    <li><a data-page="products"><?php echo __( 'Products', 'raida' );?></a></li>
                    <?php if (count($testimonials) > 0) : ?>
                        <li><a data-page="feedback"><?php echo __( 'Feedbacks', 'raida' );?></a></li>
                    <?php endif; ?>
                    <?php if (count($news) > 0) : ?>
                        <li><a data-page="news"><?php echo __( 'News', 'raida' );?></a></li>
                    <?php endif; ?>
                    <li><a data-page="contacts"><?php echo __( 'Contacts', 'raida' );?></a></li>
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
                    <li><a data-page="about"><?php echo __( 'About us', 'raida' );?></a></li>
                    <li><a data-page="activity"><?php echo __( 'Activity', 'raida' );?></a></li>
                    <li><a data-page="products"><?php echo __( 'Products', 'raida' );?></a></li>
                    <?php if (count($testimonials) > 0) : ?>
                        <li><a data-page="feedback"><?php echo __( 'Feedbacks', 'raida' );?></a></li>
                    <?php endif; ?>
                    <?php if (count($news) > 0) : ?>
                        <li><a data-page="news"><?php echo __( 'News', 'raida' );?></a></li>
                    <?php endif; ?>
                    <li><a data-page="contacts"><?php echo __( 'Contacts', 'raida' );?></a></li>
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

	<!-- BANNER -->
	<div class="banner">
        <div id="banner-carousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php foreach ($banner_images as $key=>$image): ?>
                    <?php $class = $key == 0 ? 'active' : '' ?>
                    <div class="item <?php echo $class; ?>" style="background-color: #3c6387;">
                        <img src="<?php echo $image->imageURL; ?>" height="620px" style="margin: 0 auto;">
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="center-block text-center col-md-8 main-banner-title">
                <h3><?php echo get_content('banner'); ?></h3>
                <a href="<?php echo get_more_banner_by_locale(get_locale()); ?>">
                    <div class="btn btn-purple btn-small btn-main"><?php echo __( 'Read more', 'raida' );?></div>
                </a>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#banner-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#banner-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

		<div class="container" id="about-block">

            <div class="body-heading center-block text-center col-md-12" style="margin-bottom: 20px;">
                <p class="section-title"><?php echo __( 'About us', 'raida' );?></p>
            </div>
            <hr/>
            <div class="center-block text-center col-md-12 content-div">
                <h4>
                    <?php echo get_content('about_us_1'); ?>
                </h4>
            </div>
            <div class="center-block text-center col-md-12 content-div">
                <img src="<?php echo get_template_directory_uri(); ?>/img/separator_img.png" />
            </div>
            <div class="center-block col-md-6 content-div">
                <h6>
                    <?php echo get_content('about_us_2'); ?>
                </h6>
            </div>
        </div>
    </div>

    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/body_img.png')" class="font-white cover" id="activity-block">
        <div class="container">
            <div class="row">
                <div class="body-heading center-block text-center visible-xs col-xs-4" style="margin-bottom: 0px">
                    <p class="section-title"><?php echo __( 'Activity and experience', 'raida' );?></p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 activity-content-div">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/head.png" class="img-activity-content img-responsive" />
                </div>
                <div class="col-md-8">
                    <div class="body-heading col-md-12 hidden-xs" style="margin-bottom: 20px;">
                        <p class="section-title"><?php echo __( 'Activity and experience', 'raida' );?></p>
                    </div>
                    <div class="col-md-12">
                        <h4>
                            <?php echo get_content('activity_1'); ?>
                        </h4>
                    </div>
                    <div class="body-heading col-md-8" style="margin-top: 20px;">
                        <h6>
                            <p>
                                <?php echo get_content('activity_2'); ?>
                            </p>
                            <p class="member-paragraph">
                                <span><?php echo __( 'Member of', 'raida' );?>:</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/panbaltic.png" />
                            </p>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="body-heading col-md-12 center-block text-center">
                <h6 class="activity-paragraph"><?php echo __( 'Major activity trends', 'raida' );?>:</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-container">
                            <div class="icon-bubble icon-blue center-block">
                                <div class="it-consulting-icon icon-div"></div>
                            </div>
                            <div>
                                <p><?php echo __( 'IT consulting', 'raida' );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-container">
                            <div class="icon-bubble icon-blue center-block">
                                <div class="it-design-icon icon-div"></div>
                            </div>
                            <div>
                                <p><?php echo __( 'IT design', 'raida' );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-container">
                            <div class="icon-bubble icon-blue center-block">
                                <div class="it-development-icon icon-div"></div>
                            </div>
                            <div>
                                <p><?php echo __( 'IT development', 'raida' );?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-container">
                            <div class="icon-bubble icon-blue center-block">
                                <div class="it-implementation-icon icon-div"></div>
                            </div>
                            <div>
                                <p><?php echo __( 'IT implementation', 'raida' );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-container">
                            <div class="icon-bubble icon-blue center-block">
                                <div class="it-advising-icon icon-div"></div>
                            </div>
                            <div>
                                <p><?php echo __( 'IT advising', 'raida' );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-container">
                            <div class="icon-bubble icon-blue center-block">
                                <div class="it-auditing-icon icon-div"></div>
                            </div>
                            <div>
                                <p><?php echo __( 'Testing and auditing', 'raida' );?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="products-block">
        <div class="body-heading center-block text-center col-md-12">
            <p class="section-title"><?php echo __( 'Products', 'raida' );?></p>
        </div>
        <hr/>
        <div class="row">
            <div class="center-block margin-top-20 icon-with-arrows-container">
                <div class="icon-bubble icon-gray">
                    <div class="it-products1-icon icon-div"></div>
                </div>
                <div class="arrow-block">
                    <div class="it-arrow-icon"></div>
                </div>
                <div class="icon-bubble icon-gray">
                    <div class="it-products2-icon icon-div"></div>
                </div>
                <div class="arrow-block">
                    <div class="it-arrow-icon"></div>
                </div>
                <div class="icon-bubble icon-gray">
                    <div class="it-products3-icon icon-div"></div>
                </div>
            </div>
        </div>
        <div class="row content-div">
            <div class="center-block text-center col-md-8">
                <h4><?php echo get_content('products_1'); ?></h4>
            </div>
        </div>
        <div class="center-block text-center col-md-6 content-div" style="margin-bottom: 30px;">
            <h6>
                <?php echo get_content('products_2'); ?>
            </h6>
        </div>
        <div class="center-block text-center col-md-6 col-sm-6 margin-bottom">
            <a href="<?php echo get_more_products_by_locale(get_locale());?>">
                <div class="btn btn-purple btn-small btn-main font-white"><?php echo __( 'Read more', 'raida' );?></div>
            </a>
        </div>
    </div>

    <?php if (count($testimonials) > 0) : ?>
        <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/feedback.png')" class="font-white cover" id="feedback-block">
            <div class="container">
                <div>
                    <div class="body-heading center-block text-center col-md-12" style="margin-bottom: 0px;">
                        <p class="section-title"><?php echo __( 'Customers testimonials', 'raida' );?></p>
                    </div>
                    <div class="row margin-bottom">
                        <?php foreach($testimonials as $testimonial) : ?>
                            <div class="col-md-6 col-sm-6">
                                <div class="feedback-container">
                                    <div class="feedback-img">
                                        <?php echo get_the_post_thumbnail( $testimonial->ID, [80, 80] ); ?>
                                    </div>
                                    <div class="feedback-block">
                                        <h6><?php echo $testimonial->post_content; ?></h6>
                                        <h6><b>- <?php echo $testimonial->post_title; ?></b></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if (count($news) > 0) : ?>
        <div class="container" id="news-block">
            <div class="body-heading center-block text-center col-md-12">
                <p class="section-title"><?php echo __( 'News', 'raida' );?></p>
            </div>
            <hr/>
            <div class="row">
                <div class="center-block margin-bottom font-gray col-md-10" style="margin-bottom: 0px;">
                    <?php $rowCount = 0;?>
                    <div class="row">
                        <?php foreach($news as $new) : ?>
                            <div class="col-md-6 col-sm-6 news-block" style="margin-bottom: 20px;">
                                <h5><a href="<?php echo($new->guid . '&type=news'); ?>" class="font-blue semi-bold"><?php echo $new->post_title; ?></a></h5>
                                <p><?php echo explode(" ", $new->post_date)[0]; ?></p>
                                <p><?php echo apply_filters('the_excerpt',$new->post_excerpt); ?></p>
                                <a href="<?php echo($new->guid . '&type=news'); ?>" class="news-more-link"><?php echo __( 'Read', 'raida' );?></a>
                            </div>
                            <?php if ($rowCount++ % 2 == 1 ) echo '</div><div class="row">'; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="center-block text-center col-md-6 col-sm-6 margin-bottom">
                    <a href="<?php echo get_more_news_by_locale(get_locale()); ?>">
                        <div class="btn btn-purple btn-small btn-main font-white"><?php echo __( 'More news', 'raida' );?></div>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div id="map" style="height: 320px"></div>

    <div class="container" id="contacts-block">
        <div class="body-heading center-block text-center col-md-12">
            <p class="section-title"><?php echo __( 'Contacts', 'raida' );?></p>
        </div>
        <hr/>
        <div class="center-block text-center col-md-12 content-div">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contacts_img.fw.png" />
        </div>
        <div class="center-block margin-bottom font-gray col-md-10">
            <div class="col-md-6 col-sm-6">
                <h5 class="font-black"><b><?php echo get_post_custom($contacts_id)['Company name'][0]; ?></b></h5>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="footer-logo">
                <p style="color: #337ab7;"><b><?php echo get_post_custom($contacts_id)['Email'][0]; ?></b></p>
                <table style="font-size: 15px;">
                    <tr>
                        <td><?php echo __( 'Address', 'raida' );?>:</td>
                        <td><?php echo get_post_custom($contacts_id)['Address'][0]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __( 'Phone', 'raida' );?>:</td>
                        <td><?php echo get_post_custom($contacts_id)['Phone'][0]; ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><?php echo __( 'Company code', 'raida' );?>:</td>
                        <td><?php echo get_post_custom($contacts_id)['Company code'][0]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo __( 'VAT code', 'raida' );?>:</td>
                        <td><?php echo get_post_custom($contacts_id)['VAT code'][0]; ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6 col-sm-6 contact-us-block">
                <h5><?php echo __( 'Contact us', 'raida' );?></h5>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control contacts-input" placeholder="<?php echo __( 'Name', 'raida' );?>" id="contact_name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control contacts-input" placeholder="<?php echo __( 'Email', 'raida' );?>" id="contact_email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control contacts-input" rows="6" placeholder="<?php echo __( 'Message text', 'raida' );?>" id="contact_text"></textarea>
                        <button type="button" id="email-btn" class="btn btn-purple btn-wide btn-main margin-bottom"><?php echo __( 'Send message', 'raida' );?></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

<?php get_footer(); ?>