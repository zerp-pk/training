<?php

namespace Zerp\Training\Events;

use Zerp\Training\Models\TrainingType;
use Illuminate\Foundation\Events\Dispatchable;

class DestroyTrainingType
{
    use Dispatchable;

    public function __construct(
        public TrainingType $trainingType
    ) {}
}