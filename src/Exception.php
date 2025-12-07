<?php

declare(strict_types=1);

namespace Temis\Corner;

/**
 * Class Exception
 * @package Temis\Corner
 */
class Exception extends \Exception implements CornerInterface
{
    use CornerTrait;
}
