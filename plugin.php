<?php

/**
 * Plugin Name: Blockstudio starter plugin.
 * Plugin URI: https://blockstudio.dev
 * Description: Register custom blocks using Blockstudio from a plugin.
 * Author: Fabrikat
 * Version: 1.0
 */

add_filter( 'blockstudio/path', function () {
	return plugin_dir_path( __FILE__ ) . 'blocks';
} );
