<?php $this->load->view('layouts/header'); ?>
<?php echo form_open('forgot_password/reset_password/token/' . $token); ?>

<div class="card bg-white">
    <div class="card-body p-5">
        <div class="mb-3 mt-md-4">
            <h2 class="fw-bold mb-2 text-center">Reset Password</h2>
            <hr>
            <h6 class="mt-3 mb-3">Hello <b><?php echo $nama; ?></b>, Please enter your new password</h6>

            <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="Enter your password">
                <p><?php echo form_error('password') ;?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="passconf" id="passconf" value="<?php echo set_value('passconf'); ?>" placeholder="Confirm your password">
                <p><?php echo form_error('passconf') ;?></p>
            </div>

            <div class="d-grid">
                <button class="btn btn-outline-dark" type="submit" name="btnSubmit" >Send</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/footer'); ?>