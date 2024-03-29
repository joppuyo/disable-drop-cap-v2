# Disable Drop Cap (v2)

![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/joppuyo/disable-drop-cap-v2/build.yml?branch=main&logo=github)
![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/joppuyo/disable-drop-cap-v2/test.yml?branch=main&logo=github&label=tests)
[![WordPress plugin](https://img.shields.io/wordpress/plugin/v/disable-drop-cap?logo=wordpress)](https://wordpress.org/plugins/disable-drop-cap/)
[![Active installs](https://img.shields.io/wordpress/plugin/installs/disable-drop-cap.svg?logo=wordpress)](https://wordpress.org/plugins/disable-drop-cap/advanced/)
[![WordPress Plugin Rating](https://img.shields.io/wordpress/plugin/stars/disable-drop-cap?logo=wordpress)](https://wordpress.org/plugins/disable-drop-cap/#reviews)
[![WordPress Plugin Required PHP Version](https://img.shields.io/wordpress/plugin/required-php/disable-drop-cap)](https://wordpress.org/plugins/disable-drop-cap/)
[![WordPress Plugin: Required WP Version](https://img.shields.io/wordpress/plugin/wp-version/disable-drop-cap?label=required&logo=wordpress)](https://wordpress.org/plugins/disable-drop-cap/)
[![WordPress Plugin: Tested WP Version](https://img.shields.io/badge/dynamic/json?label=tested&logo=wordpress&prefix=v&color=green&query=%24.tested&url=https%3A%2F%2Fapi.wordpress.org%2Fplugins%2Finfo%2F1.0%2Fdisable-drop-cap.json)](https://wordpress.org/plugins/disable-drop-cap/)
[![Actively Maintained](https://img.shields.io/badge/Maintenance%20Level-Actively%20Maintained-green.svg)](https://gist.github.com/cheerfulstoic/d107229326a01ff0f333a1d3476e068d)

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

* WordPress 5.5, 5.6, 5.7, 5.8, 5.9 or 6.0
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

If you are interested, you can also check out my other WordPress plugins:

* [Disable Media Pages](https://wordpress.org/plugins/disable-media-pages/)
* [Disable Customizer](https://wordpress.org/plugins/customizer-disabler/)
* [ACF Image Aspect Ratio Crop](https://wordpress.org/plugins/acf-image-aspect-ratio-crop/)

## Maintanance level

[![Actively Maintained](https://img.shields.io/badge/Maintenance%20Level-Actively%20Maintained-green.svg)](https://gist.github.com/cheerfulstoic/d107229326a01ff0f333a1d3476e068d)

This plugin is feature complete so there likely won't be any new features. However, it's still maintained and updated so it's compatible with latest WordPress versions.
