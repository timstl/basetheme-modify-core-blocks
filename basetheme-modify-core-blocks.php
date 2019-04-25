<?php
/**
 * Plugin Name:     Modify Core Blocks
 * Plugin URI:      https://github.com/timstl/basetheme-modify-core-blocks
 * Description:     Modify core blocks: Remove and add styles, etc.
 * Version:         1.0
 * Author:          Tim Gieseking, Atomicdust, tgieseking@atomicdust.com
 * Author URI:      http://www.atomicdust.com/
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     basetheme
 *
 * @package WordPress
 * @subpackage Custom Post Types
 * @since 1.0
 * @version 1.0
 */

/* Abort! */
if ( ! defined( 'WPINC' ) ) {
	die;
}

function bt_modify_core_blocks_enqueue() {
	wp_enqueue_script(
		'bt-modify-core-blocks',
		plugins_url( 'basetheme-modify-core-blocks.js', __FILE__ ),
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' )
	);
}
add_action( 'enqueue_block_editor_assets', 'bt_modify_core_blocks_enqueue' );
