<?php

namespace Zerp\Training\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\Training\Models\TrainingTask;

class DestroyTrainingTask
{
    use Dispatchable;

    public function __construct(
        public TrainingTask $task
    ) {}
}