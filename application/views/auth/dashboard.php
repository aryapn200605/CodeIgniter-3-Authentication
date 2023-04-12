<?php $this->load->view('layouts/header'); ?>

<div class="card bg-white">
     <div class="card-body p-5">
          <div class="mb-3 mt-md-4">
               <h3>Dashboard</h3>
               <hr>
               <div class="text-center">
                    <img src="<?= base_url("./images/" . $users->profile_picture) ?>" alt="<?= $users->profile_picture ?>">
               </div>
               <table class="table">
                    <tr>
                         <td>Nama</td>
                         <td>: <?= $users->nama ?></td>
                    </tr>
                    <tr>
                         <td>Email</td>
                         <td>: <?= $users->email ?></td>
                    </tr>
                    <tr>
                         <td>Password</td>
                         <td>: <?= $users->password ?></td>
                    </tr>
               </table>
               <hr>
               <div class="d-flex flex-row-reverse bd-highlight">
                    <a href="<?php echo base_url("index.php/login/logout"); ?>" class="btn btn-danger">
                         Logout
                    </a>
               </div>
          </div>
     </div>
</div>

<?php $this->load->view('layouts/footer'); ?>