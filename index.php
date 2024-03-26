<?php
session_start();
include('header.php'); ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Table Booking Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="code.php" method = "POST">
      <div class="modal-body">
          <div class="mb-3">
            <label for="validationDefault01" class="form-label ">Name</label>
            <input type="text" class="form-control"   name="name" placeholder="Enter your Name" id="validationDefault01" required>
          </div>

          <div class="mb-3">
            <label for="validationDefault02" class="form-label">Email</label>
            <input type="email" class="form-control" aria-describedby="emailHelp"  name="email" placeholder="Enter your Email" id="validationDefault02" required>
          </div>
          <div class="mb-3">
            <label for="validationDefault03" class="form-label">Phone No</label>
            <input type="number" class="form-control" name="phone" placeholder="Enter your Phone Number" id="validationDefault03" required>
          </div>
          <div class="mb-3">
            <label for="validationDefault04" class="form-label">Booking Date</label>
            <input type="date" class="form-control"  name="booking_date" id="validationDefault04" required>
          </div>
          <div class="mb-3">
            <label for="validationDefault05" class="form-label">Booking Time</label>
            <input type="time" class="form-control"  name="booking_time" id="validationDefault05" required>
          </div>
          <div class="mb-3">
    <label for="validationDefault06" class="form-label">Number of Adults</label>
    <select class="form-control"  name="adults" id="validationDefault06" required>
        <option value="" disabled selected>Select number of adults</option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>

<div class="mb-3">
    <label for="validationDefault06" class="form-label">Number of Children</label>
    <select class="form-control"  name="children" id="validationDefault06" required>
        <option value="" disabled selected>Select number of children</option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>

         
       

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save_data" class="btn btn-primary">Submit</button>
      </div>

      </form>

    </div>
  </div>
</div>

<div class="container mt-3">
    <div class="row ">
        <div class="col-md-8">


 <?php
if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey</strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
  unset($_SESSION['status']);
}
?>


            <!-- <div class="card">
                <div class="card-header">
                    <h4 >PHP POP-UP MODE CRUD</h4> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end justify-content-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     Book A Table
                    </button>
                <!-- </div> -->
                <!-- <div class="card-body"> -->
                  
              <!-- table-data-start -->
                <table class="table-responsive-sm table table-striped table-bordered mt-5">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">booking_date</th>
      <th scope="col">booking_time</th>
      <th scope="col">adults</th>
      <th scope="col">children</th>
      <th scope="col">view</th>
      <th scope="col">edit</th>
      <th scope="col">delect</th>

      <!-- <th scope="col">
        <img src="image/view.png" alt="" width="15px" height="15px">   
      </th>
     
      <th scope="col">
        <img src="image/edit.png" alt="" width="15px" height="15px">     
      </th>
     
      <th scope="col">
        <img src="image/delete.png" alt="" width="15px" height="15px">
      </th> -->



    </tr>
  </thead>
  <tbody>
   
  <?php 
$connection = mysqli_connect("localhost", "root", "", "restaurant"); // Establish the database connection
$fetch_query = "SELECT * FROM text";
$fetch_query_result = mysqli_query($connection, $fetch_query);
if(mysqli_num_rows($fetch_query_result) > 0){
    while($rw = mysqli_fetch_array($fetch_query_result)) {
?>
        <tr>
            <td><?php echo $rw['id'];?></td>
            <td><?php echo $rw['name'];?></td>
            <td><?php echo $rw['email'];?></td>
            <td><?php echo $rw['phone'];?></td>
            <td><?php echo $rw['booking_date'];?></td>
            <td><?php echo $rw['booking_time'];?></td>
            <td><?php echo $rw['adults'];?></td>
            <td><?php echo $rw['children'];?></td>

            <td>
            <img src="image/view.png" alt="view" width="15px" height="15px">  
            </td>
            <td>
            <img src="image/edit.png" alt="edit" width="15px" height="15px">   
            </td>
            <td>
            <img src="image/delete.png" alt="delect" width="15px" height="15px">
            </td>
        </tr>
<?php
    }
} else {
?>
        <tr colspan="8"><td>No record found</td></tr>
<?php
}
?>

  

    
  </tbody>
</table>
<!-- table-data-end -->
                <!-- </div> -->
          <!-- </div> -->
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
