<?php 
namespace Drupal\feedsparser\Plugin\aggregator\processor;

use Drupal\aggregator\Entity\Item;
use Drupal\aggregator\FeedInterface;
use Drupal\aggregator\Plugin\aggregator\processor\DefaultProcessor;

/**
 * Extends the default feed processor.
 *
 * @AggregatorProcessor(
 *   id = "feedsparser_aggregator_processor",
 *   title = @Translation("feedsparser Feed Processor"),
 *   description = @Translation("Custom feed processor for Mon Module."),
 * )
 */
class FeedsParserAggregatorProcessor extends DefaultProcessor {
  
  /**
   * {@inheritdoc}
   */
  public function process(FeedInterface $feed) {
    if(!empty($feed->items)){
      foreach ($feed->items as $key => $item) {
        $new_article = [
          'type' => 'article_rss',
          'title' => $item['title'],
          'body' => [
            'value' => $item['description'],
            'format' => 'full_html',
          ],
          'created' => $item['timestamp'],
        ];
        $node = \Drupal\node\Entity\Node::create($new_article);
        $node->save();
      }
    }
  }
}
