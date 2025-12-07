<?php

declare(strict_types=1);

namespace Temis\Corner;

/**
 * Class Error
 * @package Temis\Corner
 */
class Error extends \Error implements CornerInterface
{
    use CornerTrait;
}
