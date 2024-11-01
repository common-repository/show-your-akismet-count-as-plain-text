<?php
/*
 * Plugin Name: Show Akismet Count as Plain Text
 * Version: 1.0
 * Plugin URI: http://www.gpearce.co.uk/plugins/akismet-count/
 * Description: The Number of Comments Marked as Spam By Akismet
 * Author: George Pearce
 * Author URI: http://www.gpearce.co.uk/
 */
function my_akismet_count() {
$akismetcount = number_format_i18n(get_option('akismet_spam_count'));
echo "<a href='http://akismet.com/'>Akismet</a> has protected my blog from " . $akismetcount . " spam comments. Nice try!";
}
function my_akismet_number() {
$akismetcount = number_format_i18n(get_option('akismet_spam_count'));
echo $akismetcount;
}
?>