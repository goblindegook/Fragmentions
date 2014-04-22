=== Fragmentions ===
Contributors: goblindegook
Tags: annotations
Requires at least: 3.9
Tested up to: 3.9
Stable tag: 1.0.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Fragmentions allow linking to document sections on WordPress sites using words or phrases.

== Description ==

Fragmentions were proposed by Kevin Marks in a 2014 [blog post](http://www.kevinmarks.com/fragmentions.html) as a better alternative to hyperlinking using fragments.  Fragmentions use `##` to match words or phrases in a document.

In the following example, clicking "TL;DR" would jump to the `<strong>` element containing "Life, Liberty and the pursuit of Happiness":

`
<article>
    <p>
        <a href="##pursuit">TL;DR</a>
    </p>

    <p>
        When in the Course of human events, it becomes necessary for one people 
        to dissolve the political bands which have connected them with another, 
        and to assume among the powers of the earth, the separate and equal 
        station to which the Laws of Nature and of Nature’s God entitle them, a 
        decent respect to the opinions of mankind requires that they should 
        declare the causes which impel them to the separation.
    </p>

    <p>
        We hold these truths to be self-evident, that all men are created 
        equal, that they are endowed by their Creator with certain unalienable 
        Rights, that among these are <strong>Life, Liberty and the pursuit of 
        Happiness</strong>.
    </p>
</article>
`

This plugin relies on [Jonathan Neal](http://www.jonathantneal.com/)'s [Fragmentions script](https://github.com/chapmanu/fragmentions).

== Installation ==

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'fragmentions'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `fragmentions.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `fragmentions.zip`
2. Extract the `fragmentions` directory to your computer
3. Upload the `fragmentions` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

== Screenshots ==

== Frequently Asked Questions ==

== Changelog ==

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0 =
Initial release.

== Licenses ==

Jonathan Neal's Fragmentions script is licensed under a CC0 1.0 Universal License:

Public Domain Dedication

The person(s) who associated a work with this deed has dedicated the work to the public domain by waiving all of his or her rights to the work worldwide under copyright law, including all related and neighboring rights, to the extent allowed by law.

You can copy, modify, distribute and perform the work, even for commercial purposes, all without asking permission.

In no way are the patent or trademark rights of any person affected by CC0, nor are the rights that other persons may have in the work or in how the work is used, such as publicity or privacy rights.

Unless expressly stated otherwise, the person(s) who associated a work with this deed makes no warranties about the work, and disclaims liability for all uses of the work, to the fullest extent permitted by applicable law.

When using or citing the work, you should not imply endorsement by the author or the affirmer.

This is a human-readable summary of the Legal Code ([read the full text](https://creativecommons.org/publicdomain/zero/1.0/)).