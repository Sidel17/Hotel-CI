<div class="container">

<?php if($this->session->flashdata('flash')):?>
<div class="row mt-3">
    <div class="col-md-6">

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data order room <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        </div>

    </div>
    
</div>
<?php endif;?>
<div class="row mt-3">
<div class="col-md-4">
<a href="<?php echo base_url();?>room/order" class="btn btn-primary">New Transaction</a>


</div>

</div>

<div class="row mt-3">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Transaction..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        
        </div>
        <h3>List of Transaction</h3>
        <div class="row mt">
            <div class="col-md">
            <?php if(empty($room)):?>
                <div class="alert alert-danger" role="alert">
                Data Order Room tidak ditemukan.
                </div>
            <?php endif;?>
            <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Customer</th>
                    <th>Adress</th>
                    <th>Checkin_at</th>
                    <th>Quantity of Room</th>
                    <th>Room type</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($room) :
                    foreach ($room as $r) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $r['customer_name']; ?></td>
                            <td><?= $r['address']; ?></td>
                            <td><?= $r['checkin_at']; ?></td>
                            <td align = "center"><?= $r['room_quantity']; ?></td>
                            <td><?= $r['room_type']; ?></td>
                            <td>
                                <a href="<?= base_url();?>room/ubah/<?=$r['no'];?>" class="badge badge-success float-right">Change</a>
                                <a href="<?= base_url();?>room/hapus/<?=$r['no'];?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Delete</a>
                        </td>    
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>        
        </div>
    </div>
    </div>
</div>


