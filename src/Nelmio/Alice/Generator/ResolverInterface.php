<?php

/*
 * This file is part of the Alice package.
 *  
 * (c) Nelmio <hello@nelm.io>
 *  
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\Alice\Generator;

use Nelmio\Alice\FixtureSet;
use Nelmio\Alice\Throwable\ResolutionThrowable;

interface ResolverInterface
{
    /**
     * Resolves the loaded parameters and merge the injected ones with them and also resolves the fixture flags.
     * 
     * @param FixtureSet $fixtureSet
     *
     * @throws ResolutionThrowable
     * 
     * @return ResolvedFixtureSet
     */
    public function resolve(FixtureSet $fixtureSet): ResolvedFixtureSet;
}
