<?php

class ReproduceTest extends PHPUnit\Framework\TestCase
{
    public function testThrowExceptionIsNotReportedInPhpStorm(): void
    {
        $this->expectException(\Exception::class);

        throw new \Exception();
    }
}
