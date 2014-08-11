<?php

namespace Jjanvier\Library\Crowdin\Synchronizer;

/**
 * Interface SynchronizerInterface
 *
 * Synchronize your Crowdin translations with your project
 */
interface SynchronizerInterface
{
    /**
     * Synchronize the translations
     */
    public function synchronize();
}
