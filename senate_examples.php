<?php

require_once 'examples.civix.php';

use CRM_Senate_Examples_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function senate_examples_civicrm_config(&$config): void {
  _senate_examples_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function senate_examples_civicrm_install(): void {
  _senate_examples_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function senate_examples_civicrm_enable(): void {
  _senate_examples_civix_civicrm_enable();
}
