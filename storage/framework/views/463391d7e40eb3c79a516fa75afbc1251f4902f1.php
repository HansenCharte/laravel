
<div class="col-lg-6">
    <form method="POST" action="/konsumen/update/<?php echo e($konsumen->id); ?>">
        <?php echo method_field("put"); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input name="Nama" type="text" class="form-control" id="Nama" value="<?php echo e(old('Nama', $konsumen->Nama)); ?>">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input name="Email" type="text" class="form-control" id="Email" value="<?php echo e(old('Email', $konsumen->Email)); ?>">
        </div>
        <div class="form-group">
            <label for="Waktu">Jam</label>
            <input name="Waktu" type="number" class="form-control" id="Waktu">
        </div>
        <div class="form-group">
            <label for="Number">Phone Number</label>
            <input name="Number" type="text" class="form-control" id="Number" value="<?php echo e(old('Number', $konsumen->Number)); ?>">
        </div>
        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input name="Tanggal" type="date" class="form-control" id="Tanggal">
                        </div>
        <div class="form-group">
            <label for="Message">Message</label>
            <textarea name="Message" class="form-control" id="Message" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ok</button>
        </div>
    </form>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Praktek\login-and-registration\resources\views/home/edit.blade.php ENDPATH**/ ?>