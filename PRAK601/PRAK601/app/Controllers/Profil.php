<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Profil extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data = $model->getData();
        return view('profil', $data);
    }
}
