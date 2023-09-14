<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="GraduationEndorsement.css">
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
    box-sizing:border-box;/*no effect*/
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
      border-radius: 40px;
      width:100%;
      height:1200px;
      padding:10px;
      }
      
      .head{
        width:100%;
        height:15%;
        border-radius: 25px;
        margin:3px 0;
        border:black solid 2px;
      }
      
      .head .img{
      position:relative;
      left:20px;
      /* bottom:37px; */
      display:inline-block;
      width:65%;
      height:100%;
      }
      
      .img1{
      position:absolute;
      display:inline-block;
      width:30%;
      height:98%;
      margin-top:2px;
      }
  
      .img2{
        position:relative;
        display:inline-block;
        top:20px;
        left:287px;
        width:25%;
        height:82%;
      }
  
      .head .p{
        position:relative;
        left:30px;
        width:27%;
        height:100%;
        display:inline-block;
        }
        
        .p1,.p2,.p3,.p4,.p5{
        display:block;
        position:relative;
        text-align: center;
        font-size:17px;
        font-weight: 600;
        }
        .p1{bottom:-10px;}
        .p2{bottom:5px;}
        .p3{bottom:20px;}
        .p4{bottom:35px;}
        .p5{bottom:50px;}
          
      .first-body{
        width:100%;
        height:4%;
       
    display: flex;
    justify-content: space-between;

        border-radius: 10px;
        /* margin:3px 0; */
        padding:0px 10px;
        border:black solid 2px;
        direction:rtl;
      }
  
  .p21,.p22{
    position:relative;
    display:inline-block;
    width:20%;
    bottom:5px;
  }
  .p22{right:400px;}
  
      .second-body{
        position: relative;
        width: 100%;
        height: 60vh;
        border-radius: 10px;
        margin:3px 0;
        background:inherit;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size:600px;
        border:black solid 2px;
        background-image: url("{{ asset('storage/images/logo.jpg') }}");
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: contain;
      }

.back-second-body{
  width:100%;
  height:76%;
  border-radius: 10px;
  margin:3px 0;
  opacity:0.15;
  background-image: url("../imgs/Logo-JPG.jpg");
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size:600px;
}      
  
      .title{
        text-align:center;
        height:22.5%;
        font-size:22px;
        font-weight:800 ;
      }
  
      .pt1,.pt2{
        position:relative;
        top:70px;
      }
      .pt2{top:60px;}
  
      .write{
        position:relative;
        height:45%;
        text-align:center;
        font-size:20px;
        font-weight:500;
        direction:rtl;
        padding:10px;
      }
  
  .pw1{
    height:80%;
    font-size:20px;
    font-weight:600;
    line-height:35px;
  }
  .pw2{
    font-weight:600;
  }
  
      .signture{
        position:relative;
        height:30%;
        text-align:center;
      }
      .s1,.s2{
        position:relative;
        width:40%;
        height:50%;
        text-align:center;
        font-size:20px;
        font-weight: 600;
        direction:rtl;
      }
      .s1{
        display:inline-block;
        position:relative;
        right:74px;
      }
      .s2{
        display:inline-block;
        position:relative;
        left:74px;
      }
      .s3{
        position:relative;
        top:80px;
        text-align:right;
        direction:rtl;
        display:block;
        padding-right:100px;
        width:100%;
      }
      .ps11,.ps12,.ps13,.ps21,.ps22,.ps23,.ps31,.ps32,.ps33{
        position:relative;
        height:16%;
      }
      .ps11,.ps21{top:15px;}
      .ps13,.ps23{bottom:15px;}

      .ps31,.ps32{
        display:inline-block;
      }
  
      .foot{
      position:relative;
      bottom:0px;
      width:100%;
      height:4%;
      border-radius: 10px;
      margin:3px 0;
      padding: 0 5px;
      border:black solid 2px;
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
      margin-left: 43.5%;
      letter-spacing: 4px;
      border-radius: 25px;
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
    
    .second-body::before {
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
            <div class="head" style="display: flex; justify-content: center; align-items: center;">
              <div class="img">
                <img src="{{ $image_url }}" alt="error" class="img1">
                <img src="{{ asset('storage/images/logo.jpg') }}" alt="error" class="img2">
              </div>
              <div class="p">
                <p class="p1">وزارة التعليم العالي والبحث العلمي</p>
                <p class="p2">الجامعة التكنولوجية</p>
                <p class="p3">قسم هندسة الحاسوب</p>
                <p class="p4">الدراسة {{ $user->type_of_study }}</p>
                <p class="p5">الوثائق</p>
              </div>
            </div>
            <div class="first-body">
                <p class="">العدد: ه ح / و / {{ $user->id }}</p>
                <p class="">التاريخ : {{ $date }}</p>
            </div>
            <div class="second-body">
                <div class="title">
                  <p class="pt1">الى</p>
                  <p class="pt2">م / تأييد تخرج</p>
                </div>
                <div class="write">
                  <p class="pw1">
                    <br>
                  نؤيد ان الخريج ({{ $user->arabic_name }}) المثبتة صورته اعلاه قد تخرج من هذه الجامعة {{ $final_attempt }} بتقدير ({{ $grade }}) وحصل على درجة بكالوريوس علوم في {{ $user->arabic_department }} /  {{ $user->arabic_branch }} بتاريخ {{ date('Y/m/d', strtotime($user->date_of_graduation)) }} علما ان هذه الدراسة هي اربع سنوات بعد الدراسة الثانوية وان الموما إليه خريج العام الدراسي {{ date('Y', strtotime($user->date_of_graduation)) }}/{{ date('Y', strtotime($user->date_of_graduation  . ' +1 year')) }}
                  </p>
                </div>
                <div class="signture">
                  <div class="s1">
                  <p class="ps11"></p>
                  <p class="ps12">معاون رئيس القسم</p>
                  <p class="ps13">{{ $data['hod'] }}</p>
                  <p class="ps13">{{ date('Y/m/d') }}</p>
                  </div>
                  <div class="s2">
                  <p class="ps21"></p>
                  <p class="ps22">مدير التسجيل</p>
                  <p class="ps23">{{ $data['ur'] }}</p>
                  <p class="ps13">{{ date('Y/m/d') }}</p>
                  </div>
                  <div class="">
                      <p class="ps32">{{ $data['pou'] }}</p>
                  <p class="ps31">اسم المنظم:</p>
                  </div>
                </div>
            </div>
            <div class="back-second-body"></div>
            <div class="foot"><p>University Of Technology - Baghdad - Iraq - P.O.Box(18310) (18310) الجامعة التكنولوجية - بغداد - العراق - ص.ب</p></div>
          </div>
          <br>
         
        </form>
      </div>

<script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
    window.print();
</script>


</body>
</html>
