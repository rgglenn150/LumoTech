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

    <div class="box">
      <div class="box-header">
          <h3 class="box-title">Trade</h3>
      </div>
            <!-- /.box-header -->
      <div class="box-body">
        <a class="btn btn-success">Make Trade Request</a>
      </div>
    </div>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Trade In History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Type</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Weight</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Price</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Date</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td style = "color:green;font-weight:700;"><span class="green-text">Successful</span></td>
                  <td class="sorting_1">Brown Algae</td>
                  <td>300 lb</td>
                  <td>Php 30,000</td>
                  <td>August 6,2018</td>
                </tr>
                <tr role="row" class="odd">
                  <td style = "color:#cccc00;font-weight:700;"><span class="green-text">Pending</span></td>
                  <td class="sorting_1">Brown Algae</td>
                  <td>300 lb</td>
                  <td>Php 30,000</td>
                  <td>August 6,2018</td>
                </tr>
                <tr role="row" class="odd">
                  <td style = "color:maroon;font-weight:700;"><span class="green-text">Rejected</span></td>
                  <td class="sorting_1">Brown Algae</td>
                  <td>300 lb</td>
                  <td>Php 30,000</td>
                  <td>August 6,2018</td>
                </tr>
                </tbody>
                <tfoot>
                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Type</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Weight</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Price</th>

                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Date</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>

    </section>
    <!-- /.content -->

    </div>
<?php $this->load->view('templates/lower');?>