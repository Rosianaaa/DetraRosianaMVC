<?php
class User extends Controller {
    public function index() {
        $data['judul'] = "User";
        $this->view('templates/header', $data);
        $this->view("user/index");
        $this->view('templates/footer');
    }
    public function profile($nama ="Detra Rosiana",
    $pekerjaan = "Pelajar", $nama1='Detra') {
        $data['judul'] = "User";
        $data['nama'] = $nama1;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view("user/profile", $data);
        $this->view('templates/footer');
    }
}