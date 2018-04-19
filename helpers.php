<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 4/18/2018 - 17:38
 * Project Name: thectheme
 */

function scss_compiler_handle( $scss_content_string = '' ) {
	if ( ! class_exists( 'scssc' ) ) {
		return;
	}
	global $wp_filesystem;

	if ( empty( $wp_filesystem ) ) {
		if ( defined( 'FW' ) ) {
			fw_render_view( ABSPATH . '/wp-admin/includes/file.php', array(), false );
		}
		WP_Filesystem();
	}

	$scss              = new scssc();
	$scss_main_content = $wp_filesystem->get_contents( get_template_directory() . '/assets/scss/main.scss' );
	$style_path        = get_template_directory() . '/assets/css/thectheme.css';
	$scss->setImportPaths( get_template_directory() . '/assets/scss/' );
	$scss->setFormatter( 'scss_formatter_compressed' );

	$scss_content = $scss->compile( $scss_content_string . $scss_main_content );
	$wp_filesystem->put_contents( $style_path, $scss_content, FS_CHMOD_FILE );
}

function scss_compiler_variables_handle( $data = array() ) {
	if ( ! $data || ! is_array( $data ) || count( $data ) <= 0 ) {
		return array();
	}

	return array_map( function ( $value, $key ) {
		return str_replace( array( '{key}', '{value}' ), array( $key, $value ), '${key}: {value}' );
	}, array_values( $data ), array_keys( $data ) );
}