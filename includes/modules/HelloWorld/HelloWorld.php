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
			// 'heading'     => array(
			// 	'label'           => esc_html__( 'Heading', 'w4os' ),
			// 	'type'            => 'text',
			// 	'option_category' => 'basic_option',
			// 	'description'     => esc_html__( 'Input your desired heading here.', 'w4os' ),
			// 	'toggle_slug'     => 'main_content',
      //   'default' => $this->name,
			// ),
			'content' => array(
				// 'label'           => esc_html__( 'Content', 'w4di-w4os-divi' ),
				'label'           => esc_html__( 'Title', 'w4os' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'w4os' ),
				// 'description'     => esc_html__( 'Content entered here will appear inside the module.', 'w4di-w4os-divi' ),
				'toggle_slug'     => 'main_content',
				'default' => $this->name,
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		$attr['title'] = $this->props['heading'];
		$args=array(
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		);

		return w4os_gridinfo_html($atts, $args);
		// return sprintf(
		// 	'<h4>%1$s</h4>%2$s',
		// 	$this->props['heading'],
		// 	$this->props['content'],
		//  );
	}
}

new W4DI_HelloWorld;
