<?php

declare(strict_types=1);

namespace CloudCastle\Tcp\Tests\Unit;

use CloudCastle\Tcp\Exception\TcpException;
use CloudCastle\Tcp\Tcp;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * Модульные тесты заглушки Tcp.
 */
#[CoversClass(Tcp::class)]
final class TcpTest extends TestCase
{
    /**
     * Проверяет, что name() возвращает composer-имя пакета.
     */
    public function testNameReturnsComposerPackageName(): void
    {
        $package = new Tcp();

        self::assertSame('cloud-castle/tcp', $package->name());
    }

    /**
     * Проверяет, что abort() бросает TcpException.
     */
    public function testAbortThrowsTcpException(): void
    {
        $package = new Tcp();

        $this->expectException(TcpException::class);
        $this->expectExceptionMessage('тест');

        $package->abort('тест');
    }
}
