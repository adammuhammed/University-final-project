<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" />
  <title> SRMS</title>
    <style>
        * {
    box-sizing: border-box;
  }

  body {
    margin:0;
    padding:0;
    font-family: sans-serif;
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
    width: 50px;
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
  
  .sidebar {
    position: fixed;
    overflow: hidden;
    top: 0;
    left: 0;
    width: 72px;
    height: 90.4%;
    background: #00001f;
    transition: width 0.4s;
    margin-top:72px;
    z-index:2;
  }
  
  body.open .sidebar {
    width: 230px;
  }

  .sidebar .material-symbols-outlined {
    position: relative;
    z-index: 2;
    padding: 20px;
    font-size: 25px;
    flex: 1 1 auto;
    min-width: 58px;
    opacity: 1;
    cursor: pointer;
    text-align: center;
    transition: 0.3s;
    color:#fff;
  }

  .sidebar a{text-decoration:none;}
  
  .sidebar-inner {
    position: absolute;
    top: 0;
    left: -20px;
    width: 300px;
    height: inherit;
    display: flex;
    flex-direction: column;
  }
  
  .sidebar-header {
    display: flex;
    align-items: center;
    height: 72px;
    padding: 0 1.25rem 0 0;
    background: rgba(0,0,0,0.1);
  }
  
  #sidebar-logo {
    height: 20px;
    opacity: 0;
    transition: 0.3s;
  }
  
  .sidebar-nav {
    padding-top: 10px;
    flex: 1 1 auto;
  }
  
  .sidebar button {
    display: flex;
    gap: 25px;
    align-items: center;
    height: 50px;
    width: 72px;
    font-family: "Poppins";
    font-size: 16px;
    font-weight: 200;
    letter-spacing: 2px;
    line-height: 1;
    padding: 0 25px;
    border-radius:25px;
  }
 
button .material-symbols-outlined{
  opacity: 1;
}  

  .sidebar button > img {
    width: 24px;
    height: 24px;
  }
  
  .sidebar button > span {
    color: #fff;
    opacity: 0;
    transition: 0.3s;
  }
  
  @keyframes appear {
    0% {
      opacity: 0;
      translate: 0 10px;
    }
    100% {
      opacity: 1;
      translate: 0;
    }
  }
  
  body.open .sidebar button > span {
    opacity: 1;
    animation: appear 0.3s both;
  }

  body.press #myTableBody label[for="tabt"]{
    display: none;

  }

  .box {
    position:relative;
    top: 400px;
    left: 50%;
    width: 1000px;
    padding: 40px;
    margin:0 0 100px 0;
    transform: translate(-50%,0%);
    background: #00001f;
    box-sizing:border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 50px;
    height: auto;
  }
  
  .box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
  }
  
  .box form a {
    position:relative;
    top:0;
    left:45.5%;
    text-align: center; 
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    letter-spacing: 4px;
    border-radius: 25px;
    margin-bottom:20px;
  }
  
  .box a:hover {
    background: #03e9f4;
    color: #fff;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
  }

  .table{
    width:100%;
    border-radius: 25px;
  }
  
  #myTable{
    width:100%;
    border-radius: 25px;
    background-color: #fff;
    padding:10px;
  }
thead{
  border-radius: 25px;
  background-color: gray;
}
  
#th{
  border-radius: 25px;
}

td{
  position:relative;
  align-items: center;
}
  
.delete{
  position:relative;
  background-color: #03e9f4;
  width:100%;
  text-align: center; 
  display: inline-block;
  padding: 10px 20px;
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  box-shadow: 0 5px 10px rgba(0,0,0,.2);
  transition: .5s;
  letter-spacing: 4px;
  border-radius: 25px;
  margin-bottom:5px;
}

.delete:hover {
background: #00001f;
color: #03e9f4;
}
  
.btntoggle{
  position:absolute;
  left:17.5%;
  transform: translate(-50%,-50%);
  background-color: #03e9f4;
  height: 40px;
} 

.btntoggle .toggle{
  position: absolute;
  top:0;
  left:0;
  width: 80px;
  height: 40px;
  background: #00001f;
  border-radius: 30px;
  box-shadow: 0 5px 10px rgba(0,0,0,.2);
  transition: .5s;
  cursor: pointer;
}

.btntoggle .toggle-button{
  position: absolute;
  top:5px;
  left:5px;
  width:30px;
  height:30px;
  background: #03e9f4;
  border-radius: 50%;
  transition: .5s;
  cursor: pointer;
}

.btntoggle .toggle.active{
  background-color: #03e9f4;
}

.btntoggle .toggle.active .toggle-button{
  left: 45px;
  background-color: #00001f;
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
          .search input { width: 450px;}
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

  <nav class="navbar">
    <h3>Computer Engineering Department</h3>
    <div class="center">
      <div class="search">
        <input spellcheck="false" type="text" class="search" id="search" placeholder="Search" />
        <button class="material-symbols-outlined">search</button>
      </div>
    </div>
    <nav>
      <button class="material-symbols-outlined" id="searchin">search</button>
      <a href="#"><button class="material-symbols-outlined">home</button></a>
      <a href="#"><button class="material-symbols-outlined">info</button></a>
      <button class="material-symbols-outlined">settings</button>
    </nav>
  </nav>

 @include('sidebar')

  <div class="box">
    <h2>Accounts</h2>
      <div class="table">
        <table id="myTable">
          <thead>
            <tr id="th">
              <th>Id</th>
              <th>Username</th>
              <th>Email Address</th>
              <th>Privilages</th>
              <th>Delete User</th>
            </tr>
          </thead>
          <tbody id="myTableBody">
            @foreach($accounts as $account)
            <tr>
              <td>{{$account->id}}</td>
              <td>{{$account->username}}</td>
              <td>{{$account->email}}</td>
              <td>
              <div class="btntoggle">
                  <div class="toggle @if($account->isAdmin) active @endif">
                    <div class="toggle-button" onclick="@if(auth()->user()->isAdmin && $account->id != auth()->user()->id)  animatedToggle(this, {{ $account->id }}) @endif"></div>
                  </div>
                </div>
              </td>
              <td>@if(auth()->user()->isAdmin && $account->id != auth()->user()->id) <button class="delete" onclick="delete_account({{ $account->id }})">Delete</button> @else <button class="delete" style="visibility: hidden;">Delete</button> @endif</td> 
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>

  <script type="text/javascript">

    function delete_account(account_id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.reload();
            }
        };
        xhttp.open("GET", "accounts/delete/" + account_id, true);
        xhttp.send();
    }

    const toggleSidebar = () => document.body.classList.toggle("open");
    const toggleMenuOpen = () => document.body.classList.toggle("open");
    let toggleButton = document.querySelector('toggle-button');
    function animatedToggle(el, account_id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.reload();
            }
        };
        xhttp.open("GET", "accounts/toggle/" + account_id, true);
        xhttp.send();
    }

  </script>

</body>

</html>