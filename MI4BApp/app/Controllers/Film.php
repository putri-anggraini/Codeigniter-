<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\FilmModel;

class Film extends BaseController
{
    protected $film;
    public function __construct()
    {
        $this->film = new FilmModel();
    }
    public function index()
    {
        $data['data_film'] = $this->film->getAllDataJoin();
        return view("film/index", $data);
    }
    public function all()
    {
        $data['semuafilm'] = $this->film->getAllDataJoin();
        return view("film/semuafilm", $data);
        //dd($this->film->getAllData());
    }
    public function film_by_id()
    {
        dd($this->film->getDataByID(2));
    }
    public function film_by_genre()
    {
        dd($this->film->getDataBy("Drama"));
    }
    public function film_order()
    {
        dd($this->film->getOrderBy()); 
    }
    public function film_limit_five()
    {
        dd($this->film->getLimit());
    }

}
