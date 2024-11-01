=== Show Akismet Count as Plain Text ===
Contributors: gspx
Donate link: http://www.gpearce.co.uk/contribute/
Tags: comments, spam, akismet, count
Requires at least: 2.0.2
Tested up to: 2.5
Stable tag: 1.0

This plugin simply outputs your total Akismet spam count as plain text.

== Description ==

This plugin creates a function called "my_akismet_count();" which will return a sentence like the following:

Akismet has protected my blog from 468 spam comments. Nice try!

Provided you have Akismet installed, it will return the number, although it is best for it to have caught at least one before you start using this, otherwise it won't work.

At some point I will revise it to return a function with just a number.

== Installation ==

It is very simple to get the plugin working on your blog.

1. Upload `akismet_count.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php my_akismet_count(); ?>` into your template wherever you want the count to be shown.

== Frequently Asked Questions ==

Does it work if you've caught no spam? Not currently, I'm working on it.

An answer to that question.

= What about foo bar? =

If there's a big problem, [use this form to let me know.](http://www.gpearce.co.uk/contact "use this form to let me know.")