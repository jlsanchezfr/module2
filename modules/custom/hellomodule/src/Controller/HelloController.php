<?php
namespace Drupal\hellomodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello! This is a hello world message to be sure it is working')
    );
  }
}