<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Bill Management</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">Home Page</a>
              <form action="<?php echo e(url('logout')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?> <?php echo e(method_field('POST')); ?>

                <div> <button type="submit" class="btn col-sm-3 save-button">Logout</button></div>
            </form>
            </div>
          </nav>
    </header>
    <section>
        <div class="wrapper">
            <div class="row no-gutters">
                <div class="col-sm-10">
                    <div class="main-content">
                        <div class="form-block">
                            <form action="<?php echo e(url('customer/create')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?> <?php echo e(method_field('POST')); ?>


                                <div class="form-group row">
                                    <h4 class="col-sm-6">Personal Information</h4>
                                </div>

                                <div class="form-group row">
                                  <label for="cname" class="col-sm-2 col-form-label">Customer Name</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="cname" class="form-control" id="cname" value="<?php echo e(old('customer')); ?>" >
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="email" class="form-control" id="email" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="phone" class="col-sm-2 col-form-label">Mobile No</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="phone" class="form-control" id="phone" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="alt_phone" class="col-sm-2 col-form-label">Alternate Mobile No</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="alt_phone" class="form-control" id="alt_phone" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="personal_details" class="col-sm-2 col-form-label">Personal Details</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="personal_details" class="form-control" id="personal_details" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="contact_person" class="col-sm-2 col-form-label">Contact Person</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="contact_person" class="form-control" id="contact_person" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="id_no" class="col-sm-2 col-form-label">Identification No</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="id_no" class="form-control" id="id_no" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="marchant_company" class="col-sm-2 col-form-label">Marchant Company</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="marchant_company" class="form-control" id="marchant_company" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                    <h4 class="col-sm-6">Address</h4>
                                </div>

                                <div class="form-group row">
                                  <label for="country" class="col-sm-2 col-form-label">Country</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="country" class="form-control" id="country" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="district" class="col-sm-2 col-form-label">District</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="district" class="form-control" id="district" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="thana" class="col-sm-2 col-form-label">Thana</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="thana" class="form-control" id="thana" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="area" class="col-sm-2 col-form-label">Area</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="area" class="form-control" id="area" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="building_name" class="col-sm-2 col-form-label">Building Name</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="building_name" class="form-control" id="building_name" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="house" class="col-sm-2 col-form-label">House</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="house" class="form-control" id="house" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="floor" class="col-sm-2 col-form-label">Floor</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="floor" class="form-control" id="floor" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="house_info" class="col-sm-2 col-form-label">House Info</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="house_info" class="form-control" id="house_info" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                    <h4 class="col-sm-6">Internet</h4>
                                </div>

                                <div class="form-group row">
                                  <label for="connection_date" class="col-sm-2 col-form-label">Connection Date</label>
                                  <div class="col-sm-6">
                                    <input type="date" name ="connection_date" class="form-control" id="connection_date" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="mikrotik" class="col-sm-2 col-form-label">Mikrotik</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="mikrotik" class="form-control" id="mikrotik" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="ip_name" class="col-sm-2 col-form-label">IP Name</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="ip_name" class="form-control" id="ip_name" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="mac" class="col-sm-2 col-form-label">MAC</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="mac" class="form-control" id="mac" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="bandwidth" class="col-sm-2 col-form-label">Bandwidth</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="bandwidth" class="form-control" id="bandwidth" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="comment" class="form-control" id="comment" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="package_id" class="col-sm-2 col-form-label">Package</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="package_id" class="form-control" id="package_id" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                    <h4 class="col-sm-6">Billing</h4>
                                </div>

                                <div class="form-group row">
                                  <label for="monthly_charge" class="col-sm-2 col-form-label">Monthly Charge</label>
                                  <div class="col-sm-6">
                                    <input type="number" name ="monthly_charge" class="form-control" id="monthly_charge" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="additional_charge" class="col-sm-2 col-form-label">Additional Charge</label>
                                  <div class="col-sm-6">
                                    <input type="number" name ="additional_charge" class="form-control" id="additional_charge" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="advance" class="col-sm-2 col-form-label">Advance</label>
                                  <div class="col-sm-6">
                                    <input type="number" name ="advance" class="form-control" id="advance" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="due" class="col-sm-2 col-form-label">Due</label>
                                  <div class="col-sm-6">
                                    <input type="number" name ="due" class="form-control" id="due" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="discount" class="col-sm-2 col-form-label">Discount</label>
                                  <div class="col-sm-6">
                                    <input type="number" name ="discount" class="form-control" id="discount" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="vat" class="col-sm-2 col-form-label">VAT (%)</label>
                                  <div class="col-sm-6">
                                    <input type="number" name ="vat" class="form-control" id="vat" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="total" class="col-sm-2 col-form-label">total</label>
                                  <div class="col-sm-6">
                                    <input type="number" name ="total" class="form-control" id="total" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                    <h4 class="col-sm-6">Official Information</h4>
                                </div>

                                <div class="form-group">
                                <label for="billing_type" class="col-sm-3 control-label">Billing Type</label>
                                  <div class="col-sm-1">
                                    <input type="radio" name="billing_type" id="billing_type" class="form-control" value="Pre-Paid">Pre-Paid
                                  </div>
                                  <div class="col-sm-1">
                                      <input type="radio" name="billing_type" id="billing_type" class="form-control" value="Post-Paid">Post-Paid
                                  </div>
                                </div>

                                <div class="form-group">
                                <label for="connection_type" class="col-sm-3 control-label">Connection Type</label>
                                  <div class="col-sm-1">
                                    <input type="radio" name="connection_type" id="connection_type" class="form-control" value="Wired">Wired
                                  </div>
                                  <div class="col-sm-1">
                                      <input type="radio" name="connection_type" id="connection_type" class="form-control" value="Wireless">Wireless
                                  </div>
                                </div>

                                <div class="form-group">
                                <label for="connectivity_type" class="col-sm-3 control-label">Connectivity Type</label>
                                  <div class="col-sm-1">
                                    <input type="radio" name="connectivity_type" id="connectivity_type" class="form-control" value="Shared">Shared
                                  </div>
                                  <div class="col-sm-1">
                                      <input type="radio" name="connectivity_type" id="connectivity_type" class="form-control" value="Dedicated">Dedicated
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="client_type" class="col-sm-2 col-form-label">Client Type</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="client_type" class="form-control" id="client_type" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="description" class="col-sm-2 col-form-label">Description</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="description" class="form-control" id="description" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="description" class="col-sm-2 col-form-label">Description</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="description" class="form-control" id="description" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="employee" class="col-sm-2 col-form-label">Select Employee</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="employee" class="form-control" id="employee" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="distribution_location" class="col-sm-2 col-form-label">Distribution Location</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="distribution_location" class="form-control" id="distribution_location" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="note" class="col-sm-2 col-form-label">Note</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="note" class="form-control" id="note" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>
                                
                                <div class="form-group row">
                                  <label for="deposit" class="col-sm-2 col-form-label">Security Deposit</label>
                                  <div class="col-sm-6">
                                    <input type="text" name ="deposit" class="form-control" id="deposit" value="<?php echo e(old('customer')); ?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                    <button type="submit" class="btn col-sm-3 save-button">Save</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html><?php /**PATH D:\Projects\Laravel\sebpo_bill_management\resources\views/create_customer.blade.php ENDPATH**/ ?>