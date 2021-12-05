<?php

namespace Joppuyo\DisableDropCap;

class DisableDropCap
{
    private static $instance = null;

    public static function get_instance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    private function __construct()
    {
        add_action('init', [$this, 'initialize']);
    }

    public function initialize()
    {
        global $wp_version;

        if (version_compare($wp_version, '5.8', '>=')) {
            add_filter('block_editor_settings_all', [$this, 'editor_settings_5_8']);
        }

        if (
            version_compare($wp_version, '5.7', '>=') &&
            version_compare($wp_version, '5.8', '<')
        ) {
            add_filter('block_editor_settings', [$this, 'editor_settings_5_7']);
        }

        if (
            version_compare($wp_version, '5.6', '>=') &&
            version_compare($wp_version, '5.7', '<')
        ) {
            add_filter('block_editor_settings', [$this, 'editor_settings_5_6']);
        }

        if (
            version_compare($wp_version, '5.5', '>=') &&
            version_compare($wp_version, '5.6', '<')) {
            add_action('admin_footer', [$this, 'admin_footer']);
        }
    }


    function editor_settings_5_8(array $editor_settings): array
    {
        $editor_settings['__experimentalFeatures']['typography']['dropCap'] = false;
        return $editor_settings;
    }

    function editor_settings_5_7(array $editor_settings): array
    {
        $editor_settings['__experimentalFeatures']['defaults']['typography']['dropCap'] = false;
        return $editor_settings;
    }

    function editor_settings_5_6(array $editor_settings): array
    {
        $editor_settings['__experimentalFeatures']['global']['typography']['dropCap'] = false;
        return $editor_settings;
    }

    function admin_footer()
    {
        echo <<<HTML
<script>
document.addEventListener("DOMContentLoaded", function () {
  var removeDropCap = function(settings, name) {
      
    if (name !== "core/paragraph") {
      return settings;
    }
    var newSettings = Object.assign({}, settings);
    if (
      newSettings.supports &&
      newSettings.supports.__experimentalFeatures &&
      newSettings.supports.__experimentalFeatures.typography &&
      newSettings.supports.__experimentalFeatures.typography.dropCap
    ) {
      newSettings.supports.__experimentalFeatures.typography.dropCap = false;
    }
    return newSettings;
  };
  wp.hooks.addFilter(
    "blocks.registerBlockType",
    "sc/gb/remove-drop-cap",
    removeDropCap,
  );
});
</script>
HTML;
    }

}
