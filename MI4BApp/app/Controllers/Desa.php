<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\DesaModel;

class Desa extends BaseController
{
    protected $desa;
    public function __construct()
    {
        $this->desa = new DesaModel();
    }
    public function index()
    {
        $data['data_desa'] = $this->desa->getDesa();
        return view("desa/index", $data);
    }
}
