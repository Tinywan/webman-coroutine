<?php
/**
 * @author workbunny/Chaz6chez
 * @email chaz6chez1993@outlook.com
 */
declare(strict_types=1);

namespace Workbunny\WebmanCoroutine\Handlers;

use Webman\Http\Request;
use Workbunny\WebmanCoroutine\CoroutineServerInterface;
use Workbunny\WebmanCoroutine\CoroutineWorkerInterface;
use Workerman\Connection\ConnectionInterface;

interface HandlerInterface
{
    /**
     * 用于判断当前环境是否可用
     *
     * @return bool 返回是否可用
     */
    public static function available(): bool;

    /**
     * 执行协程处理
     *
     * @param CoroutineServerInterface $app
     * @param mixed|ConnectionInterface $connection
     * @param mixed|Request $request
     * @return mixed
     */
    public static function run(CoroutineServerInterface $app, mixed $connection, mixed $request): mixed;

    /**
     * 执行协程处理
     *
     * @param CoroutineWorkerInterface $app
     * @param mixed $worker
     * @return mixed
     */
    public static function start(CoroutineWorkerInterface $app, mixed $worker): mixed;
}
