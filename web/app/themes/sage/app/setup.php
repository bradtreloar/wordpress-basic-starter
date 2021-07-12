<?php

namespace App;

use App\NavMenus\Navwalker;
use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;
use WP_Block_Type_Registry;

/**
 * Theme assets
 */
add_action(
    'wp_enqueue_scripts',
    function () {
        wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
        wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

        if (is_single() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    },
    100
);

/**
 * Theme assets
 */
add_action(
    'enqueue_block_editor_assets',
    function () {
        wp_enqueue_style('sage/editor.css', asset_path('styles/editor.css'), false, null);
        wp_enqueue_script(
            'sage/editor.js',
            asset_path('scripts/editor.js'),
            ['wp-blocks', 'wp-dom-ready', 'wp-edit-post'],
            null,
            true
        );
    },
    100
);

/**
 * Theme setup
 */
add_action(
    'after_setup_theme',
    function () {
        /**
         * Enable features from Soil when plugin is activated
         *
         * @link https://roots.io/plugins/soil/
         */
        add_theme_support('soil-clean-up');
        add_theme_support('soil-jquery-cdn');
        add_theme_support('soil-nav-walker');
        add_theme_support('soil-nice-search');
        add_theme_support('soil-relative-urls');

        /**
         * Enable plugins to manage the document title
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
         */
        add_theme_support('title-tag');

        /**
         * Register navigation menus
         *
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
        register_nav_menus(
            [
                'main_menu' => __('Main menu', 'sage'),
                'contact_menu' => __('Contact menu', 'sage'),
                'footer_menu' => __('Footer menu', 'sage'),
            ]
        );

        /**
         * Enable post thumbnails
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /**
         * Enable full and wide alignment
         */
        add_theme_support('align-wide');
        add_theme_support('align-full');

        /**
         * Enable HTML5 markup support
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
         */
        add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

        /**
         * Enable selective refresh for widgets in customizer
         *
         * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
         */
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Use main stylesheet for visual editor
         *
         * @see resources/assets/styles/layouts/_tinymce.scss
         */
        add_editor_style(asset_path('styles/main.css'));
    },
    20
);

/**
 * Register sidebars
 */
add_action(
    'widgets_init',
    function () {
        $config = [
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ];
        register_sidebar(
            [
                'name'          => __('Primary', 'sage'),
                'id'            => 'sidebar-primary'
            ] + $config
        );
        register_sidebar(
            [
                'name'          => __('Footer', 'sage'),
                'id'            => 'sidebar-footer'
            ] + $config
        );
    }
);

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action(
    'the_post',
    function ($post) {
        sage('blade')->share('post', $post);
    }
);

/**
 * Setup Sage options
 */
add_action(
    'after_setup_theme',
    function () {
        /**
         * Add JsonManifest to Sage container
         */
        sage()->singleton(
            'sage.assets',
            function () {
                return new JsonManifest(config('assets.manifest'), config('assets.uri'));
            }
        );

        /**
         * Add Blade to Sage container
         */
        sage()->singleton(
            'sage.blade',
            function (Container $app) {
                $cachePath = config('view.compiled');
                if (!file_exists($cachePath)) {
                    wp_mkdir_p($cachePath);
                }
                (new BladeProvider($app))->register();
                return new Blade($app['view']);
            }
        );

        /**
         * Create @asset() Blade directive
         */
        sage('blade')->compiler()->directive(
            'asset',
            function ($asset) {
                return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
            }
        );
    }
);

/**
 * Register a Bootstrap-compatible walker with every menu.
 */
add_action(
    'wp_nav_menu_args',
    function ($args) {
        $walker = new Navwalker();
        return [
            'walker' => $walker
        ] + $args;
    }
);

/**
 * Unregister unsupported blocks.
 */
add_action(
    'init',
    function () {
        $unsupported_blocks = [
            'core/button',
            'core/buttons',
            'core/columns',
        ];

        foreach ($unsupported_blocks as $block_name) {
            $block_type_registry = WP_Block_Type_Registry::get_instance();
            if ($block_type_registry->is_registered($block_name)) {
                $block_type_registry->unregister($block_name);
            }
        }
    }
);
