<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{

    protected $table                = 'genre';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowFields          = [];
    public function getGenre()
    {
    $data =[
        [
            "nama_genre" => "Drama",
            "created_at" => "2023-06-13 21:36:22",
            "updated_at" => "2023-06-14 21:36:22"
        ],
        [
            "nama_genre" => "Komedi",
            "created_at" => "2023-06-15 21:36:22",
            "updated_at" => "2023-06-16 21:36:22"
        ],
        [
            "nama_genre" => "Action",
            "created_at" => "2023-06-17 21:38:15",
            "updated_at" => "2023-06-18 21:38:15"
        ],
        [
            "nama_genre" => "Horor",
            "created_at" => "2023-06-19 21:38:15",
            "updated_at" => "2023-06-20 21:38:15"
        ],
        [
            "nama_genre" => "Romantis",
            "created_at" => "2023-06-13 21:39:42",
            "updated_at" => "2023-06-13 21:39:42"
        ],
    ];

        return $data;
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
        return $this->limit(2)->get()->getResultArray();
    }
}