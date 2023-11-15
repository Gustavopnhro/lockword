<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KeyModel;

class KeyController extends BaseController
{
    private $keyModel;
    public function __construct()
    {
        $this->keyModel = new KeyModel();
    }

    public function index()
    {
        return view ('board', [
            'keys' => $this->keyModel->findAll()
        ]);
    }
}
