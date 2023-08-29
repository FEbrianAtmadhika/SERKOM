<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Let's Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100" style="background-color: #eee;">
    <div class="col-sm-3 ">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">
                    Login
                </h1>
                <form class="card-text"  action="login_process.php" method="POST" onSubmit="return validasi()">
                    <div class="form-outline mb-4">
                      <input type="email" name="email" class="form-control" />
                      <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="password" class="form-control" />
                      <label class="form-label" for="form2Example2">Password</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                    <div class="text-center">
                      <p>Not a member? <a href="{{ route('register') }}">Register</a></p>

                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        function validasi() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;		
            if (email != "" && password!="") {
                return true;
            }else{
                alert('Email dan Password harus di isi !');
                return false;
            }
        }
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>