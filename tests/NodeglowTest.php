<?php
/**
 * Tests for nodeGlow
 */

use PHPUnit\Framework\TestCase;
use Nodeglow\Nodeglow;

class NodeglowTest extends TestCase {
    private Nodeglow $instance;

    protected function setUp(): void {
        $this->instance = new Nodeglow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodeglow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
