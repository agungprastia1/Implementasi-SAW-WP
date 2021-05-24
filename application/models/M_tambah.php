<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Tambah extends CI_Model
{
// Admin

    // Bimbel
    public function bimbel()
    {
    	$data["id"] = $this->input->post('id');
        $data["nama"] = $this->input->post('nama');
        $data["alamat"] = $this->input->post('alamat');
        $data["harga"] = $this->input->post('harga');
        $res = array(
            'id_bimbel' => $data["id"],
            'nama' => $data["nama"],
            'alamat' => $data["alamat"],
            'harga' => $data["harga"]
        );

        $this->db->insert("bimbel",$res);

        redirect(base_url('c_tampil'));
    }

    // Deskripsi
    public function deskripsi()
    {
    	$data["id"] = $this->input->post('id');
        $data["deskripsi"] = $this->input->post('deskripsi');
        $data["keterangan"] = $this->input->post('keterangan');
        $data["site"] = $this->input->post('situs');
        $data["no"] = $this->input->post('telpon');
        $data["email"] = $this->input->post('email');
        $data["maps"] = $this->input->post('maps');
        $data["foto"]    = $this->addfoto();
        $res = array(
            'id_bimbel' => $data["id"],
            'judul' => $data["deskripsi"],
            'keterangan' => $data["keterangan"],
            'site' => $data["site"],
            'no' => $data["no"],
            'email' => $data["email"],
            'maps' => $data["maps"],
			'foto' => $data["foto"]
        );
        $this->db->insert("deskripsi",$res);
        redirect(base_url('c_tampil/deskripsi'));
    }

    //tambah foto
    public function addfoto()
    {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "aset/img/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = $fotobaru;
            return $res;
        }

        return "logo.png";
    }
    
    // Sekolah
    public function addschool()
    {
        $data["idsekolah"] = $this->input->post('idsekolah');
        $data["sekolah"] = $this->input->post('sekolah');


        $res = array(
            'id_sekolah' => $data["idsekolah"],
            'sekolah' => $data["sekolah"],

        );
        $this->db->insert("sekolah",$res);
        redirect(base_url('c_tampil/sekolah'));
    }

    // Jarak Sekolah
    public function jarakschool()
    {
        $data["id_sekolah"] = $this->input->post('id_sekolah');
        $data["id_bimbel"] = $this->input->post('id_bimbel');
        $data["jarak"] = $this->input->post('jarak');

        $res = array(
            'id_sekolah' => $data["id_sekolah"],
            'id_bimbel' => $data["id_bimbel"],
            'jarak' => $data["jarak"]
        );
        $this->db->insert("jarak", $res);
        redirect(base_url('c_tampil/sekolah'));
    }

    // Fasilitas
    public function addfasilitas()
    {
        $data["idfasilitas"] = $this->input->post('idfasilitas');
        $data["fasilitas"] = $this->input->post('fasilitas');

        $res = array(
            'id_fasilitas' => $data["idfasilitas"],
            'fasilitas' => $data["fasilitas"]
        );
        $this->db->insert("fasilitas", $res);
        redirect(base_url('c_tampil/fasilitas'));
    }

    // Get Falitas
    public function addfasilitasbimbel()
    {
        $data["idbimbel"] = $this->input->post('idbimbel');
        $data["idfas"] = $this->input->post('idfas');
        $con = count($data["idfas"]);

        for ($i = 0; $i < $con; $i++) {
            $data["idfas"][$i] . "-";
        }
        $fas = implode("-", $data["idfas"]);

        $f = explode("-", $fas);


        for ($i = 0; $i < $con; $i++) {

            $res = array(
                'id_bimbel' => $data["idbimbel"],
                'id_fasilitas' => $f[$i]
            );


            $this->db->insert("getfasilitas", $res);
        }
        redirect(base_url('c_tampil/fasilitas'));
    }
    // Kriteria
    public function addkriteria()
    {
        $data["kriteria"] = $this->input->post('kriteria');
        $data["bobot"] = $this->input->post('bobot');
        $data["keterangan"] = $this->input->post('keterangan');
        $res = array(
            'kriteria' => $data["kriteria"],
            'bobot' => $data["bobot"],
            'keterangan' => $data["keterangan"]
        );
        $this->db->insert("kriteria", $res);
        redirect(base_url('c_tampil/kriteria'));
    }
// End Admin
}
