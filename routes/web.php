<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);

Route::get('/blog', function () {
    return view('pages.artikel', [
        'daftarArtikel' => [
            [
                'id' => 1,
                'judul' => 'Judul Artikel 1',
                'gambar' => '../assets/img-chicken-artikel.jpg',
                'subJudul' => 'Sub Judul Artikel 1',
                'isiArtikel' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, quam labore vitae aspernatur iusto voluptas! Tempora, itaque qui? Ullam sit quo ab vero magni, labore placeat nemo harum sunt id reprehenderit ducimus dolore totam? Dolore voluptate quos reiciendis nulla tempora deleniti id laborum, provident fugit maxime, aut minus quam perspiciatis enim rem excepturi laboriosam eum repudiandae optio ab voluptatum quaerat illum vel quia. Quae eos facilis nihil reiciendis reprehenderit iure quos incidunt dignissimos autem, impedit sequi quis suscipit labore non aspernatur rem, soluta natus repudiandae! Quaerat perspiciatis provident velit, quisquam nihil, quia, recusandae facilis ab repudiandae eum eos! Ipsum, ea?'
            ],
            [
                'id' => 2,
                'judul' => 'Judul Artikel 2',
                'gambar' => '../assets/ayamgoreng.jpg',
                'subJudul' => 'Sub Judul Artikel 2',
                'isiArtikel' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, quam labore vitae aspernatur iusto voluptas! Tempora, itaque qui? Ullam sit quo ab vero magni, labore placeat nemo harum sunt id reprehenderit ducimus dolore totam? Dolore voluptate quos reiciendis nulla tempora deleniti id laborum, provident fugit maxime, aut minus quam perspiciatis enim rem excepturi laboriosam eum repudiandae optio ab voluptatum quaerat illum vel quia. Quae eos facilis nihil reiciendis reprehenderit iure quos incidunt dignissimos autem, impedit sequi quis suscipit labore non aspernatur rem, soluta natus repudiandae! Quaerat perspiciatis provident velit, quisquam nihil, quia, recusandae facilis ab repudiandae eum eos! Ipsum, ea?'
            ],
            [
                'id' => 3,
                'judul' => 'Judul Artikel 3',
                'gambar' => '../assets/ayamgoreng2.jpg',
                'subJudul' => 'Sub Judul Artikel 3',
                'isiArtikel' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, quam labore vitae aspernatur iusto voluptas! Tempora, itaque qui? Ullam sit quo ab vero magni, labore placeat nemo harum sunt id reprehenderit ducimus dolore totam? Dolore voluptate quos reiciendis nulla tempora deleniti id laborum, provident fugit maxime, aut minus quam perspiciatis enim rem excepturi laboriosam eum repudiandae optio ab voluptatum quaerat illum vel quia. Quae eos facilis nihil reiciendis reprehenderit iure quos incidunt dignissimos autem, impedit sequi quis suscipit labore non aspernatur rem, soluta natus repudiandae! Quaerat perspiciatis provident velit, quisquam nihil, quia, recusandae facilis ab repudiandae eum eos! Ipsum, ea?'
            ]
        ]
    ]);
});

Route::get('/blog/{id}', function ($id) {
    $daftarArtikel = [
        [
            'id' => 1,
            'judul' => 'Judul Artikel 1',
            'gambar' => '../assets/img-chicken-artikel.jpg',
            'subJudul' => 'Sub Judul Artikel 1',
            'isiArtikel' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, quam labore vitae aspernatur iusto voluptas! Tempora, itaque qui? Ullam sit quo ab vero magni, labore placeat nemo harum sunt id reprehenderit ducimus dolore totam? Dolore voluptate quos reiciendis nulla tempora deleniti id laborum, provident fugit maxime, aut minus quam perspiciatis enim rem excepturi laboriosam eum repudiandae optio ab voluptatum quaerat illum vel quia. Quae eos facilis nihil reiciendis reprehenderit iure quos incidunt dignissimos autem, impedit sequi quis suscipit labore non aspernatur rem, soluta natus repudiandae! Quaerat perspiciatis provident velit, quisquam nihil, quia, recusandae facilis ab repudiandae eum eos! Ipsum, ea?'
        ],
        [
            'id' => 2,
            'judul' => 'Judul Artikel 2',
            'gambar' => '../assets/ayamgoreng.jpg',
            'subJudul' => 'Sub Judul Artikel 2',
            'isiArtikel' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, quam labore vitae aspernatur iusto voluptas! Tempora, itaque qui? Ullam sit quo ab vero magni, labore placeat nemo harum sunt id reprehenderit ducimus dolore totam? Dolore voluptate quos reiciendis nulla tempora deleniti id laborum, provident fugit maxime, aut minus quam perspiciatis enim rem excepturi laboriosam eum repudiandae optio ab voluptatum quaerat illum vel quia. Quae eos facilis nihil reiciendis reprehenderit iure quos incidunt dignissimos autem, impedit sequi quis suscipit labore non aspernatur rem, soluta natus repudiandae! Quaerat perspiciatis provident velit, quisquam nihil, quia, recusandae facilis ab repudiandae eum eos! Ipsum, ea?'
        ],
        [
            'id' => 3,
            'judul' => 'Judul Artikel 3',
            'gambar' => '../assets/ayamgoreng2.jpg',
            'subJudul' => 'Sub Judul Artikel 3',
            'isiArtikel' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, quam labore vitae aspernatur iusto voluptas! Tempora, itaque qui? Ullam sit quo ab vero magni, labore placeat nemo harum sunt id reprehenderit ducimus dolore totam? Dolore voluptate quos reiciendis nulla tempora deleniti id laborum, provident fugit maxime, aut minus quam perspiciatis enim rem excepturi laboriosam eum repudiandae optio ab voluptatum quaerat illum vel quia. Quae eos facilis nihil reiciendis reprehenderit iure quos incidunt dignissimos autem, impedit sequi quis suscipit labore non aspernatur rem, soluta natus repudiandae! Quaerat perspiciatis provident velit, quisquam nihil, quia, recusandae facilis ab repudiandae eum eos! Ipsum, ea?'
        ]
    ];

    $artikel = $daftarArtikel[$id - 1];

    return view('pages.detailArtikel', [
        'artikel' => $artikel
    ]);


});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('sliders', SliderController::class)->middleware('auth');