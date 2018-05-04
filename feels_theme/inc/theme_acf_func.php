<?php 
/*-------------------------------------------------------------------------*/
/*  ACF PRO OPTIONS
/*-------------------------------------------------------------------------*/

// HIDE ACF IF NOT ADMIN
add_filter('acf/settings/show_admin', 'my_acf_show_admin');

function my_acf_show_admin( $show ) {

	return current_user_can('manage_options');

}
// HIDE ACF FOR ALL USERS
// add_filter('acf/settings/show_admin', '__return_false');


// INCLUDE ACF
include_once( get_template_directory() .'/includes/acf-pro/acf.php' );

add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {

    // update path
	$path = get_stylesheet_directory() . "/includes/acf-pro/";
    // $path = get_bloginfo('stylesheet_directory') . '/includes/acf-pro/';

    // return
	return $path;

}

add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {

    // update path
	$dir = get_stylesheet_directory_uri() . '/includes/acf-pro/';


    // return
	return $dir;

}



// CREATE OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {

 	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Opções Gerais do Tema',
		'menu_title' 	=> 'Opções do Tema',
		'redirect' 		=> true
		));
	
	
	// add sub page
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Banners',
		'menu_title' 	=> 'Banners',
		'parent_slug' 	=> $parent['menu_slug'],
		));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Redes Sociais',
		'menu_title' 	=> 'Redes Sociais',
		'parent_slug' 	=> $parent['menu_slug'],
		));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Informações da loja',
		'menu_title' 	=> 'Informações da loja',
		'parent_slug' 	=> $parent['menu_slug'],
		));
	
}

/*SLIDES*/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_581736292021c',
	'title' => 'Slides',
	'fields' => array (
		array (
			'key' => 'field_58173676900d1',
			'label' => 'Banner',
			'name' => 'banner',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 5,
			'layout' => 'row',
			'button_label' => 'Adicionar Slide',
			'sub_fields' => array (
				array (
					'key' => 'field_581736f2900d2',
					'label' => 'Imagem',
					'name' => 'imagem',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => 'jpg, png',
				),
				array (
					'key' => 'field_5817376b900d3',
					'label' => 'Link Produto',
					'name' => 'link_produto',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
						0 => 'product',
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'allow_archives' => 1,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-banners',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
/*END SLIDES*/
/*REDES SOCIAIS*/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_583c2ad348d51',
	'title' => 'Redes Sociais',
	'fields' => array (
		array (
			'key' => 'field_583c2aefd1ac9',
			'label' => 'Facebook',
			'name' => 'facebook',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_583c2b00d1aca',
			'label' => 'Twitter',
			'name' => 'twitter',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_583c2b0dd1acb',
			'label' => 'Google Plus',
			'name' => 'google_plus',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_583c2b37d1acd',
			'label' => 'Instagram',
			'name' => 'instagram',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_583c2b27d1acc',
			'label' => 'Pinterest',
			'name' => 'pinterest',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_583c2b50d1ace',
			'label' => 'Youtube',
			'name' => 'youtube',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-redes-sociais',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
/*END REDES SOCIAIS*/

/*DESTAQUES*/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_597f2ef88c4a0',
	'title' => 'Destaques Menores Home',
	'fields' => array (
		array (
			'key' => 'field_597f2f2c29b23',
			'label' => 'Destaques',
			'name' => 'destaques',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 3,
			'max' => 3,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_597f342429b24',
					'label' => 'Imagem Destaque',
					'name' => 'imagem_destaque',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_597f344329b25',
					'label' => 'Link Destaque',
					'name' => 'link_destaque',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-banners',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
/*END DESTAQUES*/

/*FAQ*/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5981e8cb6dedc',
	'title' => 'Dúvidas Frequentes',
	'fields' => array (
		array (
			'key' => 'field_5981e8d86050b',
			'label' => 'Dúvidas',
			'name' => 'duvidas_frequentes',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Adicionar dúvida',
			'sub_fields' => array (
				array (
					'key' => 'field_5981e8f76050c',
					'label' => 'Pergunta',
					'name' => 'pergunta',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5981e9126050d',
					'label' => 'Resposta',
					'name' => 'resposta',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-duvidas.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'custom_fields',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'author',
		7 => 'format',
		8 => 'page_attributes',
		9 => 'categories',
		10 => 'tags',
		11 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;
/*END FAQ*/
/*INFO LOJA*/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_598201f641c25',
	'title' => 'Informações da loja',
	'fields' => array (
		array (
			'key' => 'field_59820203b4086',
			'label' => 'Atendimento',
			'name' => 'atendimento',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array (
			'key' => 'field_59820251b4087',
			'label' => 'Telefone 1',
			'name' => 'telefone_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5982025bb4088',
			'label' => 'Telefone 2',
			'name' => 'telefone_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5982026ab4089',
			'label' => 'Endereço',
			'name' => 'endereco',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array (
			'key' => 'field_5982047d22ebb',
			'label' => 'Email',
			'name' => 'email',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_598202f8b408b',
			'label' => 'Exibir Mapa',
			'name' => 'exibir_mapa',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Marque para exibir o mapa',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array (
			'key' => 'field_598202a4b408a',
			'label' => 'Mapa',
			'name' => 'mapa',
			'type' => 'wysiwyg',
			'instructions' => 'Inserir codigo de incorporação do mapa.',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_598202f8b408b',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'text',
			'toolbar' => 'full',
			'media_upload' => 0,
			'delay' => 0,
		),
		array (
			'key' => 'field_5982036b0aa0a',
			'label' => 'Texto Copyrights',
			'name' => 'texto_copyrights',
			'type' => 'text',
			'instructions' => 'Não inserir a data.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-informacoes-da-loja',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
/*END INFO LOJA*/


// if( function_exists('acf_add_local_field_group') ):

// acf_add_local_field_group(array (
// 	'key' => 'group_5a26a6bb051fd',
// 	'title' => 'Onde Encontrar uFrog',
// 	'fields' => array (
// 		array (
// 			'key' => 'field_5a26a6e1190ec',
// 			'label' => 'Locais',
// 			'name' => 'locais',
// 			'type' => 'repeater',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array (
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'collapsed' => 'field_5a26a6ff190ed',
// 			'min' => 0,
// 			'max' => 0,
// 			'layout' => 'row',
// 			'button_label' => 'Adicionar Estado',
// 			'sub_fields' => array (
// 				array (
// 					'key' => 'field_5a26a6ff190ed',
// 					'label' => 'Estado',
// 					'name' => 'estado',
// 					'type' => 'text',
// 					'instructions' => '',
// 					'required' => 1,
// 					'conditional_logic' => 0,
// 					'wrapper' => array (
// 						'width' => '',
// 						'class' => '',
// 						'id' => '',
// 					),
// 					'default_value' => '',
// 					'placeholder' => '',
// 					'prepend' => '',
// 					'append' => '',
// 					'maxlength' => '',
// 				),
// 				array (
// 					'key' => 'field_5a26a738190ee',
// 					'label' => 'Informação do local',
// 					'name' => 'informacao_do_local',
// 					'type' => 'repeater',
// 					'instructions' => '',
// 					'required' => 0,
// 					'conditional_logic' => 0,
// 					'wrapper' => array (
// 						'width' => '',
// 						'class' => '',
// 						'id' => '',
// 					),
// 					'collapsed' => '',
// 					'min' => 0,
// 					'max' => 0,
// 					'layout' => 'table',
// 					'button_label' => 'Adicionar local',
// 					'sub_fields' => array (
// 						array (
// 							'key' => 'field_5a26a776190ef',
// 							'label' => 'Cidade',
// 							'name' => 'cidade',
// 							'type' => 'text',
// 							'instructions' => '',
// 							'required' => 0,
// 							'conditional_logic' => 0,
// 							'wrapper' => array (
// 								'width' => '',
// 								'class' => '',
// 								'id' => '',
// 							),
// 							'default_value' => '',
// 							'placeholder' => '',
// 							'prepend' => '',
// 							'append' => '',
// 							'maxlength' => '',
// 						),
// 						array (
// 							'key' => 'field_5a26a785190f0',
// 							'label' => 'Loja',
// 							'name' => 'loja',
// 							'type' => 'text',
// 							'instructions' => '',
// 							'required' => 0,
// 							'conditional_logic' => 0,
// 							'wrapper' => array (
// 								'width' => '',
// 								'class' => '',
// 								'id' => '',
// 							),
// 							'default_value' => '',
// 							'placeholder' => '',
// 							'prepend' => '',
// 							'append' => '',
// 							'maxlength' => '',
// 						),
// 						array (
// 							'key' => 'field_5a26a78c190f1',
// 							'label' => 'Endereço',
// 							'name' => 'endereco',
// 							'type' => 'text',
// 							'instructions' => '',
// 							'required' => 0,
// 							'conditional_logic' => 0,
// 							'wrapper' => array (
// 								'width' => '',
// 								'class' => '',
// 								'id' => '',
// 							),
// 							'default_value' => '',
// 							'placeholder' => '',
// 							'prepend' => '',
// 							'append' => '',
// 							'maxlength' => '',
// 						),
// 						array (
// 							'key' => 'field_5a26a79b190f2',
// 							'label' => 'Bairro',
// 							'name' => 'bairro',
// 							'type' => 'text',
// 							'instructions' => '',
// 							'required' => 0,
// 							'conditional_logic' => 0,
// 							'wrapper' => array (
// 								'width' => '',
// 								'class' => '',
// 								'id' => '',
// 							),
// 							'default_value' => '',
// 							'placeholder' => '',
// 							'prepend' => '',
// 							'append' => '',
// 							'maxlength' => '',
// 						),
// 						array (
// 							'key' => 'field_5a26a7a4190f3',
// 							'label' => 'Telefone',
// 							'name' => 'telefone',
// 							'type' => 'text',
// 							'instructions' => '',
// 							'required' => 0,
// 							'conditional_logic' => 0,
// 							'wrapper' => array (
// 								'width' => '',
// 								'class' => '',
// 								'id' => '',
// 							),
// 							'default_value' => '',
// 							'placeholder' => '',
// 							'prepend' => '',
// 							'append' => '',
// 							'maxlength' => '',
// 						),
// 					),
// 				),
// 			),
// 		),
// 	),
// 	'location' => array (
// 		array (
// 			array (
// 				'param' => 'page_template',
// 				'operator' => '==',
// 				'value' => 'template-onde-encontrar.php',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => array (
// 		0 => 'the_content',
// 		1 => 'custom_fields',
// 		2 => 'discussion',
// 		3 => 'comments',
// 		4 => 'revisions',
// 	),
// 	'active' => 1,
// 	'description' => '',
// ));

// endif;

/*ESTAMPAS*/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5a31150720699',
	'title' => 'Estampas',
	'fields' => array (
		array (
			'key' => 'field_5a31150e2475b',
			'label' => 'Estampas',
			'name' => 'estampas',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Adicionar estampa',
			'sub_fields' => array (
				array (
					'key' => 'field_5a3115492475c',
					'label' => 'Imagem',
					'name' => 'imagem',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_5a31155d2475d',
					'label' => 'Nome da Estampa',
					'name' => 'nome_da_estampa',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-estampas.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;