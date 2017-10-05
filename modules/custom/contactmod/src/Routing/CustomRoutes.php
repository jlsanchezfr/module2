<?php
/**
 * @file
 *
 * Contains \Drupal\contactmod\Routing\CustomRoutes
 */
namespace Drupal\contactmod\Routing;

use Symfony\Component\Routing\Route;

class CustomRoutes {
  public function routes() {
    $routes = [];
    // Create custom/contact route programmatically
    $routes['contactmod.showContact'] = new Route(
      // Path definition
      'custom',
      // Routes default
      [
        '_controller' => '\Drupal\contactmod\Controller\ContactController::showContent',
        '_title' => 'Contact Form',
      ],
      // Route requirements
      [
        '_permission' => 'access content'
      ]
    );
    return $routes;
  }
} 