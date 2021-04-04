<?php 
    // Da aggiungere alla fine del file functions.php
    // prima della chiusura di PHP
	class NoodlesCodeWidget extends WP_Widget {
		// Stiamo preparando i noodles 🍜
		public function __construct() {
			parent::__construct(
				'noodles_code_widget', // Identificativo del widget
				__( 'Noodles Code Widget', 'noodles_code' ), // Nome del widget
				array( 
						'description' => __( 'Mostra una semplice stringa con un\'emoji', 'noodles_code' ) // Descrizione del widget
				)
			);
		}
		
		public function widget( $args, $instance ) {
			echo __( 'I noodles sono pronti!🍜', 'noodles_code' );
		}
	}

	function noodles_code_register_widget() {
		register_widget( 'NoodlesCodeWidget' );
	}
	add_action( 'widgets_init', 'noodles_code_register_widget' );

