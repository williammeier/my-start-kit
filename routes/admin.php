<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Profile;
use App\Livewire\Admin\Welcome;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', Welcome::class)->name('index');

    Route::get('profile', Profile::class)->name('profile.index');
});
