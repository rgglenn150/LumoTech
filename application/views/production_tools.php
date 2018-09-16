<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $this->load->view('templates/upper', $user);?>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Production Tools
        <small>Supplier Control panel</small>
    </h1>

</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

  <div class="row">

<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <a class="btn btn-success">Register Device</a>
        </div>
    </div>
</div>

<!-- Production Details -->
<div class="col-md-12">
  <div class="box">

    <div class="box-header with-border">
      <h3 class="box-title">Backyard device</h3>

      <div class="box-tools pull-right">
        <div class="btn-group">
          <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-wrench"></i></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">View information</a></li>
            <li class="divider"></li>
            <li><a href="#">Remove</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.box-header -->

    <div class="box-body">
                      <div class="row">
        <div class="col-sm-3 col-xs-6">
          <div class="description-block border-right">
            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
            <h5 class="description-header">PH Level</h5>
            <span class="description-text">Acidity/Basicity</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-3 col-xs-6">
          <div class="description-block border-right">
            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
            <h5 class="description-header">Co2 Level</h5>
            <span class="description-text">Carbon Dioxide</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-3 col-xs-6">
          <div class="description-block border-right">
            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
            <h5 class="description-header">Color Level</h5>
            <span class="description-text">TOTAL PROFIT</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-3 col-xs-6">
          <div class="description-block">
            <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
            <h5 class="description-header">Temperature</h5>
            <span class="description-text">GOAL COMPLETIONS</span>
          </div>
          <!-- /.description-block -->
        </div>
      </div>

    </div>
    <!-- ./box-body -->
    <div class="box-footer">

              <div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Algae produce</span>
      <span class="info-box-number">$30,300</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Weekly</span>
      <span class="info-box-number">25000 kg</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->

<!-- fix for small devices only -->
<div class="clearfix visible-sm-block"></div>

<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Monthly</span>
      <span class="info-box-number">30 kg</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Runtime</span>
      <span class="info-box-number">5</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->
</div>
      <!-- /.row -->
    </div>
    <!-- /.box-footer -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->

</div> <!-- End row -->


</section>
<!-- /.content -->
</div>
<?php $this->load->view('templates/lower');?>