<?php
spl_autoload_register(function($class_name) {
    if (strpos($class_name, 'CognetifFontawesome') === 0) {
        include(PERCH_PATH . '/addons/apps/cognetif_fontawesome/lib/' . $class_name . '.class.php');
        return true;
    }
    return false;
});

PerchSystem::register_shortcode_provider('CognetifFontawesome_ShortcodeProvider');
