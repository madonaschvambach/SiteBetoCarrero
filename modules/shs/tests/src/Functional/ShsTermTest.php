<?php

namespace Drupal\Tests\shs\Functional;

use Drupal\Tests\shs\Functional\ShsTestTrait;

/**
 * Test term functions in SHS.
 *
 * @group shs
 */
class ShsTermTest extends ShsTestBase {

  use ShsTestTrait;

  /**
   * Tests getting the first level of terms.
   */
  public function testFirstLevel(): void {
    // Get all predefined terms with no parent.
    $expected = array_filter($this->getTermStructure(), function ($parent) {
      return empty($parent);
    });

    $field_name = 'shs-' . strtr($this->fieldName, ['_' => '-']);
    $request_url = "shs-term-data/{$field_name}/{$this->vocabulary->id()}/0";

    // Request term data.
    $data = $this->drupalGetJson($request_url);

    $expected_count = count($expected);
    $this->assertCount($expected_count, $data, "JSON callback returned {$expected_count} result");

    // Check if returned data is correct.
    $terms_with_children_expected = [
      'aaa 1',
      'aaa 3',
    ];
    // Get keys of all returned terms where "hasChildren" is true.
    $keys = array_flip(array_keys(array_column($data, 'hasChildren'), TRUE, TRUE));
    $terms_with_children = array_intersect_key($data, $keys);
    $this->assertCount(2, $terms_with_children, 'Expected 2 terms having children');

    foreach ($terms_with_children_expected as $name) {
      $term_exists = array_keys(array_column($terms_with_children, 'name'), $name, TRUE);
      $this->assertCount(1, $term_exists, "Expected term '{$name}' to have children.");
    }
  }

  /**
   * Tests getting children of a specific term.
   */
  public function testChildren(): void {
    $parent = $this->termIds['aaa 1'];

    $field_name = 'shs-' . strtr($this->fieldName, ['_' => '-']);
    $request_url = "shs-term-data/{$field_name}/{$this->vocabulary->id()}/{$parent}";

    // Request term data.
    $data = $this->drupalGetJson($request_url);

    $this->assertCount(4, $data, "JSON callback returned 4 result");

  }

}
