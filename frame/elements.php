<?php

namespace RevolvoElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action(
    'breakdance_loaded',
    function () {
        \Breakdance\ElementStudio\registerSaveLocation(
            getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
            'RevolvoElements',
            'element',
            'Revolvo Elements',
            false
        );

        \Breakdance\ElementStudio\registerSaveLocation(
            getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
            'RevolvoElements',
            'macro',
            'Revolvo Macros',
            false,
        );

        \Breakdance\ElementStudio\registerSaveLocation(
            getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
            'RevolvoElements',
            'preset',
            'Revolvo Presets',
            false,
        );
    },
    // register elements before loading them
    9
);
