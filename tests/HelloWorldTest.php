<?php

declare(strict_types=1);

namespace K9u\PhpSkeleton;

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testGetGreeting(): void
    {
        $helloWorld = new HelloWorld("hello");
        $this->assertSame("hello", $helloWorld->greeting());
    }
}
