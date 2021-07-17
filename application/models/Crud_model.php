<?php
class  Crud_model extends CI_Model {

    public function getAll($table) {
        $query = $this->db->get($table);
        return $query->result();
    }

    public function findById($table, $id) {
        $query = $this->db->get_where($table,['id'=>$id]);
        return $query->row();
    }

    public function insertData($table, $data) {
        $this->db->insert($table, $data);
    }

    public function updateData($table, $id, $data) {
        $this->db->where(array('id' => $id));
        $this->db->update($table, $data);
    }

    public function deleteData($table, $data) {
        $sql = "DELETE FROM $table WHERE id=?";
        $this->db->query($sql, $data);
    }

    // =========== JOIN TABLE ===========
    public function joinTable__wisata() {
        $this->db->select('wisata_depok.*, jenis_wisata.jenis, kategori.nama_kategori');
        $this->db->from('wisata_depok');
        $this->db->join('jenis_wisata', 'jenis_wisata.id = wisata_depok.jenis_wisata_id');
        $this->db->join('kategori', 'kategori.id = wisata_depok.kategori_id');
        return $this->db->get()->result();
    }
            // Mengambil data dari database
    public function joinTable__wisatarek() {
        $this->db->select('wisata_depok.*, jenis_wisata.jenis, kategori.nama_kategori');
        $this->db->from('wisata_depok');
        $this->db->join('jenis_wisata', 'jenis_wisata.id = wisata_depok.jenis_wisata_id');
        $this->db->join('kategori', 'kategori.id = wisata_depok.kategori_id');
        $this->db->where('jenis_wisata_id = 1');
        return $this->db->get()->result();
            }

    public function joinTable__wisatakul() {
        $this->db->select('wisata_depok.*, jenis_wisata.jenis, kategori.nama_kategori');
        $this->db->from('wisata_depok');
        $this->db->join('jenis_wisata', 'jenis_wisata.id = wisata_depok.jenis_wisata_id');
        $this->db->join('kategori', 'kategori.id = wisata_depok.kategori_id');
        $this->db->where('jenis_wisata_id = 2');
        return $this->db->get()->result();
                    }
    
}
?>