<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=     , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL;?>/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="border-bottom: 2px solid gray">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_URL; ?>">Detra Rosiana</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAlMarkup"
                aria-controls="navbarNavAlMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAlMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>">Home <span class="sr-only"></span></a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/blog">Data Guru</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/komli">Kompetensi Keahlian</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>

<style>
    body{
        background-color: pink;
    }
</style>