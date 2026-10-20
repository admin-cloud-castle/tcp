<?php

declare(strict_types=1);

namespace CloudCastle\Tcp\Contract;

/**
 * Контракт публичного API пакета Tcp.
 */
interface TcpInterface
{
    /**
     * Возвращает идентификатор пакета Composer.
     */
    public function name(): string;
}
