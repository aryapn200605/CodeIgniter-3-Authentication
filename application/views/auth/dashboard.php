<?php $this->load->view('layouts/header'); ?>

<div class="card bg-white">
     <div class="card-body p-5">
          <div class="mb-3 mt-md-4">
               <h1 class="text-center">Profile</h1>
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
               </table>
          </div>
     </div>
</div>

<?php $this->load->view('layouts/footer'); ?>