<div id="content">

    <!-- Topbar -->
    <?php $this->load->view('include/navbar'); ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-12">
                <div class="col-md-12">
                    <h1>List
                        <small>Pengembalian</small>
                        <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add">
                                <span class="fa fa-plus"></span> Add New</a></div>
                    </h1>
                </div>

                <table class="table table-striped" id="mydata">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>ID Anggota</th>
                            <th>Nama Anggota</th>
                            <th>ID Buku</th>
                            <th>Nama Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>

                            <th style="text-align: right;">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ADD -->
<form>
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengembalian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">No </label>
                        <div class="col-md-10">
                            <input type="text" name="product_code" id="product_code" list="listmember" class="form-control" value="<?php echo sprintf("%04s", $no_pj) ?>" readonly>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">ID Buku</label>
                        <div class="col-md-10">
                            <input type="text" name="id_bk" id="id_bk" list=listbk class="form-control" placeholder="ID Buku">
                            <datalist id=listbk style="display: none">
                                <?php foreach ($buku as $bukus) { ?>
                                    <option value="<?php echo $bukus->id_bk; ?>"> <?php echo $bukus->id_bk . '-' . $bukus->nama_bk; ?></option>
                                <?php } ?>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Buku</label>
                        <div class="col-md-10">
                            <input type="text" name="nama_bk" id="nama_bk" class="form-control" placeholder="Nama Buku yg Dipinjam" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">ID Member</label>
                        <div class="col-md-10">
                            <input type="text" name="id_mb" id="id_mb" list=listmb class="form-control" placeholder="ID Member" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Peminjam</label>
                        <div class="col-md-10">
                            <input type="text" name="nama_mb" id="nama_mb" class="form-control" placeholder="Nama Peminjam" readonly>

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Pinjam</label>
                        <div class="col-md-10">
                            <input type="date" name="tgl_pjm" id="tgl_pjm" class="form-control" placeholder="Tanggal Pinjam" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Kembali</label>
                        <div class="col-md-10">
                            <input type="date" name="tgl_kmb" id="tgl_kmb" class="form-control" placeholder="Tanggal Kembali" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!--END MODAL ADD-->

<!-- MODAL EDIT -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Peminjam</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">No Peminjam</label>
                        <div class="col-md-10">
                            <input type="text" name="product_code_edit" id="product_code_edit" class="form-control" value="<?php echo sprintf("%04s", $no_pj) ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">ID Member</label>
                        <div class="col-md-10">
                            <input type="text" name="id_mb_edit" id="id_mb_edit" class="form-control" placeholder="ID Member" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Peminjam</label>
                        <div class="col-md-10">
                            <input type="text" name="peminjam_edit" id="peminjam_edit" class="form-control" placeholder="Nama Peminjam" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">ID Buku</label>
                        <div class="col-md-10">
                            <input type="text" name="id_bk_edit" id="id_bk_edit" class="form-control" placeholder="ID Buku" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Buku</label>
                        <div class="col-md-10">
                            <input type="text" name="nama_buku_edit" id="nama_buku_edit" class="form-control" placeholder="Nama Buku yg Dipinjam" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Pinjam</label>
                        <div class="col-md-10">
                            <input type="date" name="tgl_pjm_edit" id="tgl_pjm_edit" class="form-control" placeholder="Tanggal Pinjam" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Kembali</label>
                        <div class="col-md-10">
                            <input type="date" name="tgl_kmb_edit" id="tgl_kmb_edit" class="form-control" placeholder="Tanggal Kembali" readonly>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL EDIT-->

<!-- MODAL DETAIL -->
<form>
    <div class="modal fade" id="Modal_Detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th scope="row">ID Anggota </th>
                            <td><input type="text" name="product_code_dt" id="product_code_dt" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Nama </th>
                            <td><input type="text" name="product_name_dt" id="product_name_dt" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Tempat Lahir </th>
                            <td><input type="text" name="temp_lhr" id="temp_lhr" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Lahir </th>
                            <td><input type="text" name="tgl_lhr" id="tgl_lhr" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat </th>
                            <td><textarea type="text" name="alamat" id="alamat" class="form-control" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Anggota </th>
                            <td><input type="text" name="janggota" id="janggota" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Kelamin </th>
                            <td><input type="text" name="jkelamin" id="jkelamin" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Telepon </th>
                            <td><input type="text" name="telepon" id="telepon" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Nomor Identitas </th>
                            <td><input type="text" name="no_id" id="no_id" class="form-control" readonly>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL DETAIL-->

<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <strong>Are you sure to delete this record?</strong>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL DELETE-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/jquery.dataTables.css' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">
<!-- CSS-->

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/dataTables.bootstrap4.js' ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {


        show_product(); //call function show all product


        $('#mydata').dataTable({
            "columns": [{
                    "width": "1%" // no anggota
                },
                {
                    "width": "10%" // Id anggota
                },
                {
                    "width": "15%" //nama anggota
                },
                {
                    "width": "10%" //id buku
                },
                {
                    "width": "30%" //nama buku
                },
                {
                    "width": "10%" //tgl pinjam
                },
                {
                    "width": "10%" //tgl kembali
                },
                null
            ]
        });


        //function show all product

        function show_product() {
            $.ajax({
                type: 'ajax',
                url: '<?= base_url() ?>pengembali/product_data',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].no_pj + '</a></td>' +
                            '<td>' + data[i].id_mb + '</td>' +
                            '<td>' + data[i].nama_mb + '</td>' +
                            '<td>' + data[i].id_bk + '</td>' +
                            '<td>' + data[i].nama_bk + '</td>' +
                            '<td>' + data[i].tgl_pjm + '</td>' +
                            '<td>' + data[i].tgl_kmb + '</td>' +
                            '<td style="text-align:right;">' +
                            '<a href="javascript:void(0);" i class="btn btn-info btn-sm item_edit" data-product_code="' + data[i].no_pj + '" data-id_mb="' + data[i].id_mb + '" data-nama_mb="' + data[i].nama_mb + '"data-id_bk="' + data[i].id_bk + '"data-nama_bk="' + data[i].nama_bk + '"data-tgl_pjm="' + data[i].tgl_pjm + '"data-tgl_kmb="' + data[i].tgl_kmb + '">View</a>' + ' ' +
                            '</td>' +

                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //get data for detail record
        $('#show_data').on('click', '.item_detail', function() {
            var product_code = $(this).data('product_code');
            var product_name = $(this).data('product_name');
            var temp_lhr = $(this).data('temp_lhr');
            var tgl_lhr = $(this).data('tgl_lhr');
            var alamat = $(this).data('alamat');
            var janggota = $(this).data('janggota');
            var jkelamin = $(this).data('jkelamin');
            var telepon = $(this).data('telepon');
            var no_id = $(this).data('no_id');
            var stat_mb = $(this).data('stat_mb');



            $('#Modal_Detail').modal('show');
            $('[name="product_code_dt"]').val(product_code);
            $('[name="product_name_dt"]').val(product_name);
            $('[name="temp_lhr"]').val(temp_lhr);
            $('[name="temp_lhr"]').val(temp_lhr);
            $('[name="tgl_lhr"]').val(tgl_lhr);
            $('[name="alamat"]').val(alamat);
            $('[name="janggota"]').val(janggota);
            $('[name="jkelamin"]').val(jkelamin);
            $('[name="telepon"]').val(telepon);
            $('[name="no_id"]').val(no_id);
            $('[name="stat_mb"]').val(stat_mb);

        });

        //Save product
        $('#btn_save').on('click', function() {
            var product_code = $('#product_code').val();
            var id_mb = $('#id_mb').val();
            var nama_mb = $('#nama_mb').val();
            var id_bk = $('#id_bk').val();
            var nama_bk = $('#nama_bk').val();
            var tgl_pjm = $('#tgl_pjm').val();
            var tgl_kmb = $('#tgl_kmb').val();

            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>Pengembali/save',
                dataType: 'json',
                data: {
                    product_code: product_code,
                    id_mb: id_mb,
                    nama_mb: nama_mb,
                    id_bk: id_bk,
                    nama_bk: nama_bk,
                    tgl_pjm: tgl_pjm,
                    tgl_kmb: tgl_kmb
                },
                success: function(data) {
                    $('[name="product_code"]').val("");
                    $('[name="id_mb"]').val("");
                    $('[name="nama_mb"]').val("");
                    $('[name="id_bk"]').val("");
                    $('[name="nama_bk"]').val("");
                    $('[name="tgl_pjm"]').val("");
                    $('[name="tgl_kmb"]').val("");
                    $('#Modal_Add').modal('hide');
                    location.reload();

                }
            });

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('pengembali/update_status') ?>",
                dataType: "JSON",
                data: {
                    id_bk: id_bk
                },
                success: function(data) {
                    $('[name="id_bk"]').val("");
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click', '.item_edit', function() {
            var product_code = $(this).data('product_code');
            var id_mb = $(this).data('id_mb');
            var nama_mb = $(this).data('nama_mb');
            var id_bk = $(this).data('id_bk');
            var nama_bk = $(this).data('nama_bk');
            var tgl_pjm = $(this).data('tgl_pjm');
            var tgl_kmb = $(this).data('tgl_kmb');

            $('#Modal_Edit').modal('show');
            $('[name="product_code_edit"]').val(product_code);
            $('[name="id_mb_edit"]').val(id_mb);
            $('[name="peminjam_edit"]').val(nama_mb);
            $('[name="id_bk_edit"]').val(id_bk);
            $('[name="nama_buku_edit"]').val(nama_bk);
            $('[name="tgl_pjm_edit"]').val(tgl_pjm);
            $('[name="tgl_kmb_edit"]').val(tgl_kmb);
        });


        //autocomplete buku
        $('#id_bk').on('change', function() {
            var buku = $('#id_bk').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('pengembali/getbk') ?>",
                data: {
                    id_bk: buku
                },
                success: function(data) {
                    var hasil = JSON.parse(data);
                    $.each(hasil, function(key, val) {
                        document.getElementById('id_bk').value = val.id_bk;
                        document.getElementById('nama_bk').value = val.nama_bk;
                        document.getElementById('id_mb').value = val.id_mb;
                        document.getElementById('nama_mb').value = val.nama_mb;
                        document.getElementById('tgl_pjm').value = val.tgl_pjm;
                        document.getElementById('tgl_kmb').value = val.tgl_kmb;


                    });
                }
            });
        });


    });
</script>