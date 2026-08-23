<?php

use Illuminate\Support\Facades\Route;

Route::get('/teacher/students', function() {
    return 'Teacher Students';
});


Route::get('/teacher/salary', function() {
    return 'Teacher Salary';
});

Route::get('/teacher/break', function() {
    return 'Teacher Break';
});

Route::get('/teacher/leaves', function() {
    return 'Teacher Leaves';
});
