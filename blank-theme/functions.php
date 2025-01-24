<?php

if( !true) {
    if( true ) {
        add_action( 'after_setup_theme', 'blanktheme_remove_core_patterns' );

        function blanktheme_remove_core_patterns() {
            remove_theme_support( 'core-block-patterns' );
        }

    } else {
        add_filter( 'should_load_remote_block_patterns', '__return_false' );
    }
}

