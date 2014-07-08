<?php if (!function_exists('init_portfolio_tax')){
	function init_portfolio_tax() {
		$labels = array(
			'name'                       => 'Objekttyper',
			'singular_name'              => 'Objekttyp',
			'menu_name'                  => 'Objekttyp',
			'all_items'                  => 'Alla typer',
			'parent_item'                => 'F&ouml;r&auml;lder',
			'parent_item_colon'          => 'Parent Item:',
			'new_item_name'              => 'Ny objektstyp',
			'add_new_item'               => 'L&auml;gg till objektstyp',
			'edit_item'                  => 'Redigera objektstyp',
			'update_item'                => 'Uppdatera objektstyp',
			'separate_items_with_commas' => 'Separera typer med komma',
			'search_items'               => 'S&ouml;k typer',
			'add_or_remove_items'        => 'L&auml;gg till eller ta bort typer',
			'choose_from_most_used'      => 'V&auml;lj fr�n mest anv&auml;nda',
			'not_found'                  => 'Inget funnet!',
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			//'show_tagcloud'              => true,
			'rewrite' => array('slug' => 'portfoliogrupp'),
			'query_var' => true
		);
		register_taxonomy( 'objekttyp', array( 'portfolio' ), $args );
	}
	add_action( 'init', 'init_portfolio_tax', 0 );
} ?>