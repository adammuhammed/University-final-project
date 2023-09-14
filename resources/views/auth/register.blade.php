<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>SRMS</title>
    <style>
        * {
    box-sizing: border-box;
  }

  body {
    margin:0;
    padding:0;
    font-family:Roboto, sans-serif;
    background:linear-gradient(90deg,#fff,#03e9f4,#03e9f4,#fff);
    background-attachment: fixed;
  }
  
  :root {
    --color-primary: #03e9f4;
    --color-secondary:#00001f;
    --color-third:#fff;
  }

  button {
    position: relative;
    place-items: center;
    height: 42px;
    font-size:20px;
    border: 0;
    padding: 0;
    font-family: inherit;
    background: transparent;
    color: #fff;
    cursor: pointer;
    scale:0.9;
  }
  
  .burger {
    width: 72px;
  }
  
  .navbar {
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 72px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    background: #00001f;
  }

  .navbar h3{
    font-size:16px;
    color:#fff;
    margin-left:10px;
  }
  
  .center {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0 auto;
    color: #fff;
  }
  
  .search {
    position: relative;
    display: none;
  }
  
  .search button {
    position: absolute;
    top: 50%;
    right: 1px;
    translate: 0 -50%;
    z-index: 1;
    font-size: 20px;
    width:50px;
    height: 42px;
    border-radius: 0;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background: #00001f;
    color:#fff;
  }
  
  .search input {
    flex: 1 1 auto;
    height: 44px;
    width: 25vw;
    padding-left: 16px;
    padding-right: 60px;
    font-size: 16px;
    border: 1px solid #fff;
    border-radius: 22px;
    background: inherit;
    color: inherit;
    font-family: inherit;
    font-weight: 400;
    outline: none;
  }
  
  .navbar nav {
    display: flex;
    align-items: center;
    padding-right: 20px;
  }

  .navbar nav button{opacity:0.5;}
  .navbar nav button:hover{opacity:1;}
  
  .login-box {
    position: absolute ;
    top: 55%;
    left: 50%;
    width: 400px;
    padding: 40px;
    background-color: #00001f;
    transform: translate(-50%,-50%);
    box-sizing:border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 50px;
  }
  
  .login-box h2 {
    margin: 0 10px 30px 0;
    padding: 0;
    color: #fff;
    text-align: center;
  }
  
  .login-box .user-box {
    position: relative;
  }
  
  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }
  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }
  
  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #03e9f4;
    font-size: 12px;
  }

  .select{
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
    display:inline-block;
    background-color:#00001f;
  }

  .lcheck{color:#fff;}

  .a{
    display:block;
    color:#fff;
    text-decoration: none;
  }
  
   .button {
    text-align: center; 
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    border:none;
    background-color: inherit;
    cursor: pointer;
    margin:40px 0px 0 90px;
    letter-spacing: 4px;
    border-radius: 25px;
  }
  
  .button:hover {
    background: #03e9f4;
    color: #fff;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
  }
  
 
/* media */

@media (width <= 400px) {
  .navbar nav a button:is(:nth-child(2), :nth-child(3)) {
    display: none;}
}
@media (width >= 550px) {
  .center button { display: block; }
  .search {display: block; }
  #searchin { display: none;}
  .navbar h3{width:185px;}
}
@media (width >= 650px) { 
  .search input { width: 240px;} 
  .navbar h3{width:187.5px;}
}
@media (width >= 750px) {
  .search input { width: 300px;}
  .navbar h3{width:200px;}
  .navbar nav button{width:70px;}
  }
  @media (width >= 800px) {
    .search input { width: 350px;}
    .navbar h3{width:210px;}
    }
    @media (width >= 850px) {
      .search input { width: 400px;}
      .navbar h3{width:220px;}
      }
      @media (width >= 900px) {
        .navbar h3{width:230px;}
        }
@media(width>=950px){
  .center {padding-right:52.5px;}
  .navbar nav button{width:60px;}
  .center {padding-right:51px;}
  .navbar h3{width:250px;}
  .navbar nav button{width:70px;}
  .search input {width: 400px; }
  }
@media(width>=1100px){
  .navbar h3{width:270px;}
  .center {padding-right:20px;}
  .navbar nav button{width:80px;}
}








  
    </style>
</head>
<body>
  
    
      <div class="login-box">
        <h2>Register</h2>
        @if ($errors->any())
      <div class="alert alert-danger">
          <div>
              @foreach ($errors->all() as $error)
              <p style="color: red;">{{ $error }}</p>
              @endforeach
          </div>
      </div>
      @endif
        <form method="post" action="{{ route('register') }}">
            @csrf
          <div class="user-box">
            <input type="text" name="username" required value="{{ old('username') }}" />
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="email" name="email" required value="{{ old('email') }}" />
            <label>Email Address</label>
          </div>
          <div class="user-box">
            <input type="Password" name="password" required/>
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="Password" name="password_confirmation" required/>
            <label>Confirm Password</label>
          </div>
          
          <!--<input type="checkbox" class="check"><label class="lcheck"> I agree to theterms & conditions</label>-->
          <a href="{{ route('show_login') }}" id="don't have" class="a">Already have an account? Login</a>
          <button class="button">
            Register
          </button>
        </form>
      </div>

      

</body>
</html>