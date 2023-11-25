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
        if (!session()->has('user_id')) {
            return redirect()->to(base_url('/public'));
        }

        $userId = session()->get('user_id');


        return view('board', [
            'keys' => $this->keyModel->where('user_id', $userId)->paginate(10),
            'pager' => $this->keyModel->pager
        ]);
    }

    public function create()
    {
        if (!session()->has('user_id')) {
            return redirect()->to(base_url('/public'));
        }
        return view('form');
    }

    public function store()
    {
        $userId = session()->get('user_id');
        $rules = [
            'field_title' => 'required|min_length[3]|max_length[100]',
            'field_pass' => 'required',
        ];

        if ($this->validate($rules)) {
            $password = $this->request->getVar('field_pass');
        
            $data = [
                'title' => $this->request->getVar('field_title'),
                'login' => $this->request->getVar('login_field'),
                'password' => $password,
                'user_id' => $userId, // Altere conforme necessário
            ];
        
            $id = $this->request->getVar('id');
        
            if ($id) {
                $this->keyModel->update($id, $data);
            } else {
                $this->keyModel->insert($data);
            }
        
            return redirect()->to(base_url('public/board'));
        } else {
            echo $this->validator->listErrors();
        }
    }

    public function delete($id)
    {
        if ($id) {
            $this->keyModel->delete($id);
            return redirect()->to(base_url('public/board'));
        } else {
            return redirect()->to(base_url('public/board'));
        }
    }

    public function edit($id)
    {
        return view('form', [
            'key' => $this->keyModel->find($id)
        ]);
    }
}
