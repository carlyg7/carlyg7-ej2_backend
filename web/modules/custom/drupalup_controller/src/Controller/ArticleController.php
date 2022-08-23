<?php

namespace Drupal\drupalup_controller\Controller;

class ArticleController {

  public function page() {

    $items = array(
      array('name' => 'Articulo uno'),
      array('name' => 'Articulo dos'),
      array('name' => 'Articulo tres'),
      array('name' => 'Articulo cuatro'),
    );

    return array(
      '#theme' => 'article_list',
      '#items' => $items,
      '#title' => 'Mi Articulo nuevo'
    );
  }
}