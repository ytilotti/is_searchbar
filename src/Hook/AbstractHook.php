<?php

declare(strict_types=1);

namespace Oksydan\IsSearchbar\Hook;

use Context;
use Module;

abstract class AbstractHook implements HookInterface
{
    protected $module;
    protected $context;

    public function __construct(Module $module, Context $context)
    {
        $this->module = $module;
        $this->context = $context;
    }
}
