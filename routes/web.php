<?php

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

use App\Http\Controllers\SliderController;

Route::get('/', [SliderController::class, 'index'])->name('sliders.index');


Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
Route::post('/sliders', [SliderController::class, 'store'])->name('sliders.store');



Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

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

Route::get('/galeri', function () {
    return view('pages.galeri');
});