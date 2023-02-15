<?php

namespace Drupal\layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Fax' block.
 *
 * @Block(
 *   id = "header",
 *   admin_label = @Translation("Header block"),
 * )
 */
class HeaderBlock extends BlockBase {
  // Override BlockPluginInterface methods here.

   /**
   * {@inheritdoc}
   */
  public function build() {
    //Pour définir le output
    $menu=[
        'accueil',
        'lien 1',
        'lien 2',
    ];
    return [
      //'#markup' => '<h1>This is a Header</h1>',
      '#theme' => 'header_block',
      '#content' => $menu,
    ];
  }
}

?>