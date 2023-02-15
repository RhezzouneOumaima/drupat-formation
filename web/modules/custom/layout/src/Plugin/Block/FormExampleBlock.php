<?php

namespace Drupal\layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Fax' block.
 *
 * @Block(
 *   id = "form_exapmle_block",
 *   admin_label = @Translation("Form Example block"),
 * )
 */
class FormExampleBlock extends BlockBase {
  // Override BlockPluginInterface methods here.

   /**
   * {@inheritdoc}
   */
  public function build() {
    //Pour définir le output
    $form = \Drupal::formBuilder()->getForm('Drupal\layout\Form\FormTest');
    $menu=[
        'accueil',
        'lien 1',
        'lien 2',
    ];
    return $form;
  }
}

?>