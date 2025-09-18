<?php

// Angular module AngularExample.
// @see https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
return [
  'js' => [
    'ang/AngularExample.js',
    'ang/AngularExample/*.js',
    'ang/AngularExample/*/*.js',
  ],
  'css' => [
    'ang/AngularExample.css',
  ],
  'partials' => [
    'ang/AngularExample',
  ],
  'requires' => ['crmUi', 'crmUtil', 'ngRoute'],
  'settings' => [],
];
