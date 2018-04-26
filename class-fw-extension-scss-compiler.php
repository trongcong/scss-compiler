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


	/**
	 * Called after all extensions instances was created
	 * @internal
	 */
	protected function _init() {
		// TODO: Implement _init() method. 
		if ( ! class_exists( 'scssc' ) ) {
			return;
		}
	}
}