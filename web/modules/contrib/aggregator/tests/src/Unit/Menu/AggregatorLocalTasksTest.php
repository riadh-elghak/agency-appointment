<?php

namespace Drupal\Tests\aggregator\Unit\Menu;

use Drupal\Tests\Core\Menu\LocalTaskIntegrationTestBase;

/**
 * Tests existence of aggregator local tasks.
 *
 * @group aggregator
 */
class AggregatorLocalTasksTest extends LocalTaskIntegrationTestBase {

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    $this_dir = dirname(__DIR__, 4);
    // Support GitLab CI's module directory.
    if ($project_name = getenv('CI_PROJECT_NAME')) {
      $relative_path_to_module = 'modules/custom/' . $project_name;
    }
    else {
      $relative_path_to_module = substr($this_dir, strlen(DRUPAL_ROOT));
    }
    $this->directoryList = ['aggregator' => $relative_path_to_module];
    parent::setUp();
  }

  /**
   * Tests local task existence.
   *
   * @dataProvider getAggregatorAdminRoutes
   */
  public function testAggregatorAdminLocalTasks($route) {
    $this->assertLocalTasks($route, [
      0 => ['aggregator.admin_overview', 'aggregator.admin_settings'],
    ]);
  }

  /**
   * Provides a list of routes to test.
   */
  public function getAggregatorAdminRoutes() {
    return [
      ['aggregator.admin_overview'],
      ['aggregator.admin_settings'],
    ];
  }

  /**
   * Checks aggregator source tasks.
   *
   * @dataProvider getAggregatorSourceRoutes
   */
  public function testAggregatorSourceLocalTasks($route) {
    $this->assertLocalTasks($route, [
      0 => ['entity.aggregator_feed.canonical', 'entity.aggregator_feed.edit_form', 'entity.aggregator_feed.delete_form'],
    ]);
  }

  /**
   * Provides a list of source routes to test.
   */
  public function getAggregatorSourceRoutes() {
    return [
      ['entity.aggregator_feed.canonical'],
      ['entity.aggregator_feed.edit_form'],
    ];
  }

}
