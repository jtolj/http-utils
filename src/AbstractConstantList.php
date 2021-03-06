<?php

declare(strict_types = 1);

namespace Skrypnet\HttpUtils;

use ReflectionClass;
use ReflectionException;

/**
 * @author Jarosław Brzychcy <info@skrypnet.pl>
 */
abstract class AbstractConstantList
{
    /**
     * @return array
     * @throws ReflectionException
     */
    public static function getAll(): array
    {
        return (new ReflectionClass(static::class))->getConstants();
    }
}
