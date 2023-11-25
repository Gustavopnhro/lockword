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
                    'nome' => 'required',
                    'email' => 'required|valid_email|is_unique[users.email]',
                    'password' => 'required|min_length[6]',
                ]);

                if (!$validation->withRequest($this->request)->run()) {
                    return redirect()->to(base_url('/public/register'))->withInput()->with('validation', $validation);
                }

                $data = [
                    'name' => $this->request->getVar('nome'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                ];

                if ($this->userModel->where('email', $data['email'])->first()) {
                    return redirect()->to(base_url('/public/register'))->with('error', 'Email already exists');
                }

                $this->userModel->insert($data);
                return redirect()->to(base_url('/public'));
            }


            public function do_login()
            {
                $validation = \Config\Services::validation();

                $validation->setRules([
                    'email' => 'required|valid_email',
                    'password' => 'required'
                ]);

                if (!$validation->withRequest($this->request)->run()) {
                    return redirect()->to(base_url('/public'))->withInput()->with('validation', $validation);
                }

                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $hashed = password_hash($password, PASSWORD_DEFAULT);

                $user = $this->userModel->where('email', $email)->first();

                if (password_verify($password, $user['password'])) {
                    // Autenticação bem-sucedida
                    session()->set('user_id', $user['id']);
                    return redirect()->to(base_url('public/board'));
                } else {
                    // Senha incorreta
                    return redirect()->to(base_url('/public'))->with('error', 'Incorrect password');
                }
            }

            public function logout()
            {
                $session = session();
                $session->remove('user_id');
                return redirect()->to(base_url('/public'));
            }
        }
