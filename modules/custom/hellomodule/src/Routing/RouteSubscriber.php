<?php

namespace Drupal\hellomodule\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

class RouteSubscriber extends RouteSubscriberBase {
  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Change  path of hellomodule.hello to use hyphen
    if($route = $collection->get('hellomodule.hello')) {
      $route -> setPath('/page');
    }
  }
}