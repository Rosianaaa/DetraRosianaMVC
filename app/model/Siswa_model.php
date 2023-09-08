<?php
class Siswa_model
{
    private $table = 'data_siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlog()
    {
        $this->db->query("SELECT * FROM " .$this->table);
        return $this->db->resultAll();
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " .$this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    
    public function tambahDataSiswa()
    {
        $this->db->query("INSERT INTO ". $this->table." (nama,jenis_kelamin,alamat) VALUES (:nama,:jenis_kelamin,:alamat) ");
        $this->db->bind('nama',$_POST['nama']);
        $this->db->bind('jenis_kelamin',$_POST['jenis_kelamin']);
        $this->db->bind('alamat',$_POST['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM data_siswa WHERE id =:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataSiswa($data)
    {
        $query ="UPDATE data_siswa SET
        nama =:nama,
        jenis_kelamin =:jenis_kelamin,
        alamat =:alamat
        WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}