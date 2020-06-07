<div class="container">

<?php if($this->session->flashdata('flash')):?>
<div class="row mt-3">
    <div class="col-md-6">

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Room Availability <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>.
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
        </div>
        <h3>List of Room</h3>
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Room Code</th>
                    <th>Room Type</th>
                    <th>Booked Room</th>
                    <th>Quantity of Room</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($availability) :
                    foreach ($availability as $r) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $r['room_id']; ?></td>
                            <td><?= $r['room_type']; ?></td>
                            <td><?= $r['Book_Kamar']; ?></td>  
                            <td><?= $r['Jumlah_Kamar']; ?></td>
                              
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


