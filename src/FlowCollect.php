<?php

namespace Xtompie\FlowCollect;

use Illuminate\Support\Collection;

trait FlowCollect
{
    protected function collect()
    {
        return new Collection($this->data);
    }
}
