<br><div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/sekolah') ?>">Sekolah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Jarak Sekolah</li>
        </ol>
    </nav>
    <br>
    <h3>Tambah Jarak Sekolah</h3>
    <br>
    <form action="<?= site_url('c_tambah/jarakschool') ?>" method="POST">
        <div class="form-group">
            <label for="">Sekolah</label>
            <select name="id_sekolah" class="form-control">
                <?php foreach ($sekolah as $b) { ?>
                    <option value="<?= $b['id_sekolah'] ?>"><?= $b['sekolah'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Bimbel</label>
            <select name="id_bimbel" class="form-control">
                <?php foreach ($tampil as $b) { ?>
                    <option value="<?= $b['id_bimbel'] ?>"><?= $b['nama'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Jarak</label>
            <input type="text" class="form-control" name="jarak">
            <small><?php echo form_error('jarak'); ?></small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>