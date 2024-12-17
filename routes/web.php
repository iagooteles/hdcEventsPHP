<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Iago";
    $idade = 29;

    $arr = [1, 2, 3, 4, 5, 6];
    $nomes = ['iago', 'zé', 'bilas', 'will', 'pan'];
    
    return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]
    );
});
 
Route::get('/produtos', function () {
    return view('products');
});
 
Route::get('/produtos/{id?}', function ($id = 1) {
    return view('product', ['id' => $id]);
});
