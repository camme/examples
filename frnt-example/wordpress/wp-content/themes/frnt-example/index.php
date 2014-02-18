<?php

    $data = new stdclass();
    $data->post_title = "Start";
    $data->template = 'index'; // the template name to be read by frnt
    $data->posts = array();

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $post_item = new stdclass();
            $post_item->post_title = $post->post_title;
            $post_item->permalink = get_permalink($post->ID);
            array_push($data->posts, $post_item);
        }
    }

    header("content-type: application/json");
    echo json_encode($data);
