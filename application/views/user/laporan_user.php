<!-- Begin Page Content --> 
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url(''); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        foreach ($anggota as $a) { ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['alamat']; ?></td>
                        <td><?= $a['email']; ?></td>
                        <td><?= ($a['is_active'] == 1) ? 'active' : 'nonaktif' ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<!-- /.container-fluid
</div> -->
<!-- End of Main Content -->