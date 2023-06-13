<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GenreModel;

class Genre extends BaseController
{
    protected $genre;
    public function __construct()
    {
        $this->genre = new GenreModel();
    }
    public function index()
    {
        $data['data_genre'] = $this->genre->getGenre();
        return view("genre/index", $data);
    }
    public function all()
    {
        $data['semua_genre'] = $this->genre->getAllData();
        return view("genre/semua_genre", $data);
        //dd($this->film->getAllData());
    }
    public function genre_by_id()
    {
        dd($this->genre->getDataByID(2));
    }
    public function genre_by_genre()
    {
        dd($this->genre->getDataBy("Drama"));
    }
    public function genre_order()
    {
        dd($this->genre->getOrderBy()); 
    }
    public function genre_limit_two()
    {
        dd($this->genre->getLimit());
    }

}
