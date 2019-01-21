<?php

class CognetifFontawesome_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['cfa'];

    public function get_shortcode_replacement($Shortcode, $Tag)
    {
        $atts = $Shortcode->attributes;

        $faKey = array_shift($atts);
        $faClass = implode(' ', $atts);

        return sprintf('<i class="%s fa-%s %s"></i>', $this->getFaNamespace($faKey), $faKey, $faClass);
    }

    private function getFaNamespace($faKey)
    {
        if (!defined('COGNETIF_FONTAWESOME_PRECEDENCE')) {
            define('COGNETIF_FONTAWESOME_PRECEDENCE', 'regular,light,solid');
        }


        $sitePrecedence = array_merge(['brands'], explode(',', COGNETIF_FONTAWESOME_PRECEDENCE));

        $icons = json_decode(file_get_contents(__DIR__ . '/fa_icons.json'), true);

        if (array_key_exists($faKey, $icons)) {

            foreach ($sitePrecedence as $namespace) {
                if (in_array($namespace, $icons[$faKey])) {
                    return $this->mapNamespace($namespace);
                }
            }
        }
        return "";
    }

    private function mapNamespace($namespace)
    {
        $map = [
            'brands' => 'fab',
            'regular' => 'far',
            'light' => 'fal',
            'solid' => 'fas',
        ];

        if (array_key_exists($namespace, $map)) {
            return $map[$namespace];
        } else {
            return '';
        }
    }
}
