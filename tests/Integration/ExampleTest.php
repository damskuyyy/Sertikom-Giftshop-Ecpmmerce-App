<?php

namespace Tests\Integration;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        dd($_ENV['test']);
        $this->assertTrue(true);
    }
}