<?php
include('include/doc.php');
?>

<body>

  <div class="page-wrapper">
    <h1 class="d-none"></h1>
    <?php
    include('include/topheader.php');
    ?>
    <!-- End Header -->
    <main class="main">
      <div class="page-content">
        <?php
        include('include/demo5_Menu.php');
        ?>
        <!-- End Header -->
        <main class="main account">
          <div class="gift_box">
            <div class="container">
              <span class="Gift_letter">Send Gift </span> <i class="fas fa-chevron-right" style="color:#145634;font-size: 1.3rem;"></i> <a href="#" class="Gift"><i class="fas fa-gift "></i></a>
            </div>
          </div>
          <div class="page-content mt-4 mb-10 pb-6">
            <div class="container">
              <h2 class="title title-center mb-10">My Account</h2>
              <div class="tab tab-vertical gutter-lg">
                <ul class="nav nav-tabs mb-4 col-lg-3 col-md-4" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#ProfileOverviews">Profile Overviews</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#orders">Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#payment">payment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#address">Address</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#account">Account details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pwdrest">Password Reset</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#point">Membership Point</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                  </li>
                </ul>

                <!--  Content SEC -->
                <div class="tab-content col-lg-9 col-md-8">
                  <!--  Profile OverViews -->

                  <div class="tab-pane active" id="ProfileOverviews">

                    <div class="container">
                      <div class="main-body">
                        <div class="row gutters-sm">
                          <div class="col-md-4 mb-3">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="col-md-8">
                            <div class="card mb-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                   your text
                                 </div>
                               </div>
                               <hr>
                               <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">First Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                 your text
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Last Name</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                               your text
                             </div>
                           </div>
                           <hr>
                           <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                             yourtext@example.com
                           </div>
                         </div>
                         <hr>
                         <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">ZipCode</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            123456
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Mobile</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            (000) 123-4567
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Country</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                           your text
                         </div>
                       </div>
                       <hr>
                       <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">City</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         your text
                       </div>
                     </div>
                   </div>
                 </div>

               </div>
             </div>
           </div>   
           <a href="#" > <button type="submit" class="btn btn-primary ">Edit <i class="far fa-edit"></i></button></a>

         </div>
       </div>
       <!--  order -->

       <div class="tab-pane" id="orders">
        <table class="order-table">
          <thead>
            <tr>
              <th class="pl-2">Order</th>
              <th>Date</th>
              <th>Status</th>
              <th>Total</th>
              <th class="pr-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="order-number"><a href="#">#3596</a></td>
              <td class="order-date"><time>February 24, 2021</time></td>
              <td class="order-status"><span>On hold</span></td>
              <td class="order-total"><span>$900.00 for 5 items</span></td>
              <td class="order-action"><a href="#" class="btn btn-primary btn-link btn-underline">View</a></td>
            </tr>
            <tr>
              <td class="order-number"><a href="#">#3593</a></td>
              <td class="order-date"><time>February 21, 2021</time></td>
              <td class="order-status"><span>On hold</span></td>
              <td class="order-total"><span>$290.00 for 2 items</span></td>
              <td class="order-action"><a href="#" class="btn btn-primary btn-link btn-underline">View</a></td>
            </tr>
            <tr>
              <td class="order-number"><a href="#">#2547</a></td>
              <td class="order-date"><time>January 4, 2021</time></td>
              <td class="order-status"><span>On hold</span></td>
              <td class="order-total"><span>$480.00 for 8 items</span></td>
              <td class="order-action"><a href="#" class="btn btn-primary btn-link btn-underline">View</a></td>
            </tr>
            <tr>
              <td class="order-number"><a href="#">#2549</a></td>
              <td class="order-date"><time>January 19, 2021</time></td>
              <td class="order-status"><span>On hold</span></td>
              <td class="order-total"><span>$680.00 for 5 items</span></td>
              <td class="order-action"><a href="#" class="btn btn-primary btn-link btn-underline">View</a></td>
            </tr>
            <tr>
              <td class="order-number"><a href="#">#4523</a></td>
              <td class="order-date"><time>Jun 6, 2021</time></td>
              <td class="order-status"><span>On hold</span></td>
              <td class="order-total"><span>$564.00 for 3 items</span></td>
              <td class="order-action"><a href="#" class="btn btn-primary btn-link btn-underline">View</a></td>
            </tr>
            <tr>
              <td class="order-number"><a href="#">#4526</a></td>
              <td class="order-date"><time>Jun 19, 2021</time></td>
              <td class="order-status"><span>On hold</span></td>
              <td class="order-total"><span>$123.00 for 8 items</span></td>
              <td class="order-action"><a href="#" class="btn btn-primary btn-link btn-underline">View</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Address Sec -->
      <div class="tab-pane" id="address">
        <p class="mb-2">The following addresses will be used on the checkout page by default.
        </p>
        <div class="row">
          <div class="col-sm-6 mb-4">
            <div class="card card-address">
              <div class="card-body">
                <h5 class="card-title text-uppercase">Billing Address</h5>
                <p>John Doe<br>
                  Riode Company<br>
                  Steven street<br>
                  El Carjon, CA 92020
                </p>

                              <div class="modale" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-header">
                      <h2>Edit Billing Address</h2>
                      <a href="#" class="btn-close closemodale" aria-hidden="true">&times;</a>
                    </div>
                    <div class="modal-body">
                     <label for="exampleFormControlTextarea1">Address</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     <div class="modal-footer">


                       <button type="button" class="btn btn-primary">Save changes</button>
                     </div>
                   </div>
                 </div>
                 
                 <p><a href="#" class="btn btn-big openmodale">Edit Billing Address</a></p>

               </div>


              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-4">
            <div class="card card-address">
              <div class="card-body">
                <h5 class="card-title text-uppercase">Shipping Address</h5>
                <p>You have not set up this type of address yet.</p>

                <div class="modale" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-header">
                      <h2>Shipping Address</h2>
                      <a href="#" class="btn-close closemodale" aria-hidden="true">&times;</a>
                    </div>
                    <div class="modal-body">
                     <label for="exampleFormControlTextarea1">Address</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     <div class="modal-footer">


                       <button type="button" class="btn btn-primary">Save changes</button>
                     </div>
                   </div>
                 </div>

                 <p><a href="#" class="btn btn-big openmodale">Shipping Address</a></p>

               </div>

               <!-- Modal -->

             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Password Reset -->
     <div class="tab-pane " id="pwdrest">
      <form action="#" class="form">
        <fieldset>
          <legend>Password Change</legend>
          <label>Current password (leave blank to leave unchanged)</label>
          <input type="password" class="form-control" name="current_password">

          <label>New password (leave blank to leave unchanged)</label>
          <input type="password" class="form-control" name="new_password">

          <label>Confirm new password</label>
          <input type="password" class="form-control" name="confirm_password">
        </fieldset>
        <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
      </form>
    </div>

    <!-- MemberShip Point -->
    <div class="tab-pane " id="point">
      <div id="main-content">

        <div id="card-body">
          <div id="first-item">
            <div class="card" id="card-1">
              <div class="card-title">Golden card</div>
              <div class="card-body">120</div>
              <div id="card-cont"><i class="fas fa-medal card-img"></i></div>
            </div>
          </div>
        </div>
        <div id="card-body">
          <div id="second-item">
            <div class="card" id="card-2">
              <div class="card-title">Silver card</div>
              <div class="card-body">400</div>
              <div id="card-cont"><i class="fas fa-medal card-img-silver"></i></div>
            </div>
          </div>
        </div>
        <div id="card-body">
          <div id="three-item">
            <div class="card" id="card-3">
              <div class="card-title">brown card</div>
              <div class="card-body">900</div>
              <div id="card-cont"><i class="fas fa-medal card-img-brown"></i></div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Account Sec -->

    <div class="tab-pane" id="account">
      <form action="#" class="form">
        <div class="row">
          <div class="col-sm-6">
            <label>First Name *</label>
            <input type="text" class="form-control" name="first_name" required="">
          </div>
          <div class="col-sm-6">
            <label>Last Name *</label>
            <input type="text" class="form-control" name="last_name" required="">
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6">
            <label>Full Name*</label>
            <input type="text" class="form-control mb-0" name="display_name" required="">
            <small class="d-block form-text mb-7">This will be how your name will be displayed
            in the account section and in reviews</small>
          </div>
          <div class="col-sm-6">
            <label>zip Code *</label>
            <input type="text" class="form-control" name="code" required="">
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6">
            <label>Email Address *</label>
            <input type="email" class="form-control" name="email" required="">
          </div>
          <div class="col-sm-6">
            <label>Phone Number *</label>
            <input type="text" class="form-control" name="phonenumber" required="">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <label>Enter City *</label>
            <input type="text" class="form-control" name="city" required="">
          </div>
          <div class="col-sm-6">
            <label>Enter Country *</label>
            <input type="text" class="form-control" name="Country" required="">
          </div>
        </div>

        <label class="form-label" for="customFile">Default file input example</label>
        <input type="file" class="form-control" id="customFile" />
        <button type="submit" class="btn btn-primary">SAVE CHANGES</button>

      </form>
    </div>

    <!-- Payment -->

    <div class="tab-pane" id="payment">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Card Number</h6>
          </div>
          <div class="col-sm-9 text-secondary">
           your text
         </div>
       </div>

       <hr>
       <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Card Holder</h6>
        </div>
        <div class="col-sm-9 text-secondary">
         your text
       </div>
     </div>
     <hr>
     <div class="row">
      <div class="col-sm-3">
        <h6 class="mb-0">Expiration Date</h6>
      </div>
      <div class="col-sm-9 text-secondary">
       your text
     </div>
   </div>
   <hr>
   <div class="row">
    <div class="col-sm-3">
      <h6 class="mb-0">Year</h6>
    </div>
    <div class="col-sm-9 text-secondary">
     your text
   </div>
 </div>
 <hr>
 <div class="row">
  <div class="col-sm-3">
    <h6 class="mb-0">Cvv</h6>
  </div>
  <div class="col-sm-9 text-secondary">
   your text
 </div>
</div>
</div>
<a href="payment.php" > <button type="submit" class="btn btn-primary ">Edit <i class="far fa-edit"></i></button></a>

</div>
</div>
</div>



<!-- Button trigger modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





</main>




<?php
include('include/footer.php');
?>