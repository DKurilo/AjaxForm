<?php

$properties = array();

$tmp = array(
    'snippet' => array(
        'type' => 'textfield',
        'value' => 'FormIt',
    ),
    'actionUrl' => array(
        'type' => 'textfield',
        'value' => '[[+assetsUrl]]action.php',
    ),
    'formSelector' => array(
        'type' => 'textfield',
        'value' => 'ajax_form',
    ),
    'objectName' => array(
        'type' => 'textfield',
        'value' => 'AjaxForm',
    ),
);

foreach ($tmp as $k => $v) {
    $properties[] = array_merge(
        array(
            'name' => $k,
            'desc' => PKG_NAME_LOWER . '_prop_' . $k,
            'lexicon' => PKG_NAME_LOWER . ':properties',
        ), $v
    );
}

return $properties;
