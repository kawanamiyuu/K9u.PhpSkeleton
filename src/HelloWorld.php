<?php

declare(strict_types=1);

namespace K9u\PhpSkeleton;

class HelloWorld
{
    /**
     * @var string
     */
    private $greeting;

    /**
     * HelloWorld constructor.
     *
     * @param string $greeting
     */
    public function __construct(string $greeting)
    {
        $this->greeting = $greeting;
    }

    /**
     * @return string
     */
    public function getGreeting(): string
    {
        return $this->greeting;
    }
}
