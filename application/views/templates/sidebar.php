<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/images/download.png') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user->first_name . ' ' . $user->last_name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $user->type . ' Account' ?></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- Dashboard link -->
        <li>
                <a href="<?php echo site_url('dashboard') ?>">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
        </li>

        <li>
        <a href="<?php echo site_url('profile')?>">
                <i class="fa fa-user"></i> <span>Profile</span>
              </a>
                
        </li>
        
        <?php if(strcasecmp($user->type,'supplier')==0){ ?>
        <li>
              <a href="<?php echo site_url('dashboard/production_tools')?>">
                <i class="fa fa-cubes"></i> <span>Production Tools</span>
              </a>
        </li>
        <!-- Dashboard link -->
        <li>
        <a href="<?php echo site_url('dashboard/trade_in')?>">
                  <i class="fa fa-exchange-alt"></i> <span>Trade In</span>
                </a>
        </li>

        <?php } ?>

        <?php if(strcasecmp($user->type,'business')==0){ ?>
        <li>
        <a href="<?php echo site_url('dashboard/products')?>">
                <i class="fa fa-circle-o"></i> <span>Products</span>
              </a>
        </li>
        <!-- For Future implementation -->
        <!-- <li>
                <a href="supplier-trade.php">
                  <i class="fa fa-circle-o  "></i> <span>Supply</span>
                </a>
        </li>

         <li>
                <a href="supplier-trade.php">
                  <i class="fa fa-upload"></i> <span>Top Up</span>
                </a>
        </li> -->

        <?php } ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
