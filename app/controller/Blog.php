<?php
class Blog extends Controller{
    public function index()
    {
        $data['judul'] = "Detail Guru";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Guru";
        $data['blog'] = $this->model("Blog_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('Blog/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Blog_Model') ->tambahDataBlog($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Blog_Model') ->hapusDataBlog($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('Blog_model')->getBlogById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Blog_model')->ubahDataBlog($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
    }
}