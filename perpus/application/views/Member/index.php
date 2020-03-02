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
                    <h1>Member
                        <small>List</small>
                        <div class="float-right"><a href="javascript:void(0);" 
                        class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add">
                        <span class="fa fa-plus"></span> Add New</a></div>
                    </h1>
                </div>

                <table class="table table-striped" id="mydata">
                    <thead>
                        <tr>
                            <th>No Anggota</th>
                            <th>Nama Anggota</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Jenis Anggota</th>

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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Id Anggota</label>
                        <div class="col-md-10">
                            <input type="text" name="product_code" id="product_code" class="form-control" value="<?php echo sprintf("%04s", $id_mb) ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama </label>
                        <div class="col-md-10">
                            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Nama Member">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-10">
                            <select class="form-control" name="jkelamin" id="jkelamin">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tempat Lahir</label>
                        <div class="col-md-10">
                            <input type="text" name="kelahiran" id="kelahiran" class="form-control" placeholder="Tempat Lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-10">
                            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-10">
                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jenis Anggota</label>
                        <div class="col-md-10">
                            <select class="form-control" name="janggota" id="janggota">
                                <option>UMUM</option>
                                <option>MAHASISWA</option>
                                <option>PELAJAR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">No Telepon</label>
                        <div class="col-md-10">
                            <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Nomor Telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">No Identitas</label>
                        <div class="col-md-10">
                            <input type="text" name="no_idt" id="no_idt" class="form-control" placeholder="Nomor Identitas">
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">No Anggota</label>
                        <div class="col-md-10">
                            <input type="text" name="product_code_edit" id="product_code_edit" class="form-control" placeholder="No Anggota" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Anggota</label>
                        <div class="col-md-10">
                            <input type="text" name="product_name_edit" id="product_name_edit" class="form-control" placeholder="Nama Buku">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-10">
                            <input type="text" name="alamat_edit" id="alamat_edit" class="form-control" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-10">
                            <select class="form-control" name="jkelamin_edit" id="jkelamin_edit">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jenis Anggota</label>
                        <div class="col-md-10">
                            <select class="form-control" name="janggota_edit" id="janggota_edit">
                                <option>UMUM</option>
                                <option>MAHASISWA</option>
                                <option>PELAJAR</option>
                            </select>
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>" -->
<!-- CSS-->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/dataTables.bootstrap4.js' ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        show_product(); //call function show all product
        $('#mydata').DataTable({
            "columns": [

                {
                    "width": "10%"
                },
                {
                    "width": "20%"
                },
                {
                    "width": "40%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
                },
                null
            ]
        });
        //function show all product
        function show_product() {
            $.ajax({
                type: 'ajax',
                url: '<?= base_url() ?>member/product_data',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td> <a href="javascript:void(0);" class="item_detail" data-product_code="' + data[i].id_mb + '" data-product_name="' + data[i].nama_mb + '" data-alamat="' + data[i].alamat + '"data-jkelamin="' + data[i].jkelamin + '"data-statmb="' + data[i].stat_mb + '" data-temp_lhr="' + data[i].temp_lhr + '"data-tgl_lhr="' + data[i].tgl_lhr + '"data-janggota="' + data[i].janggota + '"data-telepon="' + data[i].telepon + '"data-no_id="' + data[i].no_id + '">' + data[i].id_mb + '</a></td>' +
                            '<td>' + data[i].nama_mb + '</td>' +
                            '<td>' + data[i].alamat + '</td>' +
                            '<td>' + data[i].jkelamin + '</td>' +
                            '<td>' + data[i].janggota + '</td>' +
                            '<td style="text-align:right;">' +
                            '<a href="javascript:void(0);" i class="btn btn-info btn-sm item_edit" data-product_code="' + data[i].id_mb + '" data-product_name="' + data[i].nama_mb + '" data-alamat="' + data[i].alamat + '"data-jkelamin="' + data[i].jkelamin + '"data-janggota="' + data[i].janggota + '">Edit</a>' + ' ' +
                            '<a href="javascript:void(0);" i class="btn btn-danger btn-sm item_delete" data-product_code="' + data[i].id_mb + '">Delete</a>' +
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
            var product_name = $('#product_name').val();
            var jkelamin = $('#jkelamin').val();
            var kelahiran = $('#kelahiran').val();
            var tanggal = $('#tanggal').val();
            var alamat = $('#alamat').val();            
            var janggota = $('#janggota').val();            
            var telepon = $('#telepon').val();
            var no_idt = $('#no_idt').val();

            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>member/save',
                dataType: 'json',
                data: {
                    product_code: product_code,
                    product_name: product_name,
                    jkelamin: jkelamin,
                    kelahiran : kelahiran,
                    tanggal : tanggal,
                    alamat:alamat,
                    janggota: janggota,
                    telepon : telepon,
                    no_idt : no_idt
                },
                success: function(data) {
                    $('[name="product_code"]').val("");
                    $('[name="product_name"]').val("");
                    $('[name="jkelamin"]').val("");
                    $('[name="alamat"]').val("");                    
                    $('[name="janggota"]').val("");
                    $('[name="kelahiran"]').val("");
                    $('[name="tanggal"]').val("");
                    $('[name="telepon"]').val("");
                    $('[name="no_idt"]').val("");
                    $('#Modal_Add').modal('hide');
                    location.reload();

                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click', '.item_edit', function() {
            var product_code = $(this).data('product_code');
            var product_name = $(this).data('product_name');
            var alamat = $(this).data('alamat');
            var jkelamin = $(this).data('jkelamin');
            var janggota = $(this).data('janggota');

            $('#Modal_Edit').modal('show');
            $('[name="product_code_edit"]').val(product_code);
            $('[name="product_name_edit"]').val(product_name);
            $('[name="alamat_edit"]').val(alamat);
            $('[name="jkelamin_edit"]').val(jkelamin);
            $('[name="janggota_edit"]').val(janggota);
        });

        //update record to database
        $('#btn_update').on('click', function() {
            var product_code = $('#product_code_edit').val();
            var product_name = $('#product_name_edit').val();
            var alamat = $('#alamat_edit').val();
            var jkelamin = $('#jkelamin_edit').val();
            var janggota = $('#janggota_edit').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('member/update') ?>",
                dataType: "JSON",
                data: {
                    product_code: product_code,
                    product_name: product_name,
                    alamat: alamat,
                    jkelamin : jkelamin,
                    janggota : janggota 
                },
                success: function(data) {
                    $('[name="product_code_edit"]').val("");
                    $('[name="product_name_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('[name="jkelamin_edit"]').val("");
                    $('[name="janggota_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click', '.item_delete', function() {
            var product_code = $(this).data('product_code');

            $('#Modal_Delete').modal('show');
            $('[name="product_code_delete"]').val(product_code);
        });

        //delete record to database
        $('#btn_delete').on('click', function() {
            var product_code = $('#product_code_delete').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('member/delete') ?>",
                dataType: "JSON",
                data: {
                    product_code: product_code
                },
                success: function(data) {
                    $('[name="product_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    location.reload();
                }
            });
            return false;
        });

    });
</script>