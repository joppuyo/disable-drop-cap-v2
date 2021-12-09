# Disable Drop Cap (v2)

[![Build Status](https://img.shields.io/github/workflow/status/joppuyo/disable-drop-cap-v2/Build?logo=github)](https://github.com/joppuyo/disable-drop-cap-v2/actions)
[![Test status](https://img.shields.io/github/workflow/status/joppuyo/disable-drop-cap-v2/Test?label=tests&logo=github)](https://github.com/joppuyo/disable-drop-cap-v2/actions)
[![WordPress plugin](https://img.shields.io/wordpress/plugin/v/disable-drop-cap?logo=wordpress)](https://wordpress.org/plugins/disable-drop-cap/)
[![Active installs](https://img.shields.io/wordpress/plugin/installs/disable-drop-cap.svg?logo=wordpress)](https://wordpress.org/plugins/disable-drop-cap/advanced/)
[![WordPress Plugin Rating](https://img.shields.io/wordpress/plugin/stars/disable-drop-cap?logo=wordpress)](https://wordpress.org/plugins/disable-drop-cap/#reviews)

A plugin to disable drop cap option in the Gutenberg editor block editor paragraph block.

### Note for WordPress 5.8

With WordPress 5.8, you can use the new `theme.json` feature to disable drop caps in your theme. Add a `theme.json` file with the following content in the root of your theme.

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

## Support the plugin

Maintaining a WordPress plugin is a lot of work. If you like the plugin, please consider rating it on [WordPress.org](https://wordpress.org/support/plugin/disable-drop-cap/reviews/#new-post). You can also support me on [GitHub sponsors](https://github.com/sponsors/joppuyo). Thank you!
