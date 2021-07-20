<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>

<div class="container">
    <div class="row">
        <div class="col-lg-10">
        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Full Color Variations for Table</h6>
          <p class="mg-b-20 mg-sm-b-30">A custom color for the head of the tables.</p>

          <div class="table-responsive">
            <table class="table table-hover table-bordered table-primary mg-b-0">
              <thead>
                <tr>
                  <th>
                    <label class="ckbox mg-b-0">
                      <input type="checkbox"><span></span>
                    </label>
                  </th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <label class="ckbox mg-b-0">
                      <input type="checkbox"><span></span>
                    </label>
                  </td>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <td>
                    <label class="ckbox mg-b-0">
                      <input type="checkbox"><span></span>
                    </label>
                  </td>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <td>
                    <label class="ckbox mg-b-0">
                      <input type="checkbox"><span></span>
                    </label>
                  </td>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

        </div>
    </div>

</div>
        


 <?php require '../dashboard_part/dashboard_footer.php';  ?>