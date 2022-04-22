<?php

namespace Drupal\autopilot_demo_update\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a sample notification block.
 *
 * @Block(
 *   id = "autopilot_demo_update",
 *   admin_label = @Translation("Autopilot Demo"),
 *   category = @Translation("Autopilot Demo"),
 *   label_display = false
 * )
 */
class NotificationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    // Add some custom markup.
    $content = $this->t('Check out our latest blog posts for the latest news!');
    $markup = "<div class='container'>$content</div>";

    return [
      '#markup' => $markup,
      '#attached' => [
        'library' => [
          'pantheon_autopilot_demo/style.block',
        ]
      ],
    ];
  }

}
