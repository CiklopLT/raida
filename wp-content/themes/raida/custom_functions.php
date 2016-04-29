<?php

/*BANNER*/
global $nggdb;
$banner_images = $nggdb->get_gallery(1, 'sortorder', 'ASC', true, 0, 0);

function get_content($page_title){
    return  apply_filters('the_content', get_post(get_page_id_by_lang($page_title))->post_content);
}

function get_page_id_by_lang($page_title) {
    switch (get_locale()) {
        case 'lt_LT':
            $locale_id = 0;
            break;
        case 'en_GB':
            $locale_id = 1;
            break;
        case 'ru_RU':
            $locale_id = 2;
            break;
    }
    $page_id_list = array(
        "banner" => [42, 47, 50],
        "about_us_1" => [53, 55, 57],
        "about_us_2" => [59, 62, 64],
        "activity_1" => [66, 68, 70],
        "activity_2" => [72, 74, 76],
        "products_1" => [78, 80, 82],
        "products_2" => [84, 86, 88]

    );
    return $page_id_list[$page_title][$locale_id];
}

$args = array(
    'order'            => 'DESC',
    'post_status'      => 'publish',
    'category'          => 3,
    'numberposts'       => -1
);
$posts = get_posts($args);
$testimonials = get_testimonials_by_name($posts);
$news = get_news_by_name($posts);
$products = get_products_by_name($posts);

function get_testimonials_by_name($posts)
{
    switch (get_locale()) {
        case 'lt_LT':
            $category_id = 29;
            break;
        case 'en_GB':
            $category_id = 25;
            break;
        case 'ru_RU':
            $category_id = 31;
            break;
    }
    $testimonials = [];
    foreach ($posts as $post) {
        if ($category_id == wp_get_post_categories($post->ID)[0]){
            array_push($testimonials, $post);
        }
    }
    return $testimonials;
}

function get_news_by_name($posts)
{
    switch (get_locale()) {
        case 'lt_LT':
            $category_id = 44;
            break;
        case 'en_GB':
            $category_id = 35;
            break;
        case 'ru_RU':
            $category_id = 46;
            break;
    }
    $news = [];
    foreach ($posts as $post) {
        if ($category_id == wp_get_post_categories($post->ID)[0]){
            array_push($news, $post);
        }
    }
    return $news;
}

function get_products_by_name($posts)
{
    switch (get_locale()) {
        case 'lt_LT':
            $category_id = 50;
            break;
        case 'en_GB':
            $category_id = 52;
            break;
        case 'ru_RU':
            $category_id = 54;
            break;
    }
    $products = [];
    foreach ($posts as $post) {
        if ($category_id == wp_get_post_categories($post->ID)[0]){
            array_push($products, $post);
        }
    }
    return $products;
}

function get_more_banner_by_locale($locale){
    switch ($locale) {
        case 'lt_LT':
            $more_banner = "?page_id=123";
            break;
        case 'en_GB':
            $more_banner = "?page_id=118";
            break;
        case 'ru_RU':
            $more_banner = "?page_id=127";
            break;
    }
    return $more_banner;
}

function get_more_products_by_locale($locale){
    switch ($locale) {
        case 'lt_LT':
            $more_products = "?page_id=131";
            break;
        case 'en_GB':
            $more_products = "?page_id=129";
            break;
        case 'ru_RU':
            $more_products = "?page_id=133";
            break;
    }
    return $more_products;
}

function get_more_news_by_locale($locale){
    switch ($locale) {
        case 'lt_LT':
            $more_products = "?page_id=138";
            break;
        case 'en_GB':
            $more_products = "?page_id=135";
            break;
        case 'ru_RU':
            $more_products = "?page_id=140";
            break;
    }
    return $more_products;
}

switch (get_locale()) {
    case 'lt_LT':
        $contacts_id = 110;
        break;
    case 'en_GB':
        $contacts_id = 112;
        break;
    case 'ru_RU':
        $contacts_id = 114;
        break;
}

