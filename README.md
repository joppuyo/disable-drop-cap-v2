# Disable Drop Cap (v2)

Plugin to disable drop cap in Gutenberg editor paragraph block.

### Note for WordPress 5.8

With WordPress 5.8, you can use the new `theme.json` feature to disable drop caps in your theme. Add a `theme.json` with the following content in the root of your theme.

```json
{
    "version": 1,
    "settings": {
        "typography": {
            "dropCap": false
        }
    }
}
```

This plugin does continue working in WordPress 5.8 but be aware of this alternative solution.

## Requirements

* WordPress 5.5, 5.6, 5.7 or 5.8
* PHP 7.0 or later

## Installation

### WordPress plugin directory

The plugin [is available](https://wordpress.org/plugins/disable-drop-cap/) in the WordPress plugin directory.

### Composer

The plugin can be installed using Composer using the [wpackagist.org](https://wpackagist.org/) repository.

```
composer require wpackagist-plugin/disable-drop-cap
```
