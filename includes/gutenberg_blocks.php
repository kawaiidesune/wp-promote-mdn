<?php
/**
 * promote_mdn_enqueue_block_editor_assets function.
 * 
 * Enqueues the assets for the block for the Gutenberg editor.
 * 
 * @access public
 * @author Véronique Bellamy (v@vero.moe)
 * @return void
 */
function promote_mdn_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'promote-mdn-banner', // Handle
		plugin_dir_url(__FILE__) . 'block/block.js', // File
		array('wp-blocks', 'wp-i18n', 'wp-element'), // Dependencies
		filemtime(plugin_dir_path(__FILE__) . 'block/block.js')
	);
	wp_enqueue_style(
		'promote-mdn-banner-editor', // Handle
		plugin_dir_url(__FILE__) . 'assets/css/editor.css', // File
		array('wp-edit-blocks'), // Dependency
		filemtime(plugin_dir_path(__FILE__) . 'assets/css/editor.css')
	);
}
add_action('enqueue_block_editor_assets', 'promote_mdn_enqueue_block_editor_assets');

/**
 * promote_mdn_enqueue_block_assets function.
 * 
 * Enqueues the block's assets for the front-end.
 * 
 * @access public
 * @author Véronique Bellamy (v@vero.moe)
 * @return void
 */
function promote_mdn_enqueue_block_assets() {
	wp_enqueue_style(
		'promote-mdn-banner-frontend',
		plugin_dir_url(__FILE__) . 'assets/css/style.css',
		array('wp_blocks'),
		filemtime(plugin_dir_path(__FILE__) . 'assets/css/style.css')
	);
}
add_action('enqueue_block_assets', 'promote_mdn_enqueue_block_assets');
?>