<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome loads -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- START HEADER -->
    <header class="head">

      <nav class="navbar navbar-expand-lg fixed-top">
                <img src="img/logo-1.png" class=" d-lg-none d-block " alt="logo" width="120px" height="50px">
                <img src="img/logo-1.png" class=" d-lg-block d-none" alt="logo" width="200px" height="70px">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AboutUs.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ContactUs.php">Contact Us</a>
              </li>
            </ul>
            <a class="btn btn-custom" href="#popup" data-bs-toggle="modal" data-target="#popup">Consult Now</a> 
            </div>
          </div>
        </div>
      </nav>

      
          </header>

      <!-- END OF HEADER -->



      <!-- START OF POPUP  -->
      <div class="modal fade" id="popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog custome-mdl modal-dialog-centered">
    <div class="modal-content">
        <div class="d-flex flex-row float-end justify-content-end">
        <button type="button" class="btn-close p-lg-3 p-3 " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6">
            <div class=" mod-info ">
            <img src="img/logo.png" width="100%" alt="" class="m-auto">
            </div>
          </div>
          <div class="col-lg-6">
            <form class="px-lg-3" action="form.php" method="post">
              <h5 class="modal-title px-lg-5 pb-lg-3 text-center">Consult Now</h5>
              <div class="mb-3">
                <label for="exampleInputname" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="username">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Choose Service </label>
                <select id="pet-select" class="form-control" name="query">
                            <option value="">Please choose an option</option>
                            <option value="Home Loan ">Home Loan</option>
                            <option value="Business Loan">Business Loan</option>
                            <option value="Personal Loan">Personal Loan</option>
                            <option value="ITR File">ITR File</option>
                            <option value="GST Registration">GST Registration</option>
                            <option value="Income Certificate">Income Certificate</option>
                        </select>
              
              </div>
              <div class="mb-3">
                <label for="exampleInputphone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="exampleInputphone" name="mobile">
              </div>
              <div class="form-group">
                            <textarea class="form-control" id="message" placeholder="Write Your Message" name="message"></textarea>
                          </div>
              
              <div class="mb-3">
              <button type="submit" class="btn btn-custom m-auto d-flex justify-content-center align-center" name="submit">Submit</button>
              </div>
            </form>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
      <!-- END OF POPUP -->

      
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>