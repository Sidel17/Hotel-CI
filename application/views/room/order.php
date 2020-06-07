<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form New Transaction
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="customer_name">Nama</label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name">
                        <small class="form-text text-danger"><?php echo form_error('customer_name');?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" name="address"class="form-control" id="address">
                        <small class="form-text text-danger"><?php echo form_error('address');?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Nomor HP</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                        <small class="form-text text-danger"><?php echo form_error('phone');?></small>
                    </div>
                
                <div class="form-group">
                    <label for="room_type">Tipe kamar</label>
                    <select class="form-control" id="room_type" name="room_type">
                    <option value="Superior Room">Superior Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                    <option value="Suite Room">Suite Room</option>
                    <option value="Senior Suite Room">Senior Suite Room</option>
                    <option value="Club and Executive Room">Club and Executive Room</option>
                    </select>
                </div>
             
                    <div class="form-group">
                        <label for="room_quantity">Jumlah Kamar</label>
                        <input type="text" name="room_quantity"class="form-control" id="room_quantity">
                        <small class="form-text text-danger"><?php echo form_error('room_quantity');?></small>
                    </div>
                    <div class="form-group">
                        <label for="checkin_at">Check in</label>
                        <input type="date" name="checkin_at"class="form-control" id="checkin_at">
                        
                    </div>
               
                    <div class="form-group">
                        <label for="checkout_at">Check out</label>
                        <input type="date" name="checkout_at"class="form-control" id="checkout_at">
                    </div>
                    <button type="submit" name="order" class="btn btn-primary float-right">Order Room</button>
                </form>
               
            </div>
        </div>
         
        </div>
    </div>
</div>