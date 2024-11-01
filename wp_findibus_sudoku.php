<?php
/*
Plugin Name: WP embed Sudoku
Plugin URI: http://ammich.de/blog/wordpress-plugin-wp-embed-sudoku/
Description: Dieses Plugin bindet ein Sudoku Spiel in Wordpress ein.
Author: Thomas Ammich
Version: 1.0
Author URI: http://www.ammich.de
Min WP Version: 2.9.2
Max WP Version: 3.4.2
License: Lizens GPLv2
*/
function setzeSudoku($content) {
$tag = "[sudoku]";
$ersetze = "<iframe src=http://findibus.de/scripte/sudoku/index.php width=\"425\" height=\"600\"> </iframe>"; 
$content = str_replace($tag,$ersetze,$content);
return $content;
}

add_filter("the_content","setzeSudoku");
?>
