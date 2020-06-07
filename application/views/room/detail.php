<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Order Room
                </div>
                <div class="card-body">
                    <p class="card-text">Nama           :<?= $room['customer_name']; ?></p>
                    <p class="card-text">Alamat         :<?= $room['address']; ?></p>
                    <p class="card-text">Nomor HP       :<?= $room['phone']; ?></p>
                    <p class="card-text">Tipe Kamar     :<?= $room['room_type']; ?></p>
                    <p class="card-text">Jumlah Kamar   :<?= $room['room_quantity']; ?></p>
                    <p class="card-text">Check in At    :<?= $room['checkin_at']; ?></p>
                    <p class="card-text">Check out At   :<?= $room['checkout_at']; ?></p>
                    <a href="<?php echo base_url();?>room" class="btn btn-primary">Kembali</a>
                </div>
             </div>
        </div>
    </div>
</div>