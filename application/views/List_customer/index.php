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



</div>

</div>

<div class="row mt-3">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Customer..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        
        </div>
        <h3>List of Customer</h3>
        <div class="row mt">
            <div class="col-md">
            <?php if(empty($room)):?>
                <div class="alert alert-danger" role="alert">
                Data Order Room tidak ditemukan.
                </div>
            <?php endif;?>
                <ul class="list-group">
                    <?php foreach($room as $r):?>
                        <li class="list-group-item">Nama : <?= $r['customer_name'];?> 
                        <p>Tipe Kamar : <?= $r['room_type'];?></p>
                        <p>Check in At : <?= $r['checkin_at'];?></p> 
                        <p>Check out At : <?= $r['checkout_at'];?></p>
                        <a href="<?= base_url();?>room/hapus/<?=$r['no'];?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= base_url();?>room/ubah/<?=$r['no'];?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url();?>room/detail/<?=$r['no'];?>" class="badge badge-primary float-right">detail</a>
                        </li>
                        
                    <?php endforeach;?>
                </ul>
            </div>
        </div>


    </div>
</div>


