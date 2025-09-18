<?php

use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Types\Relations\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;

Route::prefix('dashboard')->group(function () {

    Route::get('skills', [SkillsController::class, 'skills'])->name('dashboard.skills');
    Route::post('', [SkillsController::class, 'create'])->name('dashboard.skill.create');
    Route::delete('{skill_id}/delete', [SkillsController::class, 'delete'])->name('dashboard.skill.delete');
    Route::put('{skill_id}/edit', [SkillsController::class, 'update'])->name('dashboard.skill.update');
});

// Route::get(('home'), function () {
//     return view('frontend.home');
// });

// Route::get(('resume'), function () {
//     return view('frontend.resume');
// });



// Route::get(('projects'), function () {
//     return view('frontend.projects');
// });

// Route::get(('contact'), function () {
//     return view('frontend.contact');
// });

// Route::get(('settings'), function () {
//     return view('admin.settings');
// });


// Route::get(('dashboard'), function () {
//     return view('admin.dashboard');
// });


// Route::get(('messages'), function () {
//     return view('admin.messages');
// });


// Route::get(('project-management'), function () {
//     return view('admin.projectManagement');
// });

// Route::get(('resume-management'), function () {
//     return view('admin.resumeManagement');
// });

// Route::get(('users'), function () {
//     return view('admin.users');
// });

// Route::get(('skill-management'), function () {
//     return view('admin.skillManagement');
// });
