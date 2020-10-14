<?php

namespace Something;

use PHPUnit\Framework\TestCase;

final class MirrorTest extends TestCase
{
    public function testRun(): void
    {
        // Arrange
        $mirror = new Mirror();

        // Act
        $result = $mirror->run(1);

        // Assert
        static::assertEquals(1, $result);
    }
}
