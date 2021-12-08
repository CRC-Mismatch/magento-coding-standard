<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento2\Tests\Eslint;

/**
 * Class ClickEventShorthandTest
 *
 * Test Eslint Rule: jquery-no-click-event-shorthand.js
 */
class ClickEventShorthandTest extends AbstractEslintTestCase
{
    public function testExecute(): void
    {
        $this->assertFileContainsError(
            'ClickEventShorthandTest.js',
            [
                'Instead of .blur(fn) use .on("blur", fn). Instead of .blur() use .trigger("blur")',
                'Instead of .focus(fn) use .on("focus", fn). Instead of .focus() use .trigger("focus")',
            ]
        );
    }
}
