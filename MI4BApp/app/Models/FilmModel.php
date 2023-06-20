<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{

    protected $table                = 'film';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowFields          = [];
    public function getFilm()
    {
    $data =[
        [
            "nama_film" => "Sewu Dino",
            "genre" => "horor",
            "duration" => "1 jam 43 menit"
        ],
        [
            "nama_film" => "Fast and Farios X",
            "genre" => "Action",
            "duration" => "2 jam 10 Menit"
        ],
        [
            "nama_film" => "Imperfect",
            "genre" => "Drama, Komedi",
            "duration" => "1 jam 30 Menit"
        ],
        [
            "nama_film" => "Ivana",
            "genre" => "Horor",
            "duration" => "1 jam 40 menit"
        ],
        [
            "nama_film" => "Mencuri Raden Saleh",
            "genre" => "Action",
            "duration" => "2 jam 50 Menit"
        ],
    ];

        return $data;
    }

    public function getAllDataJoin()
    {
        $query = $this->db->table("film")
            ->select("film.*, genre.nama_genre")
            ->join("genre", "genre.id = film.id_genre");
        return $query->get()->getResultArray();
    }
    public function getAllData()
    {
        return $this->findAll();
    }
    public function getDataByID($id)
    {
        return $this->find($id);
    }
    public function getDataBy($data)
    {
        return $this->where("genre", $data)->findAll();
    }
    public function getOrderBy()
    {
        return $this->orderBy("created_at", "desc")->findAll();
    }
    public function getLimit()
    {
        return $this->limit(5)->get()->getResultArray();
    }
}