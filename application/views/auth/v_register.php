<?php $this->load->view('layouts/header'); ?>

<div class="card bg-white">
    <div class="card-body p-5">
        <div class="mb-3 mt-md-4">
          
          <?php

            if($this->session->flashdata('sukses')) {
                  echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
            }
            
            echo form_open_multipart('register');
          
          ?>
          <!-- register form -->
            <h2 class="fw-bold mb-2 text-center">Register</h2>
            <div class="mb-3">
                <label class="form-label ">Name</label>
                <input type="name" class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>" placeholder="Enter your name">
                <p><?php echo form_error('name') ;?></p>
            </div>
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
            <div class="mb-3">
                <label class="form-label ">Confirm Password</label>
                <input type="password" class="form-control" name="password_conf" id="password_conf" value="<?php echo set_value('password_conf'); ?>" placeholder="Confirm password">
                <p><?php echo form_error('password_conf') ;?></p>
            </div>
            <div class="mb-3">
                <label class="form-label ">Profile Picture</label>
                <input type="file" class="form-control" name="image_upload" id="image_upload" value="<?php echo set_value('image_upload'); ?>" placeholder="Confirm password">
                <p><?php echo form_error('image_upload') ;?></p>
            </div>
            <div class="d-grid">
                <button class="btn btn-outline-dark" type="submit" name="btnSubmit" >Register</button>
            </div>

            <?php echo form_close();?>

        </div>
        <div class="mb-0 text-center">
          <p>
            Already have an account? <?php echo anchor(site_url().'/login','Sign In'); ?>
          </p>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/footer'); ?>