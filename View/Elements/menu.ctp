<style type="text/css">
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.submenu{
      background-color: black;
}
</style>

  <?php $user = $this->UserAuth->getUser(); ?>
<!--MENU OPEN-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <?php if($this->UserAuth->getUserId() == 1){ ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Users</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'users/add'; ?>">Register</a></li>
                    <li><a href="<?php echo $this->webroot.'users'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Clients</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'clients/add'; ?>">Register</a></li>
                    <li><a href="<?php echo $this->webroot.'clients'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Activities</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'activities/add'; ?>">Register</a></li>
                    <li><a href="<?php echo $this->webroot.'activities'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Groups</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'groups/add'; ?>">Create a Group</a></li>
                    <li><a href="<?php echo $this->webroot.'groups'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Services</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'services/add'; ?>">Add Service</a></li>
                    <li><a href="<?php echo $this->webroot.'services'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Promotions</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'promotions/add'; ?>">Add Promotion</a></li>
                    <li><a href="<?php echo $this->webroot.'promotions'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Forum Questions</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'forumqs/add'; ?>">Make a Question</a></li>
                    <li><a href="<?php echo $this->webroot.'forumqs'; ?>">View Forum</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Geographics<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Countries</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'countries/add'; ?>">Add New</a></li>
                    <li><a href="<?php echo $this->webroot.'countries'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Regions</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'regions/add'; ?>">Add New</a></li>
                    <li><a href="<?php echo $this->webroot.'regions'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">States</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'states/add'; ?>">Add New</a></li>
                    <li><a href="<?php echo $this->webroot.'states'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Cities</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'cities/add'; ?>">Add New</a></li>
                    <li><a href="<?php echo $this->webroot.'cities'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Terminals</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'terminals/add'; ?>">Add New</a></li>
                    <li><a href="<?php echo $this->webroot.'terminals'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Destinations</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'destinations/add'; ?>">Add New</a></li>
                    <li><a href="<?php echo $this->webroot.'destinations'; ?>">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Types</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'types/add'; ?>">Add New Destination Type</a></li>
                    <li><a href="<?php echo $this->webroot.'types'; ?>">View All Types</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Parks</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'parks/add'; ?>">Add New</a></li>
                    <li><a href="<?php echo $this->webroot.'parks'; ?>">View All</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <?php } ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
              <?php if($this->UserAuth->getUserId()): ?>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $this->webroot.'dashboard'; ?>">Home</a></li>
                  <li><a href="<?php echo $this->webroot; ?>changePassword">Change Password</a></li>
                  <li><a href="<?php echo $this->webroot.'permissions'; ?>">Permissions</a></li>
                  <li><a href="<?php echo $this->webroot.'logout'; ?>">Logout</a></li>
                </ul>
              <?php else: ?>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $this->webroot.'login'; ?>">Login</a></li>
                </ul>
              <?php endIf ;?>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--MENU CLOSE-->