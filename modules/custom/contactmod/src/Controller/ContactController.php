<?php
namespace Drupal\contactmod\Controller;

use Drupal\Core\Controller\ControllerBase;

class ContactController extends ControllerBase {
  /**
   * Display the markup
   *
   * @return array
   */
  public function showContact() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello! This is the contact form provided by Contact module')
    );
  }
}