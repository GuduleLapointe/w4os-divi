<?php

class W4DI_HelloWorld extends ET_Builder_Module {

	public $slug       = 'w4di_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://w4os.org',
		'author'     => 'Speculoos World',
		'author_uri' => 'https://speculoos.world',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'w4di-w4os-divi' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'w4di-w4os-divi' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'w4di-w4os-divi' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new W4DI_HelloWorld;
