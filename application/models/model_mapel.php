<?php
class model_mapel extends CI_Model{
    public function tampil_data()
    {
      return $this->db->get('tbl_mapel');
    }
    public function edit_data($where,$table)
    {
      return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }
    public function hapus_data($where,$table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }
    public function tambah_data($data,$table)
    {
      $this->db->insert($table,$data);
    }

    public function getdata()
    {
      $query =  $this->db->query("SELECT * FROM tbl_guru ORDER BY nama_guru ASC");

      return $query->result();
    }


}