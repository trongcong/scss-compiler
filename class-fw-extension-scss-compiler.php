<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 4/18/2018 - 17:22
 * Project Name: thectheme
 */
class FW_Extension_SCSS_Compiler extends FW_Extension {

	public function scss_compiler_general_styles() {
		$scss_extra_string        = '';
		$thectheme_scss_variables = array();
		$last_md5_scss            = get_option( 'thectheme_scss_compiler_option_hash', '' );

		if ( WP_DEBUG ) {
			scss_compiler_handle();
		} else {
			$thectheme_scss_content = scss_compiler_variables_handle( $thectheme_scss_variables );
			$md5_scss_variables     = md5( serialize( $thectheme_scss_content ) );

			if ( $last_md5_scss != $md5_scss_variables ) {

				update_option( 'thectheme_scss_compiler_option_hash', $md5_scss_variables );
				$scss_content = implode( '; ', $thectheme_scss_content );
				scss_compiler_handle( $scss_content . ';' . $scss_extra_string );
			}
		}
	}

	/**
	 * Called after all extensions instances was created
	 * @internal
	 */
	protected function _init() {
		// TODO: Implement _init() method.
		if ( is_admin() ) {
			add_action( 'init', array( $this, 'scss_compiler_general_styles' ) );
		}
	}
}