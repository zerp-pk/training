<?php

namespace Zerp\Training\Events;

use Zerp\Training\Models\Trainer;
use Illuminate\Foundation\Events\Dispatchable;

class DestroyTrainer
{
    use Dispatchable;

    public function __construct(
        public Trainer $trainer
    ) {}
}