<?php
/**
 * @file
 *
 * Contains \Drupal\hellomodule\Routing\CustomRoutes
 */
namespace Drupal\hellomodule\Routing;

use Symfony\Component\Routing\Route;

class CustomRoutes {
  public function routes() {
    $routes = [];
    // Create mypage route programmatically
    $routes['hellomodule.content'] = new Route(
      // Path definition
      'hello',
      // Route defaults
      [
        '_controller' => '\Drupal\hellomodule\Controller\HelloController::content',
        '_title' => 'Hello World Message from custom module',
      ],
      // Route requeriments
      [
        '_permission' => 'view hellomodule pages'
      ]
    );
    return $routes;
  }
}