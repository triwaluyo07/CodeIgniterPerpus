<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <?php $this->load->view('include/navbar'); ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tipe Data</th>
                        <th>Jumlah </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Koleksi Buku </td>
                        <td>
                            <a href="<?= base_url(); ?>buku"><?= $c_book . ' Buku'; ?></a>
                        <td>
                    </tr>
                    <tr>
                        <td>Anggota</td>
                        <td><a href="<?= base_url(); ?>Member"><?= $c_member . ' Member'; ?></a>
                        </td>
                    </tr>

                    
                </tbody>
            </table>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->