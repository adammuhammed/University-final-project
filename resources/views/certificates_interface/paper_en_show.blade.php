<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/>
  <title> SRMS</title>

  <style>
    * {
  box-sizing: border-box;
}

body {
  margin:0;
  padding:20px;
  font-family: sans-serif;
  /* background:linear-gradient(90deg,#fff,#03e9f4,#03e9f4,#fff); */
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

.box {
  position:relative;
  left:50%;
  top:800px;
  width: 800px;
  padding: 40px 20px;
  margin:0 0 100px 0;
  transform: translate(-50%,-50%);
  background: #00001f;
  box-sizing:border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 50px;
}

.box h2 {
  margin: 0 0 20px 0;
  padding: 0;
  color: #fff;
  text-align: center;
}

  .box .paper{
    position:relative;
    background-color:#fff;
    border-radius: 30px;
    width:100%;
    height:1200px;
    padding:10px;
    color:#000;
    }
    
    .head{
      width:100%;
      height:15%;
      background-color:gray;
    }

    .head .pen{
      position:relative;
      width:40%;
      height:100%;
      bottom:15px;
      display:inline-block;
      }
      
      .p1,.p2,.p3,.p4,.p5{
      position:relative;
      text-align:center;
      font-size:17px ;
      font-weight:600 ;
       }
      .p1{bottom:-15px;}
      .p2{bottom:0px;}
      .p3{bottom:15px;}
      .p4{
        bottom:10px ;
        text-align:left;
        padding-left:5px;
      }
      .p5{
        bottom:30px;
        text-align:left;
        padding-left:5px;
      } 

    .head .img{
    position:relative;
    display:inline-block;
    height:100%;
    width:18%;
    text-align:center;
    }
    
    .img1{
      position:relative;
      display:inline-block;
      bottom:35px;
      height:90%;
    }

    .head .par{
      display:inline-block;
      position:relative;
      width:40%;
      height:100%;
      bottom:33.5px;
      }
      
      .p11,.p12,.p13,.p14,.p15{
      position:relative;
      text-align: center;
      font-size:20px;
      font-weight: 700;
      direction:rtl;
      }
      .p11{bottom:-45px;}
      .p12{bottom:-25px;}
      .p13{bottom:-5px;}
      .p14{
        bottom:0px;
        text-align:right;
        padding-right:5px;
        font-size:17px;
      }
      .p15{
        bottom:20px;
        text-align:right;
        padding-right:5px;
        font-size:17px;
      }
      
    .body{
      position:relative;
      width:100%;
      height:70vh;
      margin:3px 0;
      background-image: url("{{ asset('storage/images/logo.jpg') }}");
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: contain;
    }

    .back-body{
      opacity:0.15;
      width:100%;
      height:76%;
      margin:3px 0;
      background-image: url("{{ asset('storage/images/logo.jpg') }}");
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: contain;
    }

    .faceimg{
      display:inline-block;
      position:relative;
      top:120px;
      left:50px;
      width:140px;
      height:170px;
        }

.faceimg img{
  width:100%;
  height:100%;
}        

    .title{
      display:inline-block;
      position:relative;
      top:130px;
      left:50px;
      width:350px;
      height:170px;
      text-align: center;
    }    

    .pin1,.pin2{
      font-size:20px;
      font-weight:700;
      }

.write{
  position:relative;
  width:100%;
  height:30%;
  padding:40px;
}

.pin3{
  direction:rtl;
  font-size:20px;
  line-height: 40px;
  font-weight: 600;
}

.signtures{
  position:relative;
  width:90%;
  height:175px;
  margin:auto;
}

.s1,.s2{
  display:inline-block;
  position:relative;
  width:40%;
  height:50%;
  text-align:center;
  direction:rtl;
  font-size:20px;
  font-weight: 600;
}
.s2{left:130px;}
.s3{
  position:relative;
  width:40%;
  height:50%;
  margin:auto;
  text-align:center;
  direction:rtl;
  font-size:20px;
  font-weight: 600;
}

.ps11,.ps12,.ps21,.ps22,.ps31,.ps32{
  position:relative;
}

.ps12,.ps22,.ps32{bottom:20px;}

    .foot{
    position:relative;
    bottom:0;
    width:100%;
    height:4%;
    margin:3px 0;
    padding: 0 5px;
    text-align:center;
    background-color: gray;
    }

.p21{      
  position:relative;
  text-align: center;
  top:5px;
}
.p22{
  position:relative;
  text-align: center;
  bottom:10px;
}

  .box form a {
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
    margin-top: 35px;
    margin-left: 42.5%;
    letter-spacing: 4px;
    border-radius:25px;
  }
  
  .box a:hover {
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
    .navbar nav button{width:60px;}
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
  @media (width >= 950px) {
    .search input {width: 400px; }
    .center {padding-right:51px;}
    .navbar h3{width:250px;}
    .center {padding-right:52.5px;}
    .navbar nav button{width:70px;}
  }
  @media(width>=1100px){
    .navbar h3{width:270px;}
    .center {padding-right:20px;}
    .navbar nav button{width:80px;}
  }
  
  .body::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff; /* Overlay color */
        opacity: 0.5; /* Overlay opacity */
    }
    
  </style>
</head>
<body>




<div class="">
  <form>
    <div class="paper">
      <div class="head">
              <div class="pen">
                <p class="p1">Republic of Iraq</p>
                <p class="p2">Ministry of Higher Education and scientific Research</p>
                <p class="p3">University of Technology- Baghdad</p>
                <p class="p4">No   : {{ $user->id }}</p>
                <p class="p5">Date : {{ $date }}</p>
              </div>
              <div class="img">
                <img src="{{ asset('storage/images/logoPNG.png') }}" height="80" width="80" alt="error" class="img1">
              </div>
              <div class="par">
                <p class="p11">جمهورية العراق</p>
                <p class="p12">وزارة التعليم العالي والبحث العلمي</p>
                <p class="p13">الجامعة التكنولوجية - بغداد</p>
                <p class="p14">العدد: {{ $user->id }}</p>
                <p class="p15">التاريخ: {{ $date }}</p>
              </div>
      </div>       
      <div class="body">
<div class="faceimg"><img src="{{ $image_url }}" alt="error"></div>
<div class="title">
  <p class="pin1">TO: WHOM IT MAY CONCERN</p>
  <p class="pin2">GRADUATION CERTIFICATE</p>
</div>
<div class="write">
  <p class="pin3" style="text-align: left">
  This is to certify that {{ $user->name }} ({{ $user->country }} nationality) whose photograph is  affixed above has been awarded the degree of B.Sc. in {{ $user->department }} / {{ $user->branch }} {{ $final_attempt }} with grade of {{ $grade }} in {{ date('d/m/Y', strtotime($user->date_of_graduation)) }} for the academic year {{ date('Y', strtotime($user->date_of_graduation)) }}/{{ date('Y', strtotime($user->date_of_graduation. '+1 year')) }} note that the period of study is four years after secondary school. His study was in english language
  </p>
</div>
<div class="signtures" style="margin-top: 8%">
  <div class="s1">
    <p class="ps11">{{ $data['hod'] }}</p>
    <p class="ps12">Head of Department</p>
  </div>
  <div class="s2">
    <p class="ps21">{{ $data['ur'] }}</p>
    <p class="ps22">University Register</p>
  </div>
  <div class="s3">
    <p class="ps31">{{ $data['pou'] }}</p>
    <p class="ps32">President University</p>
  </div>
</div>
      </div>
      <div class="back-body"></div>
      <div class="foot">
              <p class="p21">Distinction: 100-90 Ex. 89-80 V.G. 79-70 G. 69-60 M. 59-50 Pass</p>
              <p class="p22">سلم التقديرات: 100-90 امتياز 89-80 جيدجيدا 79-70 جيد 69-60 متوسط 59-50 مقبول</p>
      </div>
    </div>
    <br>
    <!-- <a href="#">Print</a> -->
  </form>
</div>

<script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
    window.print();
</script>


</body>
</html>
