<?php

namespace RevolvoElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "RevolvoElements\\GravityForm",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GravityForm extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'SquareIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Gravity Form';
    }

    static function className()
    {
        return 'autogenerated-re-gravityform';
    }

    static function category()
    {
        return 'form';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return ['content' => ['form_settings' => ['form_selection' => '1', 'display_title' => false, 'display_description' => false, 'use_ajax' => false]]];
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [];
    }

    static function contentControls()
    {
        return [
            c(
                "form_settings",
                "Form Settings",
                [
                    c(
                        "form_selection",
                        "Form Selection",
                        [],
                        ['type' => 'dropdown', 'layout' => 'vertical', 'dropdownOptions' => ['populate' => ['path' => '', 'text' => '', 'value' => '', 'fetchDataAction' => 'revolvo_list_gravity_forms', 'fetchContextPath' => 'content.form_settings.form_selection', 'refetchPaths' => []]]],
                        false,
                        false,
                        [],
                    ),
                    c(
                        "display_title",
                        "Display Title",
                        [],
                        ['type' => 'toggle', 'layout' => 'inline'],
                        false,
                        false,
                        [],
                    ),
                    c(
                        "display_description",
                        "Display Description",
                        [],
                        ['type' => 'toggle', 'layout' => 'inline'],
                        false,
                        false,
                        [],
                    ),
                    c(
                        "display_if_inactive",
                        "Display If Inactive",
                        [],
                        ['type' => 'toggle', 'layout' => 'inline'],
                        false,
                        false,
                        [],
                    ),
                    c(
                        "use_ajax",
                        "Use AJAX",
                        [],
                        ['type' => 'toggle', 'layout' => 'inline'],
                        false,
                        false,
                        [],
                    ),
                    c(
                        "tab_index",
                        "Tab Index",
                        [],
                        ['type' => 'number', 'layout' => 'inline'],
                        false,
                        false,
                        [],
                    )
                ],
                ['type' => 'section', 'layout' => 'vertical'],
                false,
                false,
                [],
            )
        ];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",];
    }

    static function spacingBars()
    {
        return false;
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return ['content.form_settings.display_title', 'content.form_settings.display_description', 'content.form_settings.form_selection'];
    }
}
