<?php
/**
 * Plugin Name:       Card Block
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       custom-block-card
 *
 * @package custom-block
 */

add_action(
    'init',
    function () {
        register_block_type_from_metadata(__DIR__);
    }
);
