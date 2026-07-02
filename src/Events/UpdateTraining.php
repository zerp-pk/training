<?php

namespace Zerp\Training\Events;

use Zerp\Training\Models\Training;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;

class UpdateTraining
{
    use Dispatchable;

    public function __construct(
        public Request $request,
        public Training $training
    ) {}
}