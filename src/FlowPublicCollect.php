<?php

namespace Xtompie\FlowCollect;

use Illuminate\Support\Collection;

trait FlowPublicCollect
{
    public function collect()
    {
        return new Collection($this->data);
    }
}
