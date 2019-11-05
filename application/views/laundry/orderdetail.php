<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>



    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-11">
                    <h6 class="m-0 font-weight-bold text-primary">Order Id : <?= $no; ?></h6>

                </div>
                <div class="col">
                    <button class="btn text-light" style="background: #27ae60"><i class="fas fa-print"></i></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Barang</th>
                            <th>Kode Layanan</th>
                            <th>Harga Satuan</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($order as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $o['kode_barang']; ?></td>
                            <td><?= $o['kode_layanan']; ?></td>
                            <td>Rp. <?= number_format($o['harga_satuan'], 2, ",", "."); ?></td>
                            <td><?= $o['jumlah_barang']; ?></td>
                            <td>Rp. <?= number_format($o['subtotal'], 2, ",", "."); ?></td>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tr>
                        <tr>
                            <th colspan="5">Total</th>
                            <td>Rp. <?= number_format($total, 2, ",", "."); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->