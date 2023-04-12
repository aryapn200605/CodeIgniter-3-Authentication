<?php $this->load->view('layouts/header'); ?>

<div class="text-center">
    <h1>Authentication CodeIgniter 3</h1>
    <p>Silakan klik link <?php echo anchor('login','Login'); ?> 
        untuk masuk ke dalam sistem atau 
        <?php echo anchor('register','Register'); ?> untuk mendaftar.
    </p> 
</div>

<?php $this->load->view('layouts/footer'); ?>