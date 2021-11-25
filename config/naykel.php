<?php

return [

    /**
     * ----------------------------------------------------------------------
     * Account Features
     * ----------------------------------------------------------------------
     *
     * Fortify routes are created based on the Fortify features array. This
     * account array is used to show or hide elements throughout the site.
     *
     */
    'account' => [
        'register' => env('NK_ALLOW_REGISTER', true),
    ],


    /**
     * ----------------------------------------------------------------------
     * Basic Settings
     * ----------------------------------------------------------------------
     *
     */

    'logo' => [
        'path' => env('NK_LOGO_PATH', '/images/logo.svg'),
        'height' => env('NK_LOGO_HEIGHT', ''), // don't set default
        'sidebar_path' => env('NK_LOGO_SIDEBAR_PATH', '/images/logo.svg'),
        'sidebar_height' => env('NK_LOGO_HEIGHT', '40'),
    ],

    'icon' => env('NK_ICON', '/images/favicon.ico'),
    'copyright' => env('NK_COPYRIGHT', 'NAYKEL'), // footer copyright company

    'date_format' => env('NK_DATE_FORMAT', 'm/d/Y'),
    'date_format_js' => env('NK_DATE_FORMAT_JS', 'MM/DD/YYYY'),

    // Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
    // Carbon::parse($value)->format(config('app.date_format'));

    /**
     * ----------------------------------------------------------------------
     * Application Template
     * ----------------------------------------------------------------------
     * This value is the name of the default blade template for the application.
     * app.blade, bare-bones.php
     */
    'template' => env('NK_DEFAULT_TEMPLATE', 'app'),


    /**
     * ----------------------------------------------------------------------
     * Google Recapture Settings
     * ----------------------------------------------------------------------
     *
     */
    'recaptcha' => [
        'site_key' => env('RECAPTCHA_SITE_KEY', ''),
        'secret_key' => env('RECAPTCHA_SECRET_KEY', '')
    ],


];
