<?php

require_once __DIR__."/header.php"; ?>



      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">DataTables /</span> Basic
</h4>

<!-- DataTable with Buttons -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-basic table border-top">
      <thead>
        <tr>
        <th></th>
          <th></th>
          <th></th>
          <th>id</th>
          <th>title</th>
          <th>image</th>
          <th>price</th>
          <th>description</th>
          <th>page_numbers</th>
          <th>category</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Quantity</th>
          <th>format</th>
          <th>created by</th>
          <th>status</th>
          <th>created at</th>
          <th>apdates at</th>
        </tr>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- Modal to add new record -->
<div class="offcanvas offcanvas-end" id="add-new-record">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title" id="exampleModalLabel">Add new book</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <form  action="/addbook" method="POST" enctype="multipart/form-data">
      <div class="col-sm-12">
        <label class="form-label" for="basicFullname">Book Title</label>
        <div class="input-group input-group-merge">
          <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
          <input name="title" type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicPost"> Book image</label>
        <div class="input-group input-group-merge">
          <span id="basicPost2" class="input-group-text"><i class='bx bxs-briefcase'></i></span>
          <input type="file" id="basicPost" name="image" class="form-control dt-post" placeholder="image" aria-label="Web Developer" aria-describedby="basicPost2" />
        </div>
      </div>

      <div class="col-sm-12">
        <label class="form-label" for="basicPost">price</label>
        <div class="input-group input-group-merge">
          <span id="basicPost2" class="input-group-text"><i class='bx bx-dollar'></i></span>
          <input type="text" id="basicPost" name="price" class="form-control dt-post" placeholder="Book price" aria-label="Web Developer" aria-describedby="basicPost2" />
        </div>
      </div>


      <div class="col-sm-12">
        <label class="form-label" for="basicEmail">Description</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
          <input type="text" id="basicEmail" name="description" class="form-control dt-email" placeholder="......" aria-label="john.doe@example.com" />
        </div>
        <div class="form-text">
          You can use letters, numbers & periods
        </div>
      </div>


      <div class="col-sm-12">
        <label class="form-label" for="basicDate">page number</label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='bx bx-calendar'></i></span>
          <input type="number" class="form-control dt-date" id="basicDate" name="number" aria-describedby="basicDate2" placeholder="page number" aria-label="MM/DD/YYYY" />
        </div>
      </div>


      <div class="col-sm-12">
        <label class="form-label" for="basicDate"> category </label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='bx bx-calendar'></i></span>
          <input type="text" class="form-control dt-date" id="basicDate" name="category" aria-describedby="basicDate2" placeholder="category" aria-label="MM/DD/YYYY" />
        </div>
      </div>


      <div class="col-sm-12">
        <label class="form-label" for="basicDate">Author</label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='bx bx-calendar'></i></span>
          <input type="text" class="form-control dt-date" id="basicDate" name="author" aria-describedby="basicDate2" placeholder="Author" aria-label="MM/DD/YYYY" />
        </div>
      </div>


      <div class="col-sm-12">
        <label class="form-label" for="basicDate">publisher</label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='bx bx-calendar'></i></span>
          <input type="text" class="form-control dt-date" id="basicDate" name="publisher" aria-describedby="basicDate2" placeholder="publisher" aria-label="MM/DD/YYYY" />
        </div>
      </div>

      <div class="col-sm-12">
        <label class="form-label" for="basicDate">quantity</label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='bx bx-calendar'></i></span>
          <input type="number" class="form-control dt-date" id="basicDate" name="quantity" aria-describedby="basicDate2" placeholder="quantity" aria-label="MM/DD/YYYY" />
        </div>
      </div>

      <div class="col-sm-12">
        <label class="form-label" for="basicDate">format</label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='bx bx-calendar'></i></span>
          <input type="text" class="form-control dt-date" id="basicDate" name="format" aria-describedby="basicDate2" placeholder="format" aria-label="MM/DD/YYYY" />
        </div>
      </div>

      <div class="col-sm-12">
        <label class="form-label" for="basicDate">created by</label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='bx bx-calendar'></i></span>
          <input type="text" class="form-control dt-date" id="basicDate" name="format" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">user activation</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">is active</span>
            </label>
          </div>
        </div>
      </div>



      <div class="col-sm-12">
      
        <div class="input-group input-group-merge">
         
          <input type="hidden" id="basicSalary"  class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
        </div>
      </div>
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>

  </div>
</div>
<!--/ DataTable with Buttons -->

<hr class="my-5">

<!-- Complex Headers -->

<!--/ Complex Headers -->

<hr class="my-5">

<!-- Row grouping -->

<!--/ Row grouping -->

<hr class="my-5">

<!-- Multilingual -->

<!--/ Multilingual -->


            
          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<?php

require_once __DIR__."/footer.php"; ?>