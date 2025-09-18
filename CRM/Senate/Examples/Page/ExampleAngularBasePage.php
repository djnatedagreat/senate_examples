<?php
use CRM_Senate_Examples_ExtensionUtil as E;

class CRM_Senate_Examples_Page_ExampleAngularBasePage extends CRM_Core_Page {

  public function run() {

    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('Bluebird Example &mdash; Embedding an Afform'));

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));

    Civi::service('angularjs.loader')->addModules(['afsearchExampleCountrySearchForm']);
    parent::run();
  }

}
