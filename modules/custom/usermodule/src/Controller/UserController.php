<?php
namespace Drupal\usermodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class UserController {
  /**
   * Display the markup
   *
   * @return array
   */ 
  public function showUser($usuario) {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('This a module made by the user @usuario',['@usuario'=> $name,]),
    );
  }
}