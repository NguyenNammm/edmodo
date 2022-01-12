<<<<<<< HEAD
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
    <link rel="stylesheet" href="signin.css">
</head>
<body >
  <nav class="navbar ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="images/edmodo-logo.png" alt="" width="100px" height="10px" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>
 
<div class ="img-back" >
  <div class="container" >
    <form class ="form-login" action ='process-signup.php' method='POST' >
      <nav class="navbar fixed-top" style="padding: 0px; height: 52px; background-color: white; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 4px;"><div class="d-flex align-items-center justify-content-center container"><a aria-label="Edmodo Homepage" href="/"><svg width="141.5" height="28.3" viewBox="0 0 32 7" preserveAspectRatio="xMidYMid meet" alt="Edmodo Logo"><path fill="#1a237e" d="M3.98592915,5.09392236 C3.51771047,5.35162523 2.90534544,5.52355849 2.28116092,5.52355849 C1.24849751,5.52355849 0.768395103,5.02023668 0.720282084,4.2346501 L4.09397468,4.09955968 C4.26208118,2.4917407 3.73380152,1.62025316 2.34102919,1.62025316 C1.15259265,1.62025316 0,2.43033596 0,4.35752524 C0,5.74441852 0.828263372,6.48101266 2.25707229,6.48101266 C3.01332672,6.48101266 3.67374054,6.29673278 4.2020202,5.94091368 L3.98592915,5.09392236 Z M2.19954063,2.59240506 C2.98851036,2.59240506 3.46915997,2.85824869 3.55555556,3.53409016 L0.646464646,3.88860759 C0.695861815,3.02439354 1.17651143,2.59240506 2.19954063,2.59240506 L2.19954063,2.59240506 Z M6.55907769,6.48101266 C7.60238808,6.48101266 8.1848971,5.47730026 8.45168025,4.34077307 L8.36684191,6.40829769 L9.37373737,6.40829769 L9.1068893,3.1799213 L9.24021597,0 L8.28200357,0 L8.40325684,1.82570206 C8.0393023,1.72911536 7.63880301,1.69282257 7.20208352,1.69282257 C6.01324324,1.69282257 4.84848485,2.49081113 4.84848485,4.38922816 C4.84848485,5.75541561 5.69777702,6.48101266 6.55907769,6.48101266 L6.55907769,6.48101266 Z M5.49494949,4.13487862 C5.49494949,3.11045333 5.99397268,2.59240506 7.04085989,2.59240506 C7.5519956,2.59240506 7.978018,2.65250227 8.39192787,2.83343872 L8.4040404,2.92971033 C8.37961998,4.43626742 7.6494168,5.50886076 6.74879164,5.50886076 C5.9209719,5.50886076 5.49494949,4.91839922 5.49494949,4.13487862 L5.49494949,4.13487862 Z M10.1291498,6.48101266 L11.1701778,6.48101266 L11.0006675,4.30558366 C11.1460823,3.11204432 11.6665316,2.63965709 12.1992228,2.63965709 C12.6592391,2.63965709 12.9257142,2.90066068 12.9498097,3.95737934 L12.8288142,6.48101266 L13.8215217,6.48101266 L13.6762363,4.28064066 C13.7609591,3.11204432 14.3178754,2.63965709 14.8142292,2.63965709 C15.2743102,2.63965709 15.564816,2.91323195 15.5768638,3.90775939 L15.4438205,6.48101266 L16.4848485,6.48101266 L16.2790654,3.68400402 C16.2911131,3.47262038 16.3033552,3.28617974 16.3033552,3.0498531 C16.3033552,2.15489813 15.9401742,1.62025316 15.2257306,1.62025316 C14.5600608,1.62025316 13.9547593,2.21708935 13.6520113,3.34837096 L13.6520113,3.00023315 C13.6520113,2.14232686 13.3008781,1.62025316 12.5986765,1.62025316 C11.8844272,1.62025316 11.2670779,2.27908103 10.976572,3.46024865 L11.0006675,1.70738739 L10.020202,1.70738739 L10.2986602,3.89538766 L10.1291498,6.48101266 Z M19.352379,6.48101266 C20.516324,6.48101266 21.6565657,5.68301378 21.6565657,3.78058342 C21.6565657,2.36886556 20.8251037,1.62025316 19.4354998,1.62025316 C18.2715548,1.62025316 17.1313131,2.41812069 17.1313131,4.32074808 C17.1313131,5.73226892 17.9627115,6.48101266 19.352379,6.48101266 L19.352379,6.48101266 Z M19.3626899,2.59240506 C20.5484359,2.59240506 21.010101,3.12484603 21.010101,3.97193474 C21.010101,4.98845414 20.5233962,5.5086588 19.4376086,5.5086588 C18.2396432,5.5208951 17.7777778,4.97621784 17.7777778,4.11708705 C17.7777778,3.12484603 18.2520629,2.59240506 19.3626899,2.59240506 L19.3626899,2.59240506 Z M24.0135828,6.48101266 C25.0571029,6.48101266 25.6393606,5.47730026 25.9062125,4.34077307 L25.8213729,6.40829769 L26.8282828,6.40829769 L26.5614309,3.1799213 L26.6949542,0 L25.7364685,0 L25.8577235,1.82570206 C25.4938286,1.72911536 25.0935183,1.69282257 24.6566627,1.69282257 C23.4677405,1.69282257 22.3030303,2.49081113 22.3030303,4.38922816 C22.3030303,5.75541561 23.1522697,6.48101266 24.0135828,6.48101266 L24.0135828,6.48101266 Z M22.9494949,4.13487862 C22.9494949,3.11045333 23.4485628,2.59240506 24.4952833,2.59240506 C25.0064648,2.59240506 25.4325253,2.65250227 25.8464722,2.83343872 L25.8585859,2.92971033 C25.8341632,4.43626742 25.1038947,5.50886076 24.2031889,5.50886076 C23.3754904,5.50886076 22.9494949,4.91839922 22.9494949,4.13487862 L22.9494949,4.13487862 Z M29.6958457,6.48101266 C30.8597108,6.48101266 32,5.68301378 32,3.78058342 C32,2.36886556 31.1685497,1.62025316 29.7789018,1.62025316 C28.6149731,1.62025316 27.4747475,2.41812069 27.4747475,4.32074808 C27.4747475,5.73226892 28.3061977,6.48101266 29.6958457,6.48101266 L29.6958457,6.48101266 Z M29.706191,2.59240506 C30.8918703,2.59240506 31.3535354,3.12484603 31.3535354,3.97193474 C31.3535354,4.98845414 30.8668306,5.5086588 29.781043,5.5086588 C28.5830775,5.5208951 28.1212121,4.97621784 28.1212121,4.11708705 C28.1212121,3.12484603 28.5954972,2.59240506 29.706191,2.59240506 L29.706191,2.59240506 Z"></path></svg></a></div></nav>
      <scan class="qa-test-login-signup-link">          
       <a href="index.php"> Back </a>
      </scan>
    <div class="page-content">
        <h1 class="h3 mb-3 font-weight-normal">Choose an account</h1>
        <button class ="big-button-text-image text-left usertype-btn qa-test-usertypePicker-teacherOptionBtn">
        <div class="row">
         <div class="image-col col-3">
         <svg width="32px" height="32px" viewBox="0 0 24 24" class="school-icon">
          <path fill="#1a237e" fill-rule="evenodd" stroke="none" stroke-width="1" id="Icon/small/school" d="M7 17v-2a1 1 0 00-2 0v2h2zm-4 0v-4.7a2 2 0 011.188-1.828L7 9.222V7.43a1 1 0 01.481-.855l4-2.429a1 1 0 011.038 0l4 2.43a1 1 0 01.481.854v1.793l2.812 1.25A2 2 0 0121 12.3V17a1 1 0 011 1v1H2v-1a1 1 0 011-1zm16 0v-2a1 1 0 00-2 0v2h2zm-5 0v-1a1 1 0 00-1-1h-2a1 1 0 00-1 1v1h4zm-2-5a2 2 0 100-4 2 2 0 000 4z"></path>
         </svg>
        </div>
        <div class="desc-col col-15">
         <div class="button-title">
          <span>Teacher Account</span>
         </div>
        <div class="button-description">
          <span>For teachers, co-teachers, admins, coaches, club advisors, instructional tech</span>
        </div>
      </div>
    </div>
        </button>
        <button class ="big-button-text-image text-left usertype-btn qa-test-usertypePicker-teacherOptionBtn">
        <div class="row">
         <div class="image-col col-3">
         <svg width="32px" height="32px" viewBox="0 0 24 24" class="school-icon">
          <path fill="#1a237e" fill-rule="evenodd" stroke="none" stroke-width="1" id="Icon/small/school" d="M7 17v-2a1 1 0 00-2 0v2h2zm-4 0v-4.7a2 2 0 011.188-1.828L7 9.222V7.43a1 1 0 01.481-.855l4-2.429a1 1 0 011.038 0l4 2.43a1 1 0 01.481.854v1.793l2.812 1.25A2 2 0 0121 12.3V17a1 1 0 011 1v1H2v-1a1 1 0 011-1zm16 0v-2a1 1 0 00-2 0v2h2zm-5 0v-1a1 1 0 00-1-1h-2a1 1 0 00-1 1v1h4zm-2-5a2 2 0 100-4 2 2 0 000 4z"></path>
         </svg>
        </div>
        <div class="desc-col col-15">
         <div class="button-title">
          <span>Student Account</span>
         </div>
        <div class="button-description">
          <span>For student, class participants,club member,etc</span>
        </div>
      </div>
    </div>
        </button>
        <button class ="big-button-text-image text-left usertype-btn qa-test-usertypePicker-teacherOptionBtn">
        <div class="row">
         <div class="image-col col-3">
         <svg width="32px" height="32px" viewBox="0 0 24 24" class="school-icon">
          <path fill="#1a237e" fill-rule="evenodd" stroke="none" stroke-width="1" id="Icon/small/school" d="M7 17v-2a1 1 0 00-2 0v2h2zm-4 0v-4.7a2 2 0 011.188-1.828L7 9.222V7.43a1 1 0 01.481-.855l4-2.429a1 1 0 011.038 0l4 2.43a1 1 0 01.481.854v1.793l2.812 1.25A2 2 0 0121 12.3V17a1 1 0 011 1v1H2v-1a1 1 0 011-1zm16 0v-2a1 1 0 00-2 0v2h2zm-5 0v-1a1 1 0 00-1-1h-2a1 1 0 00-1 1v1h4zm-2-5a2 2 0 100-4 2 2 0 000 4z"></path>
         </svg>
        </div>
        <div class="desc-col col-15">
         <div class="button-title">
          <span>Student Account</span>
         </div>
        <div class="button-description">
          <span>For parents or guardians</span>
        </div>
      </div>
    </div>
        </button>
      
         <div> 
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Ghi nhớ tôi</label>
         </div>
       <div class="login-signup-now" data-uia="login-signup-now">
          <a class=" " target="_self" href="/" style="color: red; text-decoration: none;">Đăng ký ngay</a>
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
                </div>  
                <scan class="qa-test-login-signup-link"> 
                 Not sure which account you need?

                 <a href="/usertype-picker-signup?utm_source=main&amp;utm_campaign=onb-user-type-page&amp;utm_medium=visitor-site&amp;utm_content=main-cta-btn">  Learn more </a>
                </scan>
                <scan class="qa-test-login-signup-link"> 
                  Don't have an account? 
                  <a href="/usertype-picker-signup?utm_source=main&amp;utm_campaign=onb-user-type-page&amp;utm_medium=visitor-site&amp;utm_content=main-cta-btn"> Sign up </a>
                </scan>                                   
              </div>
        </div>
       </div>
        </div>
    </footer>
    </div>
      
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
=======
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
>>>>>>> 9903b837ebfcaf281ae35ed06e50b53a81754b80
</html>