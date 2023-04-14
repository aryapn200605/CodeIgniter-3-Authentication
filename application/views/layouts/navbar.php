<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a href="<?php echo site_url("/"); ?>" class="navbar-brand" disabled>CodeIgniter 3</a>
    <form class="d-flex">
      <?php if ($this->session->userdata('id')) { ?>
        <a href="<?php echo site_url("login/logout"); ?>" class="btn btn-outline-danger">Sign Out</a>
      <?php } else { ?>
        <a href="<?php echo site_url('/login') ?>" class="btn btn-outline-primary me-3" type="submit">Login</a>
        <a href="<?php echo site_url('/register') ?>" class="btn btn-outline-danger" type="submit">Register</a>
      <?php } ?>
    </form>
  </div>
</nav>