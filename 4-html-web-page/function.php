<?php  

function isChecked($inputName, $value){
    if(isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value,$_REQUEST[$inputName])){
        echo" checked ";
    }
}

function isFruitChecked($value){
    if(isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value,$_REQUEST['fruits'])){
        echo" checked ";
    }
}

function displayOptions($options, $selectedValues){
    foreach ($options as $option) {
        $option = strtolower( $option );
        $selected = '';
        if( in_array($option, $selectedValues)){
            $selected = "selected";
        }
        printf("<option value='%s' %s>%s</option>\n", $option, $selected, ucwords($option));
    }
}