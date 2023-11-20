<?php

namespace App\Controllers;

use App\Models\KeyModel;

class Keys extends BaseController
{
    private $keyModel;

    public function __construct()
    {
        $this->keyModel = new KeyModel();
    }

    public function index()
    {
        $data['keys'] = $this->keyModel->findAll();
        return view('board', $data);
    }

    public function create()
    {
        return view('registerKey');
    }

    public function store()
    {
        $rules = [
            'field_title' => 'required|min_length[3]|max_length[100]',
            'field_pass' => 'required',
        ];

        if ($this->validate($rules)) {
            $password = $this->request->getVar('field_pass');
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $data = [
                'title' => $this->request->getVar('field_title'),
                'login' => $this->request->getVar('login_field'),
                'password' => $hashed,
                'user_id' => 1, // Altere conforme necessário
            ];

            $this->keyModel->insert($data);

            return redirect()->to(base_url('public/board'));
        } else {
            echo $this->validator->listErrors();
        }
    }

    public function delete()
    {
    }

    public function edit()
    {
    }

    public function editAction() {
       
    }
}
