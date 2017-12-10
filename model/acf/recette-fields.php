<?php

if( function_exists('acf_add_local_field_group') ):


$ingredients_fields= array(
		array(
			'key' => 'field_5a0d75949554f',
			'label' => 'Masquer les quantité',
			'name' => 'hide_quantity',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5a0d74ec9554c',
			'label' => 'Quantité',
			'name' => 'quantity',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5a0d75949554f',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5a0d75339554e',
			'label' => 'unité de quantité',
			'name' => 'quantity_unity',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5a0d75949554f',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'g' => 'g',
				'kg' => 'Kg',
				'l' => 'Litre',
				'cc' => 'cc',
				'cs' => 'cs',
				'cl' => 'cl',
				'dl' => 'dl',
				'ml' => 'ml',
				'none' => 'Aucune (Numérique)',
			),
			'default_value' => array(
				0 => 'none',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'array',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5a0d750d9554d',
			'label' => 'ingrédient',
			'name' => 'ingredient',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '60',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		
	);
acf_add_local_field_group(array(
	'key' => 'group_5a0d704387de0',
	'title' => 'Recettes',
	'fields' => array(
		array(
			'key' => 'field_5a0d704bf5629',
			'label' => 'Temps de préparation',
			'name' => 'preparation_time',
			'type' => 'number',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
			),

			'append' => 'minute(s)',

		),
		array(
			'key' => 'field_5a0d7102f562a',
			'label' => 'Temps de cuisson',
			'name' => 'cooking_time',
			'type' => 'number',
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'append' => 'minute(s)',
		),
		array(
			'key' => 'field_5a0d7118f562b',
			'label' => 'Difficulté',
			'name' => 'difficulty',
			'type' => 'select',
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'very_easy' => 'Très facile',
				'easy' => 'Facile',
				'medium' => 'Moyen',
				'hard' => 'Difficile',
			),
			'default_value' => array(
				0 => 'easy',
			),
			'return_format' => 'array',
		),
		array(
			'key' => 'field_5a0d7392f562c',
			'label' => 'Personnes',
			'name' => 'people',
			'type' => 'number',
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),

			'append' => 'personne(s)',
		),
		array(
			'key' => 'fieldkey_ingredients_group',
			'label' => 'Groupe d\'ingrédients',
			'name' => 'ingredients_group',
			'type' => 'repeater',
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'fieldkey_title_ingredient_group',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Ajouter un groupe d\'ingrédient',
			'sub_fields' => array(
				array(
					'key' => 'fieldkey_title_ingredient_group',
					'label' => 'Titre du groupe d\'ingrédient',
					'name' => 'ingredient_group_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '60',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5a0d74949554b',
					'label' => 'Ingrédients',
					'name' => 'ingredients',
					'type' => 'repeater',
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => 'field_5a0d750d9554d',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => 'Ajouter un ingrédient',
					'sub_fields' => $ingredients_fields,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'recette',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;