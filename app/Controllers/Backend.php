<?php

namespace App\Controllers;

use App\Models\M_Siswa;


class Backend extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Siswa();
    }


    public function dashboard()
    {
        $model = new M_Siswa();
        $data = [
            'judul' => 'Homepage',
            'data_penelitian' => $model->gerafikpenelitian(),
            'data_penelitian_d' => $model->grafikpenelitian_d(),
        ];
        echo view("layout/v_header", $data);
        echo view("layout/v_sidebar");
        echo view("layout/v_topbar");
        echo view("/dashboard");
        echo view("layout/v_footer");
    }

    public function monev_penelitian()
    {
        $model = new M_Siswa();
        $data = [
            'judul' => 'Penelitian',
            'penel' => $model->getAllData2(),

        ];
        return view("m_penelitian/monev_penelitian", $data);
    }

    public function excel()
    {
        $model = new M_Siswa();
        $data = [
            'penel' => $model->getAllData2(),
        ];
        echo view('m_penelitian/excel', $data);
    }

    public function profile($id)
    {
        $model = new M_Siswa();
        $data = [
            'judul' => 'Profile',

            'profile_user' => $model->get_id_user($id),

        ];
        return view("m_penelitian/profile", $data);
    }

    public function view_pdf($id_file)
    {
        $model = new M_Siswa();
        $data = [
            'judul' => 'Peta Jalan Penelitian',
            'file' => $model->detail_Data2($id_file),
        ];
        return view("m_penelitian/view_pdf", $data);
    }


    public function view_pdf_sesuaipetajalan($id_file)
    {
        $model = new M_Siswa();
        $data = [
            'judul' => 'Penelitian Sesuai Peta Jalan ',
            'file' => $model->detail_Data2($id_file),
        ];
        return view("m_penelitian/view_pdf_sesuaipetajalan", $data);
    }

    public function view_pdf_evaluasipenelitian($id_file)
    {
        $model = new M_Siswa();
        $data = [
            'judul' => 'Bukti Evaluasi Penelitian',
            'file' => $model->detail_Data2($id_file),
        ];
        return view("m_penelitian/view_pdf_evaluasipenelitian", $data);
    }


    public function view_pdf_evaluasi_penelitian_tindaklanjut($id_file)
    {
        $model = new M_Siswa();
        $data = [
            'judul' => 'Bukti Evaluasi Penelitian',
            'file' => $model->detail_Data2($id_file),
        ];
        return view("m_penelitian/view_pdf_evaluasi_penelitian_tindaklanjut", $data);
    }


    public function tambah_data2()
    {
        if (isset($_POST['tambah'])) {
            $val = $this->validate(
                [
                    'tahun' => [
                        'label' => 'Tahun Penelitian',

                        'rules' => 'required|numeric|min_length[4]|max_length[5]',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong',
                            'numeric' => '{field} haya boleh angka',
                            'max_length' => '{field} tidak boleh lebih dari 5',
                            'min_length' => '{field} minimal 4 angka'
                        ]

                    ],
                    'judulpenelitian' => [
                        'label' => 'Judul Penelitian',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong',
                        ]

                    ],
                    'namahasiswa' => [
                        'label' => 'Nama Mahasiswa Penelitian',
                        'rules' => 'required|alpha_space',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong',
                            'alpha_space' => '{field} tidak boleh numeric',
                        ]

                    ],
                    'namadosen' => [
                        'label' => 'Nama Dosen Penelitian',
                        'rules' => 'required|alpha_space',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong',
                            'alpha_space' => '{field} tidak boleh numeric',
                        ]

                    ],
                    'peta_jalan' => [
                        'label' => 'Petajalan',
                        'rules' => 'uploaded[peta_jalan]|max_size[peta_jalan,2000]|ext_in[peta_jalan,pdf]',
                        'errors' => [
                            'uploaded' => '{field} tidak boleh kosong',
                            'max_size' => '{field}Maksimul Gambar 2mb',
                            'ext_in' => 'File yang dimasukan bukan pdf'
                        ]
                    ], 'sesuaipetajalan' => [
                        'label' => 'Sesuai petajalan',
                        'rules' => 'uploaded[sesuaipetajalan]|max_size[sesuaipetajalan,2000]|ext_in[sesuaipetajalan,pdf]',
                        'errors' => [
                            'uploaded' => '{field} tidak boleh kosong',
                            'max_size' => '{field} Maksimul pdf 2mb',
                            'ext_in' => 'File yang dimasukan bukan pdf'
                        ]
                    ],
                    'evaluasi_penelitian' => [
                        'label' => 'Evaluasi penelitian ',
                        'rules' => 'max_size[evaluasi_penelitian,2000]|ext_in[evaluasi_penelitian,pdf]',
                        'errors' => [
                            'max_size' => '{field} Maksimul pdf 2mb',
                            'ext_in' => 'File yang dimasukan bukan pdf'
                        ]
                    ], 'evaluasi_penelitian_tindaklanjut' => [
                        'label' => 'Evaluasi penelitian tindak lanjut',
                        'rules' => 'max_size[evaluasi_penelitian_tindaklanjut,2000]|ext_in[evaluasi_penelitian_tindaklanjut,pdf]',
                        'errors' => [
                            'max_size' => '{field} Maksimul pdf 2mb',
                            'ext_in' => 'File yang dimasukan bukan pdf'
                        ]
                    ],

                    'prodi' => 'required',

                ]
            );

            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());
                return redirect()->to(base_url("/monev_penelitian"));
            } else {
                $peta_jalan = $this->request->getFile('peta_jalan');
                if ($peta_jalan->isValid() && !$peta_jalan->hasMoved()) {
                    $peta_jalan->move('public/upload/file_coba_petajalan');
                }
                $file_peta_jalan = $peta_jalan->getName();

                $sesuai_peta_jalan = $this->request->getFile('sesuaipetajalan');
                if ($sesuai_peta_jalan->isValid() && !$sesuai_peta_jalan->hasMoved()) {
                    $sesuai_peta_jalan->move('public/upload/file_sesuai_petajalan');
                }
                $file_sesuai_peta_jalan = $sesuai_peta_jalan->getName();


                $evaluasi_penelitian = $this->request->getFile('evaluasi_penelitian');
                if ($evaluasi_penelitian->isValid() && !$evaluasi_penelitian->hasMoved()) {
                    $evaluasi_penelitian->move('public/upload/file_evaluasipenelitian');
                }
                $file_evaluasi_penelitian = $evaluasi_penelitian->getName();


                $evaluasi_penelitian_tindaklanjut = $this->request->getFile('evaluasi_penelitian_tindaklanjut');
                if ($evaluasi_penelitian_tindaklanjut->isValid() && !$evaluasi_penelitian_tindaklanjut->hasMoved()) {
                    $evaluasi_penelitian_tindaklanjut->move('public/upload/file_evaluasi_penelitian_tindaklanjut');
                }
                $file_evaluasi_penelitian_tindaklanjut = $evaluasi_penelitian_tindaklanjut->getName();

                $data = [
                    'tahun' => $this->request->getPost('tahun'),
                    'judulpenelitian' => $this->request->getPost('judulpenelitian'),
                    'namamahasiswa' => $this->request->getPost('namahasiswa'),
                    'namadosen' => $this->request->getPost('namadosen'),
                    "prodi" => $this->request->getPost("prodi"),

                    'peta_jalan' =>  $file_peta_jalan,
                    'sesuaipetajalan' =>  $file_sesuai_peta_jalan,
                    'evaluasi_penelitian' =>  $file_evaluasi_penelitian,
                    'evaluasi_penelitian_tindaklanjut' =>  $file_evaluasi_penelitian_tindaklanjut,
                ];

                // insert Data
                $success = $this->model->tambah2($data);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to(base_url("/monev_penelitian"));
                }
            }
        } else {
            return redirect()->to(base_url("/monev_penelitian"));
        }
    }

    public function hapus($id)
    {
        $success = $this->model->hapus($id);
        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url("/home_anggota"));
        }
    }

    public function hapus2($id, $file_peta_jalan, $file_sesuai_petajalan)
    {
        $success = $this->model->hapus2($id, $file_peta_jalan, $file_sesuai_petajalan);
        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url("/monev_penelitian"));
        }
    }



    public function ubah_data2()
    {
        if (isset($_POST['ubah'])) {



            $val = $this->validate(
                [
                    'ubah_tahun' => [
                        'label' => 'Tahun Penelitian',

                        'rules' => 'required|numeric|min_length[4]|max_length[5]',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong',
                            'numeric' => '{field} haya boleh angka',
                            'max_length' => '{field} tidak boleh lebih dari 5',
                            'min_length' => '{field} minimal 4 angka'
                        ]

                    ],
                    'ubah_judulpenelitian' => [
                        'label' => 'Judul Penelitian',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong',
                        ]

                    ],
                    'ubah_namahasiswa' => [
                        'label' => 'Nama Mahasiswa Penelitian',
                        'rules' => 'required|alpha_space',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong',
                            'alpha_space' => '{field} tidak boleh numeric',
                        ]

                    ],

                    'ubah_namadosen' => [
                        'label' => 'Nama Dosen Penelitian',
                        'rules' => 'required|alpha_space',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong',
                            'alpha_space' => '{field} tidak boleh numeric',
                        ]

                    ],

                    'ubah_prodi' => 'required',
                ]
            );


            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());
                return redirect()->to(base_url("/monev_penelitian"));
            } else {
                $id = $this->request->getPost('id');
                $data = [
                    'tahun' => $this->request->getPost('ubah_tahun'),
                    'judulpenelitian' => $this->request->getPost('ubah_judulpenelitian'),
                    'namamahasiswa' => $this->request->getPost('ubah_namahasiswa'),
                    'namadosen' => $this->request->getPost('ubah_namadosen'),
                    "prodi" => $this->request->getPost("ubah_prodi"),
                ];

                // update Data
                $success = $this->model->ubah2($data, $id);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to(base_url("/monev_penelitian"));
                }
            }
        } else {
            return redirect()->to(base_url("/monev_penelitian"));
        }
    }
}
