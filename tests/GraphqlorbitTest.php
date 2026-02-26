<?php
/**
 * Tests for GraphqlOrbit
 */

use PHPUnit\Framework\TestCase;
use Graphqlorbit\Graphqlorbit;

class GraphqlorbitTest extends TestCase {
    private Graphqlorbit $instance;

    protected function setUp(): void {
        $this->instance = new Graphqlorbit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Graphqlorbit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
