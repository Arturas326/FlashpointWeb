<?php
/*
Plugin Name: Custom Quotes
Description: Display a random quote from the database.
*/

function display_random_quote() {
    global $wpdb;
    $table_name = 'flash_custom_quotes';

    $sql = "SELECT * FROM $table_name ORDER BY RAND() LIMIT 1";
    $result = $wpdb->get_results($sql);

    if (!empty($result)) {
        $quote = $result[0];
        echo '<blockquote>' . esc_html($quote->quote_text) . '<b><p>- ' . esc_html($quote->author) . ' </blockquote>' . '</p></b>';
        
    } else {
        echo 'No quotes found.';
    }
}

add_shortcode('random_quote', 'display_random_quote');

function display_all_quotes() {
    global $wpdb;
    $table_name = 'flash_custom_quotes';

    $sql = "SELECT * FROM $table_name";
    $results = $wpdb->get_results($sql);

    if (!empty($results)) {
        echo '<ul>';
        foreach ($results as $quote) {
            echo '<li>';
            echo '<blockquote>' . esc_html($quote->quote_text) . '<b><p>- ' . esc_html($quote->author) . ' </blockquote>' . '</p></b>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No quotes found.';
    }
}

add_shortcode('all_quotes', 'display_all_quotes');