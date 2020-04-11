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
                    <h1>Daftar
                        <small>Buku</small>
                        <?php if ($this->session->userdata('level') === '1') : ?>
                            <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                        <?php endif; ?>
                    </h1>
                </div>

                <table class="table table-striped table-sm" id="mydata">
                    <thead>
                        <tr>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Status</th>
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
<?php if ($this->session->userdata('level') === '1') : ?>
    <form>
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kode Buku</label>
                            <div class="col-md-10">
                                <input type="text" name="product_code" id="product_code" class="form-control" value="<?php echo sprintf("%04s", $id_bk) ?>" readonly>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama Buku</label>
                            <div class="col-md-10">
                                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Nama Buku">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Pengarang</label>
                            <div class="col-md-10">
                                <input type="text" name="pengarang" id="pengarang" class="form-control" placeholder="Pengarang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Penerbit</label>
                            <div class="col-md-10">
                                <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Penerbit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                                <select class="form-control" name="status_bk" id="status_bk">
                                    <option>Tersedia</option>
                                    <option>Terpinjam</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Perolehan</label>
                            <div class="col-md-10">
                                <select class="form-control" name="perolehan" id="perolehan">
                                    <option>Pembelian</option>
                                    <option>Hadiah</option>
                                </select>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kode Buku</label>
                            <div class="col-md-10">
                                <input type="text" name="product_code_edit" id="product_code_edit" class="form-control" placeholder="Kode Buku" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama Produk</label>
                            <div class="col-md-10">
                                <input type="text" name="product_name_edit" id="product_name_edit" class="form-control" placeholder="Nama Buku">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Pengarang</label>
                            <div class="col-md-10">
                                <input type="text" name="pengarang_edit" id="pengarang_edit" class="form-control" placeholder="Pengarang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Penerbit</label>
                            <div class="col-md-10">
                                <input type="text" name="penerbit_edit" id="penerbit_edit" class="form-control" placeholder="Penerbit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                                <select class="form-control" name="status_bk_edit" id="status_bk_edit" >
                                    <option>Tersedia</option>
                                    <option>Terpinjam</option>
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
<?php endif; ?>


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

        $('#mydata').DataTable({
            "columns": [{
                    "width": "2%"
                },
                {
                    "width": "40%"
                },
                {
                    "width": "20%"
                },
                {
                    "width": "20%"
                },
                {
                    "width": "20%"
                },
                null
            ]
        });

        //function show all product
        function show_product() {
            $.ajax({
                type: 'ajax',
                url: '<?= base_url() ?>buku/product_data',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].id_bk + '</td>' +
                            '<td>' + data[i].nama_bk + '</td>' +
                            '<td>' + data[i].pengarang + '</td>' +
                            '<td>' + data[i].penerbit + '</td>' +
                            '<td>' + data[i].status_bk + '</td>' +
                            '<td style="text-align:right;">' +
                            '<div class="row">' +
                            '<div class="col-5"><a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-product_code="' + data[i].id_bk + '" data-product_name="' + data[i].nama_bk + '" data-pengarang="' + data[i].pengarang + '"data-penerbit="' + data[i].penerbit + '"data-status_bk="' + data[i].status_bk + '">Edit</a></div>' + ' ' +
                            '<div class="col-5"><a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="' + data[i].id_bk + '">Delete</a></div>' +
                            '</div>'
                        '</td>' +

                        '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save product
        $('#btn_save').on('click', function() {
            var product_code = $('#product_code').val();
            var product_name = $('#product_name').val();
            var pengarang = $('#pengarang').val();
            var penerbit = $('#penerbit').val();
            var perolehan = $('#perolehan').val();
            var status_bk = $('#status_bk').val();
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>buku/save',
                dataType: 'json',
                data: {
                    product_code: product_code,
                    product_name: product_name,
                    pengarang: pengarang,
                    penerbit: penerbit,
                    perolehan: perolehan,
                    status_bk: status_bk
                },
                success: function(data) {
                    $('[name="product_code"]').val("");
                    $('[name="product_name"]').val("");
                    $('[name="pengarang"]').val("");
                    $('[name="penerbit"]').val("");
                    $('[name="perolehan"]').val("");
                    $('[name="status_bk"]').val("");
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
            var pengarang = $(this).data('pengarang');
            var penerbit = $(this).data('penerbit');
            var status_bk = $(this).data('status_bk');

            $('#Modal_Edit').modal('show');
            $('[name="product_code_edit"]').val(product_code);
            $('[name="product_name_edit"]').val(product_name);
            $('[name="pengarang_edit"]').val(pengarang);
            $('[name="penerbit_edit"]').val(penerbit);
            $('[name="status_bk_edit"]').val(status_bk);
        });

        //update record to database
        $('#btn_update').on('click', function() {
            var product_code = $('#product_code_edit').val();
            var product_name = $('#product_name_edit').val();
            var pengarang = $('#pengarang_edit').val();
            var penerbit = $('#penerbit_edit').val();
            var status_bk = $('#status_bk_edit').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('buku/update') ?>",
                dataType: "JSON",
                data: {
                    product_code: product_code,
                    product_name: product_name,
                    pengarang: pengarang,
                    penerbit: penerbit,
                    status_bk: status_bk
                },
                success: function(data) {
                    $('[name="product_code_edit"]').val("");
                    $('[name="product_name_edit"]').val("");
                    $('[name="pengarang_edit"]').val("");
                    $('[name="penerbit_edit"]').val("");
                    $('[name="status_bk_edit"]').val("");
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
                url: "<?php echo site_url('buku/delete') ?>",
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