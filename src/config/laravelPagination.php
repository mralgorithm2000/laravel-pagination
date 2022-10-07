<?php

use Illuminate\Support\Facades\Facade;

return [

    /*
    |--------------------------------------------------------------------------
    | Dark/Light Mode
    |--------------------------------------------------------------------------
    |
    | set 'light' to get lightmode
    | set 'dark' to get darkmode
    |
    */

    'mode' => 'dark', // light/dark

    /*
    |--------------------------------------------------------------------------
    | NEXT button
    |--------------------------------------------------------------------------
    |
    | Examples:
    |
    | for font-awesome
    | <i class="fa fa-arrow-right"></i>
    |
    | for google font icon:
    | <i class="material-icons-round">arrow_right</i>
    |
    | for simple text:
    | next
    |
    | for multilang support
    | __('yourTranslationFile.next') || replace parameters according to your language files
    */

    'next' => ' <i class="fa fa-arrow-right"></i>',

    /*
    |--------------------------------------------------------------------------
    | PREVIOUS button
    |--------------------------------------------------------------------------
    |
    | Examples:
    |
    | for font-awesome
    | <i class="fa fa-arrow-left"></i>
    |
    | for google font icon:
    | <i class="material-icons-round">arrow_left</i>
    |
    | for simple text:
    | next
    |
    | for multilang support
    | __('yourTranslationFile.previous') || replace parameters according to your language files
    */

    'previous' => '<i class="fa fa-arrow-left"></i>',
];
