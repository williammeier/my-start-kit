<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Profile;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('index');

    Route::get('profile', Profile::class)->name('profile.index');
});
