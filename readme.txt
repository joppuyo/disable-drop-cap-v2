# Disable Drop Cap

Contributors: joppuyo
Tags: gutenberg, drop, cap, dropcap, disable, remove, hide, initial, first, letter, big, large
Requires at least: 5.5
Tested up to: 6.1
Requires PHP: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://github.com/sponsors/joppuyo
Stable Tag: 2.1.7

A plugin to disable drop cap option in the Gutenberg editor block editor paragraph block

## Description

A plugin to disable drop cap option in the Gutenberg block editor editor paragraph block.

You can find the plugin source code at [GitHub](https://github.com/joppuyo/disable-drop-cap-v2).

### Note for WordPress 5.8

With WordPress 5.8, you can use the new `theme.json` feature to disable drop caps in your theme. Add a `theme.json` file with the following content in the root of your theme.

`{
    "version": 1,
    "settings": {
        "typography": {
            "dropCap": false
        }
    }
}`

This plugin does continue working in WordPress 5.8 but be aware of this alternative solution.

### Support the plugin

Maintaining a WordPress plugin is a lot of work. If you like the plugin, please consider rating it on [WordPress.org](https://wordpress.org/support/plugin/disable-drop-cap/reviews/#new-post). You can also support me on [GitHub sponsors](https://github.com/sponsors/joppuyo). Thank you!

If you are interested, you can also check out my other WordPress plugins:

* [Disable Media Pages](https://wordpress.org/plugins/disable-media-pages/)
* [Disable Customizer](https://wordpress.org/plugins/customizer-disabler/)
* [ACF Image Aspect Ratio Crop](https://wordpress.org/plugins/acf-image-aspect-ratio-crop/)


## Screenshots

1. Without the plugin, the block editor paragraph block has an option for drop cap
2. When the plugin is installed, the drop cap option has been removed

## Changelog


### 2.1.7 (2022-11-09)
* Fix: Bump tested version

### 2.1.6 (2022-11-09)
* Fix: Test in WP 6.1

### 2.1.5 (2022-05-28)
* Fix: Bump tested version

### 2.1.4 (2022-05-28)
* Fix: Test in WP 6.0

### 2.1.3 (2022-01-26)
* Fix: Minor fix to screenshots

### 2.1.2 (2022-01-26)
* Fix: Bump supported version to 5.9
* Fix: Minor fix to icon
* Fix: Update screenshots

### 2.1.1 (2022-01-03)
* Fix: add updated icon

### 2.1.0 (2021-12-05)
* Feature: improve code structure, move code to a namespaced class

### 2.0.8 (2021-11-03)
* Fix: Icon update
* Fix: Readme updates
* Fix: Metadata updates

### 2.0.7 (2021-11-02)
* Fix: Update icon and screenshots

### 2.0.6 (2021-11-02)
* Fix: Add icon

### 2.0.5 (2021-11-02)
* Fix: Fix screenshot path

### 2.0.4 (2021-11-02)
* Fix: Readme formatting fixes and updates
* Fix: Add screenshots

### 2.0.3 (2021-11-02)
* Fix: Release on wordpress.org

### 2.0.2 (2021-10-30)
* Fix: Bump version

### 2.0.1 (2021-10-30)
* Fix: Add stable tag

### 2.0.0 (2021-10-29)
* Breaking change: change plugin slug to disable-drop-cap
* Breaking change: remove vendor files from repository
* Fix: added automated tests

### 1.3.1 (2021-09-20)
* Fix: Fix deprecation error in WordPress 5.8

### 1.3.0 (2021-07-24)
* Feature: WordPress 5.8 support (thanks @adriantoll)

### 1.2.1 (2021-03-12)
* Fix: Bump tested up to 5.7
* Fix: Re-organize plugin code to be cleaner
* Fix: Change plugin name to "Disable Drop Cap" everywhere. "Remove Drop Cap" is still used as the plugin slug to ensure backwards compatibility

### 1.2.0 (2021-03-11)
* Feature: WordPress 5.7 support
* Fix: Regression in WordPress 5.5

### 1.1.0 (2020-12-16)
* Change: Use server side feature registration to disable dropCap instead of JavaScript
* Fix: WordPress 5.6 support

### 1.0.0 (2020-09-20)
* Initial release
