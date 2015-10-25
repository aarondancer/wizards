<nav class="navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?">fwizbo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if (!isset($_GET['page'])) { ?><li><a href="#clouds">what we do</a></li><?php } ?>
        <?php if (!isset($_GET['page'])) { ?><li><a href="#about">about</a></li><?php } ?>
        <?php if (isset($_GET['page'])) { ?><li><a href="?page=dashboard">dashboard</a></li><?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if (!isset($_GET['page'])) { ?><li><a href="?page=dashboard">dashboard</a></li><?php } ?>
        <?php if (isset($_GET['page'])) { ?><li><a href="#"><i class="fa fa-bell-o"></i></a></li><?php } ?>
        <?php if (isset($_GET['page'])) { ?><li><a href="?">logout</a></li><?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>