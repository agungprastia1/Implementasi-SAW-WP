<br><div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Deskripsi</li>
        </ol>
    </nav>
    <br>
    <h3>Deskripsi Bimbel</h3><br>
    <a href="<?= site_url('c_tampil/addesk') ?>" class="btn btn-primary">Tambah Deskripsi </a>
    <br><br>
    <table class="table-responsive">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Bimbel</th>
                <th scope="col">Judul</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Situs</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Email</th>
                <th scope="col">Maps</th>
                <th scope="col">Foto</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($tampil as $b) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $b['nama'] ?></td>
                    <td><?= $b['judul'] ?></td>
                    <td><?= $b['keterangan'] ?></td>
                    <td><?= $b['site'] ?></td>
                    <td><?= $b['no'] ?></td>
                    <td><?= $b['email'] ?></td>
                    <td><?= $b['maps'] ?></td>
                    <td><img src="<?= base_url('aset/img/').$b['foto']  ?>"></td>
                    <td>
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_tampil/editdesk/') . $b['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_hapus/deldes/') . $b['id'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>