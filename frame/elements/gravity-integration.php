<?php

namespace RevolvoElements;

use function Breakdance\Elements\control;
use function Breakdance\Elements\controlSection;
use function Breakdance\Integrations\addConditionToControlSection;
use function Breakdance\Integrations\getElementSlugsThatCanHaveFiltering;

add_action('breakdance_loaded', function () {
    \Breakdance\AJAX\register_handler(
        'revolvo_list_gravity_forms',
        'RevolvoElements\listGravityForms',
        'edit',
    );


    if (!class_exists('GFForms')) {
        return;
    }


});

function listGravityForms()
{

    //return ['text' => 'cheese', 'value' => '1'];
    if (!class_exists('GFForms')) {
        return;
    }

    $form_list = \GFAPI::get_forms($active = true, $trash = false, $sort_column = 'title', $sort_dir = 'ASC');

    if (!$form_list)
        return [];


    return array_map(
        function ($form_item) {
            return ['text' => $form_item['title'], 'value' => strval($form_item['id'])];
        },
        $form_list
    );

}