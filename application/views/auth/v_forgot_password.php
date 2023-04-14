<?php $this->load->view('layouts/header'); ?>
<?php echo form_open('forgot_password'); ?>

<div class="card bg-white">
    <div class="card-body p-5">
        <div class="mb-3 mt-md-4">
            <h2 class="fw-bold mb-2 text-center">Forgot Password</h2>
            <div class="mb-5 mt-5">
                <label class="form-label">Please enter your registered email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Enter your email">
                <p><?php echo form_error('email') ;?></p>
            </div>
            <div class="d-grid">
                <button class="btn btn-outline-dark" type="submit" name="btnSubmit" >Send</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/footer'); ?>