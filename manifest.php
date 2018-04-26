<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Created by NGUYEN TRONG CONG - PhpStorm.
 * User: NTC - 2DEV4U.COM
 * Date: 4/18/2018 - 17:18
 * Project Name: thectheme
 */
$manifest = array();

$manifest['name']        = esc_html( 'SCSS Compiler' );
$manifest['description'] = esc_html( 'SCSS Compiler use scssphp is a compiler for SCSS written in PHP.
SCSS is a CSS preprocessor that adds many features like variables, mixins, imports, color manipulation, functions, and tons of other powerful features.
The entire compiler comes in a single class file ready for including in any kind of project in addition to a command line tool for running the compiler from the terminal.' );
$manifest['version']     = '1.0.0';
$manifest['display']     = true;
$manifest['standalone']  = true;
$manifest['github_repo'] = 'https://github.com/trongcong/scss-compiler';
$manifest['uri']         = 'https://github.com/trongcong/scss-compiler';
$manifest['author']      = 'C';
$manifest['author_uri']  = 'https://github.com/trongcong';

$manifest['github_update'] = 'trongcong/scss-compiler';
