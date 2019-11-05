<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>



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
                                    <th>ID Order</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Jenis Parfum</th>
                                    <th>Tanggal Order</th>
                                    <th>Total Harga</th>
                                    <th>Status Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($order as $o) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $o['id_order']; ?></td>
                                    <td><?= $o['nama_pelanggan']; ?></td>
                                    <td><?= $o['alamat']; ?></td>
                                    <td><?= $o['jenis_parfum']; ?></td>
                                    <td><?= $o['tgl_order']; ?></td>
                                    <td>Rp. <?= number_format($o['total_harga'], 2, ",", "."); ?></td>
                                    <td><?= $o['status_order']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>laundry/detailorder/<?= $o['id_order']; ?>" class="btn btn-circle btn-info"><i class="fas fa-eye"></i></a>
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
<!-- /.container-fluid -->