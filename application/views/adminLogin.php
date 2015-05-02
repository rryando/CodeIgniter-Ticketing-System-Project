<? $this->load->view('includes/header');?>
<body style="background-color:#303030;">

<div style= "margin-left:35%; margin-top:150px; ">
<div class="container-fluid" >
    <div class="col-md-6">
  <form class="form-signin" role="form" action="<?=site_url('login/loginCheck'); ?>" method="post" accept-charset="utf-8">
    <h2 class="form-signin-heading text-center" style="color:#fff;">Login Sistem Ticketing</h2>
    <input class="form-control" name="username" placeholder="username" required maxlength="40" autofocus>
    <input class="form-control" type="password" name="password" placeholder="password" required maxlength="20" />
    <label class="checkbox">
      <input value="remember-me" type="checkbox"> Remember me
    </label>
    <button class="btn btn-lg btn-primary btn-block" style="background-color:#2A2A2A;" type="submit">Signin</button>
      
    <? if (isset($error)): ?>
      <div class="row">

      <div class="alert alert-error">
        <strong>Login</strong> failed!.
      </div>

      </div>
      </form>
      <? endif; ?>

</div>
</div>
    </div>
</body>
</html>


<!--Pulling Awesome Font -->
