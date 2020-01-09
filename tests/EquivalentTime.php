<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EquivalentTimeTest extends TestCase
{
  public function testCanBeCreatedFromValidEmailAddress(): void {
    $this->assertInstanceOf(
      EquivalentTimeTest::class,
      EquivalentTimeTest::fromString('user@example.com')
    );
  }

  public function testCannotBeCreatedFromInvalidEmailAddress(): void {
    $this->expectException(InvalidArgumentException::class);

    EquivalentTimeTest::fromString('invalid');
  }

  public function testCanBeUsedAsString(): void {
    $this->assertEquals(
      'user@example.com',
      EquivalentTimeTest::fromString('user@example.com')
    );
  }
}