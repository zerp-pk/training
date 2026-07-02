<?php

use Illuminate\Support\Facades\Route;
use Zerp\Training\Http\Controllers\TrainingTypeController;
use Zerp\Training\Http\Controllers\TrainerController;
use Zerp\Training\Http\Controllers\TrainingController;
use Zerp\Training\Http\Controllers\TrainingTaskController;
use Zerp\Training\Http\Controllers\TrainingFeedbackController;

Route::middleware(['web', 'auth', 'verified', 'PlanModuleCheck:Training'])->group(function () {
    Route::prefix('training')->name('training.')->group(function () {
        Route::resource('training-types', TrainingTypeController::class);
        Route::resource('trainers', TrainerController::class);
        Route::resource('trainings', TrainingController::class);
        Route::resource('trainings.tasks', TrainingTaskController::class)->except(['destroy']);
        Route::patch('trainings/{training}/tasks/{task}/complete', [TrainingTaskController::class, 'complete'])->name('trainings.tasks.complete');
        Route::delete('tasks/{task}', [TrainingTaskController::class, 'destroy'])->name('tasks.destroy');
        Route::resource('tasks.feedbacks', TrainingFeedbackController::class);
    });
});