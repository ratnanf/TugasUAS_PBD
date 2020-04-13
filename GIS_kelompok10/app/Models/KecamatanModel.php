<?php namespace App\Models;
use CodeIgniter\Model;

class KecamatanModel extends Model
{
    public function get_kecamatan()
    {
        return $this->db->table('kecamatan')->get()->getResultArray();
    }

    public function insert_kecamatan($data)
    {
        return $this->db->table('kecamatan')->insert($data);
    }

    public function edit_kecamatan($id_kec)
    {
        return $this->db->table('kecamatan')->where('id_kec', $id_kec)->get()->getRowArray();
    }

    public function update_kecamatan($data, $id_kec)
    {
        return $this->db->table('kecamatan')->update($data, array('id_kec' => $id_kec));
    }

    public function delete_kecamatan($id_kec)
    {
        return $this->db->table('kecamatan')->delete(array('id_kec' => $id_kec));
    }
}