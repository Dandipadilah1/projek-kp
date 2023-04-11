<?php 
 class model_rapor extends CI_Model{
    public function tambah_data($data,$table)
    {
      $this->db->insert($table,$data);
    }
    public function getdata()
    {
        $query =  $this->db->query("SELECT * FROM tbl_siswa ORDER BY nama,nisn ASC");
      return $query->result();
    }
    public function getprofil()
    {
        $query =  $this->db->query("SELECT * FROM tbl_profil ORDER BY nm_sekolah,alamat ASC");
    return $query->result();
    }
    public function gettahun()
    {
        $query =  $this->db->query("SELECT * FROM tbl_tahun ORDER BY tahun_ajar ASC");
    return $query->result();
    }
    public function getmapel()
    {
        $query =  $this->db->query("SELECT * FROM tbl_mapel ORDER BY nama_mapel ASC");
    return $query->result();
    }
    public function hapus_data($where,$table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }
 }