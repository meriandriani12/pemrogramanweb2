<?= $this->extend('layout');?>

<?= $this->section('main') ?> 

    <div class="content">
        <h1>Data Pelanggan</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    <?= $this->endSection()?>
