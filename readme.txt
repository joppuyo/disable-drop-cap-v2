# Disable Drop Cap
Requires at least: 5.5
Tested up to: 5.8
Requires PHP: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://github.com/sponsors/joppuyo
Stable Tag: 2.0.3

Plugin to disable drop cap option in the Gutenberg editor block editor paragraph block

## Description

Plugin to disable drop cap option in the Gutenberg block editor editor paragraph block.

### Note for WordPress 5.8

With WordPress 5.8, you can use the new `theme.json` feature to disable drop caps in your theme. Add a `theme.json` with the following content in the root of your theme.

`{
    "version": 1,
    "settings": {
        "typography": {
            "dropCap": false
        }
    }
}`

This plugin does continue working in WordPress 5.8 but be aware of this alternative solution.

## Screenshots

1. Without the plugin, the block editor paragraph block has an option for drop cap
2. When the plugin is installed, the drop cap option has been removed

## Changelog

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
