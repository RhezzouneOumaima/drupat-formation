<?php

namespace Drupal\layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Fax' block.
 *
 * @Block(
 *   id = "articles_block",
 *   admin_label = @Translation("Articles block"),
 * )
 */
class ArticlesBlock extends BlockBase {
  // Override BlockPluginInterface methods here.

   /**
   * {@inheritdoc}
   */
  public function build() {
    //Pour définir le output
   $entity= \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadByProperties(['vid'=>'tags']);
   $terms=[];
   if(!empty($entity))
   {
    foreach($entity as $key => $term)
    {
     $terms[$term->id()]=$term->get('name')->getValue()[0]['value'];
    }
   }
  
    return [
      '#theme'=>'articles_block',
      '#terms'=>$terms,
    ];
  }
}

?>