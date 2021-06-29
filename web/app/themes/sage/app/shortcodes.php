<?php

namespace App;

use WP_Query;

add_action(
    'init', 
    function () {
        add_shortcode('archive_block', function ($atts = []) {
            $atts = array_change_key_case((array) $atts, CASE_LOWER);
            $atts = shortcode_atts(
                [
                    'post_type' => 'post',
                    'category' => '',
                ],
                $atts,
            );

            $args = [
                'posts_per_page' => -1,
                'post_type' => $atts['post_type'],
            ];
            if ($atts['category']) {
                $term = get_category_by_slug($atts['category']);
                if ($term) {
                    $args += [
                        'meta_key' => 'category',
                        'meta_value' => $term->term_id,
                    ];
                }
            }

            global $wp_query;
            $outer_wp_query = $wp_query;
            $wp_query = new WP_Query($args);
            $template = locate_template('shortcodes/archive-block');
            $html = template($template);
            $wp_query = $outer_wp_query;
            return $html;
        });
    }
);
