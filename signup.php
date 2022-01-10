<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo</title>
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootsrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="login.css">
</head>
<body >
  <nav class="navbar ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="images/edmodo-logo.png" alt="" width="167px" height="55px" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>
 
<div class ="img-back" >
  <div class="container" >
    <form class ="form-login" action ='process-signup.php' method='POST' >
      <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
      <div class="form-floating mb-3">
      <input type="text" class="form-control"  name="txtUser" id="txtUser" placeholder="Username">
        <label for="txtUser" class="sr-only">Username</label>
      <div label for="txtEmail" class="sr-only">Email address</div>
      <input type="Email" class="form-control"  name="txtEmail" id="inputEmail" placeholder="Email address">
      </div>
        <div label for="InputPassword"class="sr-only">Password</div>
        <input type="password" class="form-control" name="txtPass" id="InputPassword" placeholder="Password">

        <label for="InputRetypePassword"class="sr-only">Retype Password</label>
        <input type="password" class="form-control" name="txtPass" id="InputPassword" placeholder="Password">
      <button type="submit" class="btn btn-primary" name="btnSignIn" style="background-color:red;">Đăng kí</button>
      </div>
       <div class="mb-3 form-check">
         <div> 
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Ghi nhớ tôi</label>
         </div>
          <a class = "login-help" href="" style="color: rgb(116, 114, 114); text-decoration: none;">Bạn cần trợ giúp?</a>
      </div>

      <div class = "login-FB">
        <img class ="logoFB" src="images/FB-f-Logo__blue_57.png" alt="">
        <span class="fbBtnText" style="color: #737373;">Đăng nhập bằng tài khoản Facebook</span>
      </div>
      <div class="login-signup-now" data-uia="login-signup-now">
          Bạn mới tham gia Edmodo?
          <a class=" " target="_self" href="/" style="color: white; text-decoration: none;">Đăng ký ngay</a>
      </div>
      
      </form>   
  </div>  
</div>
      <!-- Bootsrap-->   
     <div class = "footer centered">
      <footer class="mt-3 py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-start">
              
                <div class="link-footer col-lg-3 col-6">
                      <ul class="list-unstyled">
                            <li>
                                <a href="https://help.netflix.com/en/node/412" class="link-primary text-decoration-none" style="color: gray;">Câu hỏi thường gặp</a>
                            </li>
                            
                        </ul>
                </div>
                <div class="link-footer col-lg-3 col-6">
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://help.netflix.com/en/" class="link-primary text-decoration-none" style="color: gray;">Trung tâm trợ giúp</a>
                            </li>
                            
                        </ul>
                </div>
                <div class="link-footer col-lg-3 col-6">
                    
                </div>
                <div class="link-footer col-lg-3 col-6">
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://help.netflix.com/legal/privacy" class="link-primary text-decoration-none" style="color: gray;">Quyền riêng tư</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-6">
                  <ul class="list-unstyled">
                    <div class="tieng">
                      <select id="gender1">
                        <i class="fas fa-globe"></i>
                        <option>English</option>
                        <option>Việt Nam</option>
                      </select>
                    </div>
                  </ul>
                </div>

            </div>
        </div>
    </footer>
    </div>
      
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>