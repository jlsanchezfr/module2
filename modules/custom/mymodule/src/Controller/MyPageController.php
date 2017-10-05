<?php
/**
 * @file 
 * Contains \Drupal\mymodule\Controller\MyPageController class.
 */

 namespace Drupal\mymodule\Controller;

 use Drupal\Core\Controller\ControllerBase;

 /**
  * Returns responses for my Module module.
  */
class MyPageController extends ControllerBase {
  /*
   * Returns markup for our custom page
   */
  public function customPage() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Welcome to my custom page!'),
    );
  }

  public function cats($name) {
    return [
      '#type' => 'markup',
      '#markup' => t('My cats name is: @name',[
        '@name' => $name,
      ]),
      ];
  } 
}