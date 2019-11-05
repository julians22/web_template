<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">


            <!-- DataTales Example -->
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Barang</th>
                                    <th>Jenis Layanan</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Barang</th>
                                    <th>Jenis Layanan</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($laundry as $l) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $l['kode_barang']; ?></td>
                                    <td><?= $l['jenis_layanan']; ?></td>
                                    <td><?= $l['nama_barang']; ?></td>
                                    <td><?= $l['harga']; ?></td>
                                    <td>
                                        <a href="" class="badge badge-info">Edit</a>
                                        <a href="<?= base_url('laundry/delete/') . $l['kode_barang'];?>"
                                            class="badge badge-danger">Delete</a>
                                    </td>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Layanan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableLay" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Layanan</th>
                                    <th>Jenis Layanan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Layanan</th>
                                    <th>Jenis Layanan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($layanan as $lay) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $lay['kode_layanan']; ?></td>
                                    <td><?= $lay['jenis_layanan']; ?></td>
                                    <td>
                                        <a href="" class="badge badge-info">Edit</a>
                                        <a href="<?= base_url('laundry/delete/') . $lay['kode_layanan'];?>"
                                            class="badge badge-danger">Delete</a>
                                    </td>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->