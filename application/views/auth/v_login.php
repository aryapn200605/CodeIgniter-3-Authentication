<?php $this->load->view('layouts/header'); ?>

<div class="card bg-white">
    <div class="card-body p-5">
        <div class="mb-3 mt-md-4">
          
          <?php echo form_open('login'); ?>
          <!-- login form -->
            <h2 class="fw-bold mb-2 text-center">Login</h2>
            <div class="mb-3">
                <label class="form-label ">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Enter your email">
                <p><?php echo form_error('email') ;?></p>
            </div>
            <div class="mb-3">
                <label class="form-label ">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="Enter your password">
                <p><?php echo form_error('password') ;?></p>
            </div>
            <!-- forgot passowrd -->
            <p class="small">
              <a class="text-primary"><?php echo anchor(site_url().'/forgot_password','Forgot password?'); ?></a>
            </p>
            <div class="d-grid">
                <button class="btn btn-outline-dark" type="submit" name="btnSubmit" >Login</button>
            </div>

            <?php echo form_close();?>

        </div>
        <div class="mb-0 text-center">
          <p>
            Don't have an account? <?php echo anchor(site_url().'/register','Sign Up'); ?>
          </p>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/footer'); ?>