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
        // $data['keys'] = $this->keyModel->findAll();
        return view('board', [
            'keys' => $this->keyModel->paginate(10),
            'pager' => $this->keyModel->pager
        ]);
    }

    public function create()
    {
        return view('form');
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
        
            $id = $this->request->getVar('id');
        
            if ($id) {
                // Se houver um ID, atualize o registro
                $this->keyModel->update($id, $data);
            } else {
                // Se não houver um ID, crie um novo registro
                $this->keyModel->insert($data);
            }
        
            return redirect()->to(base_url('public/board'));
        } else {
            echo $this->validator->listErrors();
        }
    }

    public function delete()
    {
    }

    public function edit($id)
    {
        return view('form', [
            'key' => $this->keyModel->find($id)
        ]);
    }

    public function editAction() {
       
    }
}
