<?php
/**
 * Tests for NodeForge
 */

use PHPUnit\Framework\TestCase;
use Nodeforge\Nodeforge;

class NodeforgeTest extends TestCase {
    private Nodeforge $instance;

    protected function setUp(): void {
        $this->instance = new Nodeforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodeforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
