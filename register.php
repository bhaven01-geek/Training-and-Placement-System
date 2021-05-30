<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./reigstrationpage.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <title>Student Registration</title>
  </head>

  <body>
    <section class="perdet_con">
      <div>
        <div class="perdethead">
          <center>
            <h3>NEW REGISTRATION</h3>
          </center>
        </div>

        <form class="row g-3 needs-validation personaldets" method="POST" 
        action="New_Register.php">
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label label123"
              >Full name</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom01"
              required
              name ="Fullname"
            />
            <div class="invalid-feedback">Please provide a valid Name.</div>
          </div>
            <div class="col-md-4">
            <label for="validationCustom01" class="form-label label123"
              >User name</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom01"
              required
              name ="Username"
            />
            <div class="invalid-feedback">Please provide a user Name.</div>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label label123">Email</label>
            <div class="input-group has-validation">
              <input
                type="text"
                class="form-control"
                id="validationCustomUsername"
                aria-describedby="inputGroupPrepend"
                name = "Email"
                required
              />
              <div class="invalid-feedback">Please enter valid Email.</div>
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom03" class="form-label label123"
              >Branch</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom03"
              name ="Branch"
              required
            />
            <div class="invalid-feedback">Please provide a valid Branch.</div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom03" class="form-label label123"
              >Div</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom03"
              required
              name ='Div'
            />
            <div class="invalid-feedback">Please provide a valid Div.</div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom03" class="form-label label123"
              >Roll No.</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom03"
              name = "Rollno"
              required
            />
            <div class="invalid-feedback">
              Please provide a valid Roll Number.
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label label123"
              >Phone Number</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom01"
              name ="Phone"
              required
            />
            <div class="invalid-feedback">
              Please provide a valid Phone Number.
            </div>
          </div>
           <div class="col-md-4">
            <label for="validationCustom01" class="form-label label123"
              >Create New Password</label
            >
            <input
              type="Password"
              class="form-control"
              id="validationCustom01"
              name ="CreatePassword"
              required
            />
            <div class="invalid-feedback">
              Please provide a valid Password.
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label label123"
              >Password</label
            >
            <input
              type="Password"
              class="form-control"
              id="validationCustom01"
              name ="Password"
              required
            />
            <div class="invalid-feedback">
              Please provide a valid Password.
            </div>
          </div>

        
          <div class="col-md-4 col-birthdate">
            <label for="birthday" name="birthday" class="form-label label123"
              >Birthday:</label
            >
            <input
              type="date"
              class="form-control"
              id="validationCustom01"
              name = "Birthdate"
              required
            />
            <div class="invalid-feedback">Please provide a valid Date.</div>
          </div>
          <div class="col-12 btnsubmit1">
            <button class="btn btn-primary" type="submit" name="register_student">Submit form</button>
          </div>
        </form>
      </div>
    </section>
    <script src="userdets.js"></script>
  </body>
</html>
