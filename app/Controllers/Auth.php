<?php

namespace App\Controllers;

        use App\Controllers\BaseController;
        use App\Models\UserModel;
        use App\Models\KeyModel;

        class Auth extends BaseController
        {
            private $userModel;
            private $keyModel;

            public function __construct()
            {
                $this->userModel = new UserModel();
                $this->keyModel = new KeyModel();
            }

            public function register()
            {
                if (session()->has('user_id')) {
                    return redirect()->to(base_url('/public/board'));
                }
                return view('register');
            }

            public function login()
            {
                if (session()->has('user_id')) {
                    return redirect()->to(base_url('/public/board'));
                }
                return view('login');
            }

            public function store()
            {
                
                
                $validation = \Config\Services::validation();

                $validation->setRules([
                    'name' => 'required',
                    'email' => 'required',
                    'password' => 'required',
                ]);

                if (!$validation->withRequest($this->request)->run()) {
                    return redirect()->to(base_url('/public/register'))->with('message', $validation);
                }

                $data = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                ];

                if ($this->userModel->where('email', $data['email'])->first()) {
                    return redirect()->to(base_url('/public/register'))->with('error', 'Email already exists');
                }
                $this->userModel->insert($data);
                return redirect()->to(base_url('/public'))->with('message', "Your account as been created successfully");
            }


            public function do_login()
            {
                $validation = \Config\Services::validation();

                $validation->setRules([
                    'email' => 'required',
                    'password' => 'required'
                ]);

                if (!$validation->withRequest($this->request)->run()) {
                    return redirect()->to(base_url('/public'))->with('message', $validation);
                }

                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                
                $user = $this->userModel->where('email', $email)->first();
                    
                if (!$user){
                    return redirect()->to(base_url('/public'))->with('error', 'Inexistent email');
                }
                if (password_verify($password, $user['password']) and $email = $user['email']) {
                    session()->set('user_id', $user['id']);
                    return redirect()->to(base_url('public/board'));
                } else {
                    return redirect()->to(base_url('/public'))->with('error', 'Wrong password');
                    
                }
            }

            public function logout()
            {
                $session = session();
                $session->remove('user_id');
                return redirect()->to(base_url('/public'));
            }
        }
