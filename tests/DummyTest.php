<?php

/**
 * (c) Meritoo.pl, http://www.meritoo.pl
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Meritoo\Test\AdminBundle;

use PHPUnit\Framework\TestCase;

/**
 * Dummy test.
 * Used to proof that PHPUnit is working correctly.
 *
 * @author    Meritoo <github@meritoo.pl>
 * @copyright Meritoo <http://www.meritoo.pl>
 */
class DummyTest extends TestCase
{
    public function testDummy(): void
    {
        static::assertSame(1, 1);
    }
}
