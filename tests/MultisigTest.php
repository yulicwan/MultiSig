<?php
/**
 * Tests for MultiSig
 */

use PHPUnit\Framework\TestCase;
use Multisig\Multisig;

class MultisigTest extends TestCase {
    private Multisig $instance;

    protected function setUp(): void {
        $this->instance = new Multisig(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Multisig::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
