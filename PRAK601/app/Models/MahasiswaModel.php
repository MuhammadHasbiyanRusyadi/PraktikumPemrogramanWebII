<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function getData()
    {
        return [
            'nama' => 'Muhammad Hasbiyan Rusyadi',
            'nim' => '210817210020',
            'prodi' => 'Teknologi Informasi',
            'hobi' => 'Main Game, Analisis/Review Aspek dalam Suatu Game, dan Gamedev',
            'skill' => 'Tidur, Depth Analysis (terutama dalam video game)',
            'foto' => 'images/Hasbi.jpg'
        ];
    }
}
