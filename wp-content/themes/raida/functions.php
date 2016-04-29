<?php
    show_admin_bar(false);

    load_theme_textdomain( 'raida', get_template_directory().'/languages' );

    add_theme_support( 'post-thumbnails' );

    wp_enqueue_script ( 'my_ajax', get_template_directory_uri() . '/js/ajax.js','jquery','1.0.0' );
    wp_localize_script( 'my_ajax', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

    function send_email() {
        $message = "Žinutė iš " . $_POST['name'] . "(" . $_POST['email'] . ")";
        $message = $message . "<br/>";
        $message = $message . $_POST['text'];
        wp_mail ( 'juska.karolis@gmail.com', 'Užklausa iš iraida.lt (' . $_POST['name'] . ')', $message );
        echo __( 'Message successfully sent', 'raida' );
        exit;
    }

    add_action( 'wp_ajax_send_email', 'send_email' );
    add_action( 'wp_ajax_nopriv_send_email', 'send_email' );


