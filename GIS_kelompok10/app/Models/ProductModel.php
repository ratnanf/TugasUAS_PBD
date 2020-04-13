<?php namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    public function get_product()
    {
        return $this->db->table('product')->get()->getResultArray();
    }

    public function insert_product($data)
    {
        return $this->db->table('product')->insert($data);
    }

    public function edit_product($produk_id)
    {
        return $this->db->table('product')->where('produk_id', $produk_id)->get()->getRowArray();
    }

    public function update_product($data, $produk_id)
    {
        return $this->db->table('product')->update($data, array('produk_id' => $produk_id));
    }

    public function delete_product($produk_id)
    {
        return $this->db->table('product')->delete(array('produk_id' => $produk_id));
    }
}