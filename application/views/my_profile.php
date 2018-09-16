<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $this->load->view('templates/upper', $user);?>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        My Profile
        <small>View / Update Profile</small>
    </h1>

</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

    <div class="container">
            <div class="row" style = "margin-right:50px;">

                <div class="col-md-6" >
                    <div class="box">
                        <div class="box-header">
                        
                        </div>
                        <div class="box-body">

                            <table class="table table-user-information ">
                                <tbody>
                                    <tr>
                                        <td>First Name:</td>
                                        <td><?php echo $user->first_name?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td><?php echo $user->last_name?></td>
                                    </tr>
                                    <tr>
                                        <td>Middle Name</td>
                                        <td><?php echo $user->middle_name?></td>
                                    </tr>
                                    <tr>
                                        <td>Postal Code:</td>
                                        <td>
                                            <input
                                                name="zipCode"
                                                type="text"
                                                label="08XXX"
                                                maxLength="5"
                                                value=<?php echo $user->postal_code ?>
                                                focus
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            <input
                                                icon="email-icon"
                                                name="email"
                                                type="email"
                                                label=""
                                                value=<?php echo $user->email?>
                                                focus
                                            />
                                        </td>
                                    </tr>
                                    <tr>

                                    <td>Contact</td>
                                        <td>
                                            <input
                                                icon="email-icon"
                                                name="email"
                                                type="email"
                                                label=""
                                                value="<?php echo $user->contact ?>"
                                                focus
                                            />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary ml-2">Update Profile</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="box">
                        <div class = "box-header">
                            <h2 class="box-title">Change Password</h2>
                        </div>
                        <div class="box-body">
                            <table class="table table-user-information ">
                                <tbody>
                                    <tr>
                                        <td>Enter Password</td>
                                        <td>
                                            <input
                                            icon="password-icon"
                                            name="password"
                                            type="password"
                                            value=''
                                            focus
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Re-enter Password</td>
                                        <td>
                                            <Input
                                            icon="password-icon"
                                            name="newPassword"
                                            type="password"
                                            value=''
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>New Password</td>
                                        <td>
                                            <Input
                                            icon="password-icon"
                                            name="newPassword"
                                            type="password"
                                            value=''
                                            />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary ml-2">Update Password</a>
                        </div>
                    </div>
                </div>


            </div> <!-- Row -->
        </div> <!-- Container -->



</section>
<!-- /.content -->
</div>

<?php $this->load->view('templates/lower');?>