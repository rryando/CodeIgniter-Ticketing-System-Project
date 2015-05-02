<nav class="navbar navbar-custom bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="<?=site_url('site'); ?>"><span class="glyphicon glyphicon-home"></span></a>
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-collapse collapse">
            <ul class="nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-cog"></span>  <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" roles="menu">
                                <li><span class="text-success">
                    <?=anchor('admin', $this->session->userdata('email')); ?> 
                </span></li>
                                <li><a class="text-danger" href="<?=site_url('login/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>

                </ul>
       </div>
  </div><!-- /.container-fluid -->
</nav>