<?php
class Buku_model extends CI_Model{
 
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  function get_buku(){
    $result = $this->db->get('buku');
    return $result;
  }

  function save($id_buku, $kode_buku, $kategori_buku, $judul_buku, $pengarang_buku, $penerbit_buku, $tahun_buku, $jumlah_buku){
    $data = array(
      'kode_buku' => $kode_buku,
      'kategori_buku' => $kategori_buku,
      'judul_buku' => $judul_buku,
      'pengarang_buku' => $pengarang_buku,
      'penerbit_buku' => $penerbit_buku,
      'tahun_buku' => $tahun_buku, 
      'jumlah_buku' => $jumlah_buku
    );
    $this->db->insert('buku',$data);
  }

  function delete($id_buku){
    $this->db->where('id_buku', $id_buku);
    $this->db->delete('buku');
  }

  function get_id_buku($id_buku){
    $query = $this->db->get_where('buku', array('id_buku' => $id_buku));
    return $query;
  }

  function update($id_buku, $kode_buku, $kategori_buku, $judul_buku, $pengarang_buku, $penerbit_buku, $tahun_buku, $jumlah_buku){
    $data = array(
      'kode_buku' => $kode_buku,
      'kategori_buku' => $kategori_buku,
      'judul_buku' => $judul_buku,
      'pengarang_buku' => $pengarang_buku,
      'penerbit_buku' => $penerbit_buku,
      'tahun_buku' => $tahun_buku, 
      'jumlah_buku' => $jumlah_buku
    );
    $this->db->where('id_buku',$id_buku);
    $this->db->update('buku',$data);
  }

  function get($username){
    $this->db->where('username', $username);
    $result = $this->db->get('user')->row();

    return $result;
  }
}
