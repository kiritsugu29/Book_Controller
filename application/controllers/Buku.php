<?php
class Buku extends MY_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('buku_model');
  }

  function index(){
    $data['buku'] = $this->buku_model->get_buku();
    $this->load->view('buku_view',$data);
  }

  function add_new(){
    $this->load->view('add_buku_view');
  }

  function save(){
    $id_buku = $this->input->post('id_buku');
    $kode_buku = $this->input->post('kode_buku');
    $kategori_buku = $this->input->post('kategori_buku');
    $judul_buku = $this->input->post('judul_buku');
    $pengarang_buku = $this->input->post('pengarang_buku');
    $penerbit_buku = $this->input->post('penerbit_buku');
    $tahun_buku = $this->input->post('tahun_buku');
    $jumlah_buku = $this->input->post('jumlah_buku');
    $this->buku_model->save($id_buku, $kode_buku, $kategori_buku, $judul_buku, $pengarang_buku, $penerbit_buku, $tahun_buku, $jumlah_buku);
    redirect('index.php/buku/index');
  }

  function delete(){
    $id_buku = $this->uri->segment(3);
    $this->buku_model->delete($id_buku);
    redirect('index.php/buku/index');
  }

  function edit(){
    $id_buku = $this->uri->segment(3);
    $result = $this->buku_model->get_id_buku($id_buku);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'id_buku'         => $i['id_buku'],
            'kode_buku'       => $i['kode_buku'],
            'kategori_buku'   => $i['kategori_buku'],
            'judul_buku'      => $i['judul_buku'],
            'pengarang_buku'  => $i['pengarang_buku'],
            'penerbit_buku'   => $i['penerbit_buku'],
            'tahun_buku'      => $i['tahun_buku'],
            'jumlah_buku'     => $i['jumlah_buku']
        );
        $this->load->view('edit_buku_view',$data);
    }
    
    else{
        echo "Data Was Not Found";
    }
  }

  function update(){
    $id_buku = $this->input->post('id_buku');
    $kode_buku = $this->input->post('kode_buku');
    $kategori_buku = $this->input->post('kategori_buku');
    $judul_buku = $this->input->post('judul_buku');
    $pengarang_buku = $this->input->post('pengarang_buku');
    $penerbit_buku = $this->input->post('penerbit_buku');
    $tahun_buku = $this->input->post('tahun_buku');
    $jumlah_buku = $this->input->post('jumlah_buku');
    $this->buku_model->update($id_buku, $kode_buku, $kategori_buku, $judul_buku, $pengarang_buku, $penerbit_buku, $tahun_buku, $jumlah_buku);
    redirect('index.php/buku/index');
  }

}