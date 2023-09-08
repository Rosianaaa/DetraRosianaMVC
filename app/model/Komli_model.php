<?php
class Komli_model
{
    private $table = 'data_komli';
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
    
    public function tambahDataKomli()
    {
        $this->db->query("INSERT INTO ". $this->table." (nama) VALUES (:nama) ");
        $this->db->bind('nama',$_POST['nama']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataKomli($id)
    {
        $query = "DELETE FROM data_komli WHERE id =:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataKomli($data)
    {
        $query ="UPDATE data_komli SET
        nama =:nama,
        WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}