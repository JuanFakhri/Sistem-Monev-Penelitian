<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Siswa extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }


    public function ubah2($data, $id)
    {
        return $this->db->table('data_penelitian')->update($data, ['id' => $id]);
    }

    public function getDataById2($id)
    {
        $this->db->table('data_penelitian')->where('id', $id);
        return $this->db->table('data_penelitian')->get()->getRowArray();
    }
    public function detail_Data2($id_file)
    {
        return $this->db->table('data_penelitian')->where('id', $id_file)->get()->getRowArray();
    }

    public function getAllData2()
    {
        return $this->db->table('data_penelitian')->get()->getResultArray();
    }


    public function tambah2($data)
    {
        return $this->db->table('data_penelitian')->insert($data);
    }
    public function hapus2($id, $file_peta_jalan, $file_sesuai_petajalan)
    {
        unlink('public/upload/file_coba_petajalan/' . $file_peta_jalan);

        unlink('public/upload/file_sesuai_petajalan/' . $file_sesuai_petajalan);
        return $this->db->table('data_penelitian')->delete(['id' => $id]);
    }


    #Query Menampilkan Grafik
    public function gerafikpenelitian()
    {
        $sql = "SELECT COUNT(namamahasiswa)+COUNT(namadosen)/100 AS jumlah FROM `data_penelitian` WHERE namamahasiswa != ''GROUP BY tahun ORDER by tahun";
        $hasil = $this->db->query($sql);
        if ($hasil) {
            return $hasil->getResultArray();
        } else {
            return 0;
        }
    }
    public function grafikpenelitian_d()
    {
        $sql = "SELECT tahun FROM `data_penelitian` GROUP BY tahun ORDER by tahun";
        $hasil = $this->db->query($sql);
        if ($hasil) {
            return $hasil->getResultArray();
        } else {
            return 0;
        }
    }

    public function get_id_user($id)
    {

        return $this->db->table('user')->where('id', $id)->get()->getRow();
    }


    public function ubah_profile($data, $id)
    {
        return $this->db->table('user')->update($data, ['id' => $id]);
    }
}
