<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\User;
use App\Models\M_Siswa;

class Auth extends BaseController
{
    public function insert_user()
    {
        $reg_cek = $this->validate(
            [
                'user' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'is_unique' => '{field} sudah dipakai. Silahkkan masukan {field} yang lain'
                    ]
                ],
                'email' => [
                    'rules' => 'required|is_unique[user.email]',
                    'errors' => [
                        'is_unique' => '{field} sudah dipakai. Silahkkan masukan {field} yang lain'
                    ]
                ],
                'pass' => 'required',
                'akses' => 'required',
            ]
        );

        $data = array(
            "username" => $this->request->getPost("user"),
            "email" => $this->request->getPost("email"),
            "password" => password_hash($this->request->getPost("pass"), PASSWORD_DEFAULT),
            "akses" => $this->request->getPost("akses"),
        );

        if ($reg_cek) {
            //Jika data berhasil di Input
            $model = new User();
            $model->insert($data);
            session()->setFlashdata('pesan', "Successful, silahkan login!");
            return redirect()->to(base_url("/"));
        } else {
            $pesan_reg_val =  \Config\Services::validation();
            return redirect()->to(base_url("/register"))->withInput()->with('validate', $pesan_reg_val);
        }
    }


    public function get_login()
    {
        $m_user = new AuthModel();
        $table =  'user';
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");
        $akses = $this->request->getPost("akses");
        $row = $m_user->get_data_login($username, $table);

        if ($row == NULL) {
            session()->setFlashdata('pesan', 'username anda salah');
            return redirect()->to(base_url("/"));
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'username' => $row->username,
                'email' => $row->email,
                'akses' => $row->akses
            );
            if (($row->akses == $akses) && ($akses == '1')) {
                session()->set($data);
                session()->setFlashdata('pesan', 'Login Successful!!!');
                return redirect()->to(base_url("/monev_penelitian"));
            } elseif (($row->akses == $akses) && ($akses == '2')) {
                session()->set($data);
                session()->setFlashdata('pesan', 'Login Successful!!!');
                return redirect()->to(base_url("/monev_penelitian"));
            } elseif (($row->akses == $akses) && ($akses == '3')) {
                session()->set($data);
                session()->setFlashdata('pesan', 'Login Successful!!!');
                return redirect()->to(base_url("/monev_penelitian"));
            } elseif (($row->akses == $akses) && ($akses == '4')) {
                session()->set($data);
                session()->setFlashdata('pesan', 'Login Successful!!!');
                return redirect()->to(base_url("/monev_penelitian"));
            } elseif (($row->akses == $akses) && ($akses == '5')) {
                session()->set($data);
                session()->setFlashdata('pesan', 'Login Successful!!!');
                return redirect()->to(base_url("/dashboard"));
            } else {

                session()->setFlashdata('pesan', 'Login gagal pastikan mengisi dengan benar!!!');
                return redirect()->to(base_url("/"));
            }
        }


        session()->setFlashdata('pesan', 'Login gagal username atau password tidak ditemukan!!!');
        return redirect()->to(base_url("/"));
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan_logout', 'Logout Successful!!!');
        return redirect()->to(base_url("/"));
    }

    public function ubah_profile($id)
    {



        $val = $this->validate(
            [

                'pass' => 'required',
            ]
        );


        if (!$val) {
            session()->setFlashdata('err', \Config\Services::validation()->listErrors());
            return redirect()->to(base_url("/profile/" . userlogin()->id));
        } else {
            $data = [

                "password" => password_hash($this->request->getPost("pass"), PASSWORD_DEFAULT),
            ];

            // update Data

            $model = new M_Siswa();
            $success = $model->ubah_profile($data, $id);
            if ($success) {
                $session = session();
                $session->destroy();
                session()->setFlashdata('pesan', 'Data Berhasil Diubah');
                return redirect()->to(base_url("/"));
            }
        }
    }
}
