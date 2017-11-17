<?php
/**
 * Advanced Custom Fields
 *
 * This document contains an export of all of the Advanced Custom Fields PRO
 * fields that this theme supports out of the box.
 *
 * @package WordPress
 * @subpackage EyeCare_Partners
 * @since EyeCare Partners 1.0.0
 */
if ( function_exists('acf_add_local_field_group') ) {
	acf_add_local_field_group(array (
		'key' => 'group_5887b200b5339',
		'title' => 'General Theme Settings',
		'fields' => array (
			array (
				'key' => 'field_5887b20d1ef10',
				'label' => 'Logo',
				'name' => 'logo',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => 200,
				'min_height' => 60,
				'min_size' => '',
				'max_width' => 200,
				'max_height' => 60,
				'max_size' => '',
				'mime_types' => 'jpg',
			),
			array (
				'key' => 'field_5887bc81e590a',
				'label' => 'Background Tile',
				'name' => 'background_tile',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
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
				'key' => 'field_5887b81f84a7f',
				'label' => 'Primary Color',
				'name' => 'primary_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#00ADEB',
			),
			array (
				'key' => 'field_5887b84084a80',
				'label' => 'Secondary Color',
				'name' => 'secondary_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#008BC9',
			),
			array (
				'key' => 'field_5887b3bd4f001',
				'label' => 'Call to Action Text',
				'name' => 'call_to_action_text',
				'type' => 'text',
				'instructions' => '',
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 'Contact Us At (555) 555-5555',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5887b42b4f002',
				'label' => 'Call to Action URL',
				'name' => 'call_to_action_url',
				'type' => 'text',
				'instructions' => '',
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 'tel:5555555555',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_588b699ecae74',
				'label' => 'Call to Action Class',
				'name' => 'call_to_action_class',
				'type' => 'text',
				'instructions' => '',
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 'cfa_1086',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5887b64e11483',
				'label' => 'Locations Button Text',
				'name' => 'locations_button_text',
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
				'maxlength' => '',
				'placeholder' => 'Find a Location',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5887b66211484',
				'label' => 'Locations Button URL',
				'name' => 'locations_button_url',
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
				),
				'taxonomy' => array (
				),
				'allow_null' => 0,
				'multiple' => 0,
				'allow_archives' => 1,
			),

			array (
				'key' => 'field_588b5fe1be86f',
				'label' => 'Google Tag Manager ID',
				'name' => 'google_tag_manager_id',
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
				'maxlength' => '',
				'placeholder' => 'GTM-XXXX',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_588b61a8b97d4',
				'label' => 'Convirza Embed Code',
				'name' => 'convirza_embed_code',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'new_lines' => '',
				'maxlength' => '',
				'placeholder' => '',
				'rows' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-options',
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


	acf_add_local_field_group(array (
		'key' => 'group_5887c43cbf43b',
		'title' => 'Landing Page Options',
		'fields' => array (
			array (
				'key' => 'field_58c159460b2b2',
				'label' => 'Landing Page Type',
				'name' => 'landing_page_type',
				'type' => 'select',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'regular' => 'Regular',
					'lasik' => 'LASIK',
				),
				'default_value' => array (
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 1,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
			array (
				'key' => 'field_58c1597ad8334',
				'label' => 'LASIK Locations URL',
				'name' => 'lasik_locations_url',
				'type' => 'page_link',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_58c159460b2b2',
							'operator' => '==',
							'value' => 'lasik',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
				),
				'taxonomy' => array (
				),
				'allow_null' => 0,
				'allow_archives' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_58cc05f84abdc',
				'label' => 'Gravity Form ID',
				'name' => 'gravity_form_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_58c159460b2b2',
							'operator' => '==',
							'value' => 'lasik',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 14,
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5890ac7cb82b0',
				'label' => 'Hero',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5887c46f5b7a6',
				'label' => 'Hero Image',
				'name' => 'hero_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => 1280,
				'min_height' => 550,
				'min_size' => '',
				'max_width' => 1280,
				'max_height' => 550,
				'max_size' => '',
				'mime_types' => 'jpg',
			),
			array (
				'key' => 'field_58bdaa695f5ae',
				'label' => 'Hero Text Color',
				'name' => 'hero_text_color',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'black' => 'Black',
					'white' => 'White',
				),
				'default_value' => array (
					0 => 'black',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
			array (
				'key' => 'field_5887c5755b7a8',
				'label' => 'Hero Introduction',
				'name' => 'hero_introduction',
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
				'maxlength' => '',
				'placeholder' => 'Eye Examinations At',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5887c5bb5b7a9',
				'label' => 'Hero Title',
				'name' => 'hero_title',
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
				'maxlength' => '',
				'placeholder' => 'Clarkson Eyecare',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5887c6035b7aa',
				'label' => 'Hero Tagline',
				'name' => 'hero_tagline',
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
				'maxlength' => '',
				'placeholder' => 'Need your eyes checked? Come to Clarkson Eyecare.',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5887c6275b7ab',
				'label' => 'Hero Description',
				'name' => 'hero_description',
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
				'maxlength' => '',
				'placeholder' => 'From routine eye checkups to contact lens exams to diagnostic services, we’re your go-to, full-service vision center.',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5887c6335b7ac',
				'label' => 'Hero Button Text',
				'name' => 'hero_button_text',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 'Find Your Local Center',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5887c6435b7ad',
				'label' => 'Hero Button Link',
				'name' => 'hero_button_link',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 'http://www.example.com',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_589106f141698',
				'label' => 'Hero Button Class',
				'name' => 'hero_button_class',
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
				'maxlength' => '',
				'placeholder' => 'cfa_1927',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_589207bf9e075',
				'label' => 'Hero Disclaimer',
				'name' => 'hero_disclaimer',
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
				'maxlength' => '',
				'placeholder' => '*Some restrictions apply',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_599ecbfc4b0a0',
				'label' => 'Disable Logo Link',
				'name' => 'disable_logo_link',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array (
				'key' => 'field_599ecbfc4b0a1',
				'label' => 'Open Call to Actions in New Tab',
				'name' => 'open_cta_in_new_tab',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array (
				'key' => 'field_5890acdb271a0',
				'label' => 'Callouts',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5890ae2e4024d',
				'label' => 'Callouts Introduction',
				'name' => 'callouts_introduction',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'default_value' => '',
				'delay' => 0,
			),
			array (
				'key' => 'field_5890acec271a1',
				'label' => 'Callouts',
				'name' => 'callouts',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'min' => 0,
				'max' => 5,
				'layout' => 'table',
				'button_label' => 'Add Callout',
				'collapsed' => '',
				'sub_fields' => array (
					array (
						'key' => 'field_5890ad12271a2',
						'label' => 'Callout Title',
						'name' => 'callout_title',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => 'Oval',
						'prepend' => '',
						'append' => '',
					),
					array (
						'key' => 'field_5890ad25271a3',
						'label' => 'Callout Image',
						'name' => 'callout_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => 200,
						'min_height' => 200,
						'min_size' => '',
						'max_width' => 200,
						'max_height' => 400,
						'max_size' => '',
						'mime_types' => 'jpg',
					),
					array (
						'key' => 'field_5890ad4e271a4',
						'label' => 'Callout Description',
						'name' => 'callout_description',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => 'Most styles work well for an oval face shape. Make sure to pay close attention to the size of the bridge and frame to ensure the glasses fit your face.',
						'prepend' => '',
						'append' => '',
					),
				),
			),
			array (
				'key' => 'field_5890ad8e40249',
				'label' => 'Logo Section',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5890ad984024a',
				'label' => 'Logos Introduction',
				'name' => 'logos_introduction',
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
				'maxlength' => '',
				'placeholder' => 'Visit Clarkson Eyecare to find popular eyeglass frames for women, men and kids and the latest designer eyeglasses from brands like:',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5890adc54024b',
				'label' => 'Logos',
				'name' => 'logos',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Add Logo',
				'collapsed' => '',
				'sub_fields' => array (
					array (
						'key' => 'field_5890add24024c',
						'label' => 'Logo Image',
						'name' => 'logo_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => 220,
						'min_height' => 100,
						'min_size' => '',
						'max_width' => 220,
						'max_height' => 100,
						'max_size' => '',
						'mime_types' => 'jpg',
					),
				),
			),
			array (
				'key' => 'field_5890ae653a941',
				'label' => 'Main Content',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5890ae6f3a942',
				'label' => 'Main Content Background',
				'name' => 'main_content_background',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#ffffff',
			),
			array (
				'key' => 'field_5890dd14df066',
				'label' => 'Main Content Text Color',
				'name' => 'main_content_text_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#363636',
			),
			array (
				'key' => 'field_5890ac8db82b1',
				'label' => 'First Section',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5887c66de5976',
				'label' => 'First Section Image',
				'name' => 'first_section_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => 640,
				'min_height' => 400,
				'min_size' => '',
				'max_width' => 640,
				'max_height' => 400,
				'max_size' => '',
				'mime_types' => 'jpg',
			),
			array (
				'key' => 'field_5887c697e5977',
				'label' => 'First Section Content',
				'name' => 'first_section_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
				'default_value' => '',
				'delay' => 0,
			),
			array (
				'key' => 'field_5890ac9eb82b2',
				'label' => 'Second Section',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5887c6b1e5978',
				'label' => 'Second Section Image',
				'name' => 'second_section_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => 640,
				'min_height' => 400,
				'min_size' => '',
				'max_width' => 640,
				'max_height' => 400,
				'max_size' => '',
				'mime_types' => 'jpg',
			),
			array (
				'key' => 'field_5887c6c3e5979',
				'label' => 'Second Section Content',
				'name' => 'second_section_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
				'default_value' => '',
				'delay' => 0,
			),
			array (
				'key' => 'field_5890acabb82b3',
				'label' => 'Footer',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5888bbc2f76f6',
				'label' => 'Footer Content',
				'name' => 'footer_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
				'default_value' => '',
				'delay' => 0,
			),
			array (
				'key' => 'field_58920be4a846c',
				'label' => 'Footer Disclaimer',
				'name' => 'footer_disclaimer',
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
				'maxlength' => '',
				'placeholder' => '*Does not include eye exam. Valid only on a complete pair of frames and lenses. May not combine with insurance or other offers. Maximum savings of $400 toward any one pair, applied on pre-tax purchase amount. Standard frame brand restrictions apply. Not applicable toward prior purchases or special order frames. Savings valid on frames and lenses only and not toward exam fees or co-pays.',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-landing.php',
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-landing-b.php',
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-landing-with-faq.php',
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



	acf_add_local_field_group(array (
		'key' => 'group_5888be03da0b8',
		'title' => 'Location Options',
		'fields' => array (
			array (
				'key' => 'field_58c15b08abdef',
				'label' => 'Location Type',
				'name' => 'location_type',
				'type' => 'select',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'regular' => 'Regular',
					'lasik' => 'LASIK',
				),
				'default_value' => array (
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
			array (
				'key' => 'field_5888be079c009',
				'label' => 'Address',
				'name' => 'address',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '917 Olive St.',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5888c0059c00a',
				'label' => 'City',
				'name' => 'city',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 'St. Louis',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5888c0129c00b',
				'label' => 'State',
				'name' => 'state',
				'type' => 'select',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'multiple' => 0,
				'allow_null' => 0,
				'choices' => array (
					'NC' => 'NC',
					'AL' => 'AL',
					'AK' => 'AK',
					'AZ' => 'AZ',
					'AR' => 'AR',
					'CA' => 'CA',
					'CO' => 'CO',
					'CT' => 'CT',
					'DE' => 'DE',
					'FL' => 'FL',
					'GA' => 'GA',
					'HI' => 'HI',
					'ID' => 'ID',
					'IL' => 'IL',
					'IN' => 'IN',
					'IA' => 'IA',
					'KS' => 'KS',
					'KY' => 'KY',
					'LA' => 'LA',
					'ME' => 'ME',
					'MD' => 'MD',
					'MA' => 'MA',
					'MI' => 'MI',
					'MN' => 'MN',
					'MS' => 'MS',
					'MO' => 'MO',
					'MT' => 'MT',
					'NE' => 'NE',
					'NV' => 'NV',
					'NH' => 'NH',
					'NJ' => 'NJ',
					'NM' => 'NM',
					'NY' => 'NY',
					'NC' => 'NC',
					'ND' => 'ND',
					'OH' => 'OH',
					'OK' => 'OK',
					'OR' => 'OR',
					'PA' => 'PA',
					'RI' => 'RI',
					'SC' => 'SC',
					'SD' => 'SD',
					'TN' => 'TN',
					'TX' => 'TX',
					'UT' => 'UT',
					'VT' => 'VT',
					'VA' => 'VA',
					'WA' => 'WA',
					'WV' => 'WV',
					'WI' => 'WI',
					'WY' => 'WY',
				),
				'default_value' => array (
					0 => 'NC',
				),
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
				'return_format' => 'value',
			),
			array (
				'key' => 'field_5888c0499c00c',
				'label' => 'Zip Code',
				'name' => 'zip_code',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 63101,
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5888c0689c00d',
				'label' => 'Phone Number',
				'name' => 'phone_number',
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
				'maxlength' => '',
				'placeholder' => '(314) 621-5303',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5888c0689c01f',
				'label' => 'Fax Number',
				'name' => 'fax_number',
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
				'maxlength' => '',
				'placeholder' => '(314) 621-5303',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5888c0779c0de',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'transhealthnc@gmail.com',
			),
			array (
				'key' => 'field_5888c0779c00e',
				'label' => 'Website',
				'name' => 'website',
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
				'placeholder' => 'https://transhealthnc.com',
			),
			array (
				'key' => 'field_588b9bd1d355a',
				'label' => 'Latitude',
				'name' => 'latitude',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '38.627003',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_588b9be6d355b',
				'label' => 'Longitude',
				'name' => 'longitude',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '-90.199404',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'locations',
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
	acf_add_local_field_group(array (
		'key' => 'group_5888c5887a1c2',
		'title' => 'Locations Settings',
		'fields' => array (
			array (
				'key' => 'field_5888c7e3affb5',
				'label' => 'Search Field Label',
				'name' => 'search_field_label',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 'Search by City, State, or Zip Code',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5888c818affb6',
				'label' => 'Search Button Label',
				'name' => 'search_button_label',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => 'Search',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5888c9064e7b4',
				'label' => 'No Results Message',
				'name' => 'no_results_message',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'default_value' => '',
				'delay' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-settings',
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
	acf_add_local_field_group(array (
		'key' => 'group_5887bf8dd6a67',
		'title' => 'Page Options',
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'page-landing.php',
				),
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
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
	acf_add_local_field_group(array (
		'key' => 'group_588a1eb15f02c',
		'title' => 'Post Options',
		'fields' => array (
			array (
				'key' => 'field_588a1eb162076',
				'label' => 'Hero Image',
				'name' => 'hero_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => 1280,
				'min_height' => 550,
				'min_size' => '',
				'max_width' => 1280,
				'max_height' => 550,
				'max_size' => '',
				'mime_types' => 'jpg',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
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
}
