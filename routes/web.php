<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\Array_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [

            [
                'id' => 1,
                'title' => 'director',
                'salary' => '$50,00',
            ],

            [
                'id' => 2,

                'title' => 'programmer',
                'salary' => '$10,00',
            ],

            [
                'id' => 3,

                'title' => 'teacher',
                'salary' => '$40,00',
            ],
        ],

    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // dd($id);
    $jobs = [

        [
            'id' => 1,
            'title' => 'director',
            'salary' => '$50,00',
        ],

        [
            'id' => 2,

            'title' => 'programmer',
            'salary' => '$10,00',
        ],

        [
            'id' => 3,

            'title' => 'teacher',
            'salary' => '$40,00',
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    // dd($job);
    return view('job', ['job' => $job]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
