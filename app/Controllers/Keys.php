<?php

namespace App\Controllers;

use App\Models\KeyModel;
use App\Models\UserModel;

class Keys extends BaseController
{
    private $keyModel;
    private $userModel;
    public function __construct()
    {
        $this->keyModel = new KeyModel();
        $this->userModel = new UserModel(); 
    }

    public function index()
    {
        if (!session()->has('user_id')) {
            return redirect()->to(base_url('/public'));
        }

        
        $userId = session()->get('user_id');

        return view('board', [
            'keys' => $this->keyModel->where('user_id', $userId)->paginate(10),
            'pager' => $this->keyModel->pager,
            'username' => $this->userModel->where('id', $userId)->first(),
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
        if (!session()->has('user_id')) {
            return redirect()->to(base_url('/public'));
        }

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
                'user_id' => $userId,
            ];
        
            $id = $this->request->getVar('id');
        
            if ($id) {
                $this->keyModel->update($id, $data);
            } else {
                $this->keyModel->insert($data);
            }
        
            return redirect()->to(base_url('/public/board'))->with('message', "The key was created!");
        } else {
            echo $this->validator->listErrors();
        }
    }

    public function delete($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to(base_url('/public'));
        }

        if ($id) {
            $this->keyModel->delete($id);
            return redirect()->to(base_url('public/board'));
        } else {
            return redirect()->to(base_url('public/board'));
        }
    }

    public function edit($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to(base_url('/public'));
        }
        
        return view('form', [
            'key' => $this->keyModel->find($id)
        ]);
    }
}
