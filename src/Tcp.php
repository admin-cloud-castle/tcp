<?php

declare(strict_types=1);

namespace CloudCastle\Tcp;

use CloudCastle\Tcp\Contract\TcpInterface;
use CloudCastle\Tcp\Exception\TcpException;

/**
 * Точка входа пакета Tcp.
 *
 * Заглушка скаффолда: замените на реальный публичный API.
 */
final class Tcp implements TcpInterface
{
    /**
     * Версия пакета для диагностики.
     */
    public const VERSION = '0.1.0';

    /**
     * Возвращает идентификатор пакета Composer.
     */
    #[\Override]
    public function name(): string
    {
        return 'cloud-castle/tcp';
    }

    /**
     * Завершает работу с ошибкой пакета.
     *
     * @throws TcpException
     */
    public function abort(string $message): never
    {
        throw new TcpException($message);
    }
}
