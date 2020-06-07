<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Ubah Data Order Room
            </div>
            <div class="card-body">
                <form action="" method="post">
                <input type="hidden" name="no" value="<?=$room['no'] ?>">
                    <div class="form-group">
                        <label for="customer_name">Nama</label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name" value="<?php echo $room['customer_name'];?>">
                        <small class="form-text text-danger"><?php echo form_error('customer_name');?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" name="address"class="form-control" id="address" value="<?php echo $room['address'];?>">
                        <small class="form-text text-danger"><?php echo form_error('address');?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Nomor HP</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $room['phone'];?>">
                        <small class="form-text text-danger"><?php echo form_error('phone');?></small>
                    </div>
                
                <div class="form-group">
                    <label for="room_type">Tipe kamar</label>
                    <select class="form-control" id="room_type" name="room_type">
                    <?php foreach($room_type as $ro): ?>
                        <?php if($ro == $room['room_type'] ):?>
                            <option value="<?= $ro; ?>" selected><?= $ro; ?></option>
                        <?php else:?>
                            <option value="<?= $ro; ?>"><?= $ro; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </select>
                </div>
             
                    <div class="form-group">
                        <label for="room_quantity">Jumlah Kamar</label>
                        <input type="text" name="room_quantity"class="form-control" id="room_quantity" value="<?php echo $room['room_quantity'];?>">
                        <small class="form-text text-danger"><?php echo form_error('room_quantity');?></small>
                    </div>
                    <div class="form-group">
                        <label for="checkin_at">Check in</label>
                        <input type="date" name="checkin_at"class="form-control" id="checkin_at" value="<?php echo $room['checkin_at'];?>">
                        
                    </div>
               
                    <div class="form-group">
                        <label for="checkout_at">Check out</label>
                        <input type="date" name="checkout_at"class="form-control" id="checkout_at" value="<?php echo $room['checkout_at'];?>">
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Change Data</button>
                </form>
               
            </div>
        </div>
         
        </div>
    </div>
</div>