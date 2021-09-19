<?php

namespace MasterAWSS\InputFieldComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Georgechitechi\LivewireCrud\Skeleton\SkeletonClass
 */
class InputFieldComponentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'input-field-components';
    }
}
