<?php

namespace Timmoh\MailcoachCustomPlaceholder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Timmoh\MailcoachCustomPlaceholder\Skeleton\SkeletonClass
 */
class MailcoachCustomPlaceholderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mailcoach-custom-placeholder';
    }
}
