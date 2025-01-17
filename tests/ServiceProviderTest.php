<?php

declare(strict_types=1);

/*
 * This file is part of Alt Three Segment.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Synchro\Segment\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Synchro\Segment\SegmentServiceProvider;

/**
 * This is the service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ServiceProviderTest extends AbstractPackageTestCase
{
    use ServiceProviderTrait;

    protected static function getServiceProviderClass(): string
    {
        return SegmentServiceProvider::class;
    }
}
