<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\BlockBundle\Exception\Filter;

use Sonata\BlockBundle\Model\BlockInterface;

/**
 * This filter will handle all exceptions.
 *
 * @final since sonata-project/block-bundle 3.0
 *
 * @author Olivier Paradis <paradis.olivier@gmail.com>
 */
final class KeepAllFilter implements FilterInterface
{
    public function handle(\Throwable $exception, BlockInterface $block): bool
    {
        return true;
    }
}
