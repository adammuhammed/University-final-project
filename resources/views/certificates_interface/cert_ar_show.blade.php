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
  <link rel="stylesheet" href="decotype-thuluth-ii.ttf">
  <title> SRMS</title>
  <style>
    * {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 20px;
  font-family: sans-serif;
  /* background: linear-gradient(90deg, #fff, #03e9f4, #03e9f4, #fff); */
  background-attachment: fixed;
}

:root {
  --color-primary: #03e9f4;
  --color-secondary: #00001f;
  --color-third: #fff;
}

button {
  position: relative;
  place-items: center;
  width: 50px;
  height: 42px;
  font-size: 20px;
  border: 0;
  padding: 0;
  font-family: inherit;
  background: transparent;
  color: #fff;
  cursor: pointer;
  scale: 0.9;
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

.navbar h3 {
  font-size: 16px;
  color: #fff;
  margin-left: 10px;
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
  width: 50px;
  height: 42px;
  border-radius: 0;
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
  background: #00001f;
  color: #fff;
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

.navbar nav button {
  opacity: 0.5;
}

.navbar nav button:hover {
  opacity: 1;
}

.sidebar {
  position: fixed;
  overflow: hidden;
  top: 0;
  left: 0;
  width: 72px;
  height: 90.4%;
  background: #00001f;
  transition: width 0.4s;
  margin-top: 72px;
  z-index: 2;
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
  color: #fff;
}

.sidebar a {
  text-decoration: none;
}

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
  background: rgba(0, 0, 0, 0.1);
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
  border-radius: 25px;
}

button .material-symbols-outlined {
  opacity: 1;
}

.sidebar button>img {
  width: 24px;
  height: 24px;
}

.sidebar button>span {
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

body.open .sidebar button>span {
  opacity: 1;
  animation: appear 0.3s both;
}

.box {
  position: relative;
  left: 50%;
  top: 775px;
  width: 800px;
  padding: 40px 20px;
  margin: 0 0 100px 0;
  transform: translate(-50%, -50%);
  background: #00001f;
  box-sizing: border-box;
  /*no effect*/
  box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
  border-radius: 50px;
}

.box h2 {
  margin: 0 85px 20px 0;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .paper {
  position:relative;
  background-color: #fff;
  width: 100%;
  height: 1150px;
  padding: 10px;
  font-family: serif;
  direction:rtl;
}
        
.head {
  width: 100%;
  height: 10%;
  direction:ltr;
}

.head .p {
  position: relative;
  top: 0;
  left:50px;
  width: 50%;
  height: 90%;
  display: inline-block;
}

.p1,
.p2,
.p3 {
  display: block;
  position: relative;
  text-align: center;
  font-size: 22px;
  font-weight: 900;
}

.p1 {
  bottom: 5px;
}
.p2 {
  bottom: 15px;
}

.p3 {
  bottom: 25px;
}

.head .img {
  position: relative;
  bottom:22px;
  left: 0;
  width: 45%;
  height: 100%;
  display: inline-block;
  margin-right: 32px;
}

.img1,
.img2,
.img3 {
  width: 32%;
  height: 100%;
}

.img2 {
  position: relative;
  bottom: 5px;
  height: 90%;
  width: 30%;
}

.body{
  position:absolute;
  background:inherit;
  width:98%;
  margin:3px 0;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size:600px;
  background-image: url("{{ asset('storage/images/logo.jpg') }}");
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: contain;
}

.back-body{
  position:relative;
  bottom:5px;
  width:100%;
  height:100%;
  border-radius: 10px;
  opacity:0.15;
  background-image: url("../imgs/Logo-JPG.jpg");
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size:600px;
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

.first-body {
  width: 100%;
  height: 25%;
}

.firstwrite,
.faceimg {
  font-size: 15px;
  line-height: 2px;
  display: inline-block;
  height: 100%;
}

.firstwrite {
  font-family: serif;
  width: 81%;
  padding-right: 5px;
}

.fp3,
.fp4,
.fp5,
.fp6,
.fp7,
.fp8,
.fp9,
.fp10,
.fp11,
.fp12,
.fp13,
.fp14 {
  position: relative;
  width: 100%;
  height: 16px;
}

.f1,
.f2 {
  display: inline-block;
  font-weight: 900;
  font-size:20px;
}


.f1 {
  width: 100px;
}

.f2 {
  position: absolute;
  right: 50%;
  transform: translateX(50%);
  font-weight: 900;
}

.f3 {
  position: relative;
  font-weight: 900;
}

.f4,
.f5,
.f6,
.f7,
.f8,
.f9,
.f10,
.f11,
.f12,
.f13,
.f14 {
  display: inline-block;
  position: relative;
  width: 100px;
  font-size: 15px;
  font-weight: 400;
}


.f4w,
.f5w,
.f6w,
.f7w,
.f8w,
.f9w,
.f10w,
.f11w,
.f12w,
.f13w,
.f14w {
  display: inline-block;
  position: relative;
  width: 489px;
  margin: 0;
}


.f4w {
  font-size: 22px;
}

.f13w {
  font-size: 14.5px;
}

.f15 {
  position: absolute;
  right: 50%;
  transform: translateX(-50%);
  top: 10px;
  font-size: 20px;
  font-weight: 700;
}

.faceimg {
  position: relative;
  top: 25px;
  height: 200px;
  width: 18%;
}

.faceimg img {
  height: 100%;
  width: 100%;
}

.second-body {
  position:relative;
  top: 20px;
  width: 100%;
  height: 45%;
  padding: 0 5px;
}

.tr111{display:none;}

.divt1,
.divt2 {
  display: inline-block;
  position: relative;
  height: 100%;
  width: 48.5%;
}

.divt2 {
  right: 15px;
}

.table1,
.table2,
.table3,
.table4 {
  font-family: serif;
  font-weight: 600;
  font-size: 12px;
  width: 100%;
  height: 50%;
  text-align: center;
  border: black ridge 1px;
}

.second-body * {
 border:solid black 1px;
}

.second-body .divt2, .second-body .divt1 , table {
  border-collapse: collapse;
  border: none;
  margin: 5px;
}

.tr11,
.tr21,
.tr31,
.tr41 {
  background-color: gray;
  border: groove;
}

th {
  border: none;
}

.foot {
  position: relative;
  top: 30px;
  width: 100%;
  height: 19%;
}

.signtures {
  position: relative;
  width: 90%;
  height: 100%;
  margin: auto;
  font-family: serif;
}

.s1,
.s2 {
  display: inline-block;
  position: relative;
  width: 40%;
  height: 50%;
  text-align: center;
  font-size: 16px;
  font-weight: 600;
}

.s2 {
  right: -50px;
}

.s3 {
  position: relative;
  width: 40%;
  height: 50%;
  margin: auto;
  text-align: center;
  font-size: 16px;
  font-weight: 600;
}

.ps11,
.ps12,
.ps21,
.ps22,
.ps31,
.ps32 {
  position: relative;
  top: 10px;
}

.ps12,
.ps22,
.ps32 {
  bottom: 10px;
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
  margin:35px 42.5% 10px 42.5%;
  letter-spacing: 4px;
  border-radius: 25px;
}

.box form a:hover {
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

.signtures p {
    margin: 0;
    padding:0;
}
  
  </style>
</head>

<body>

  
  

  <div class="">
    <form>
      <div class="paper">
        <div class="head">
        <div class="img">
            <img src="{{ asset('storage/images/u.jpg') }}" alt="error" class="img1">
            <img src="{{ asset('storage/images/b.png') }}" alt="error" class="img2">
            <img src="{{ asset('storage/images/d.jpg') }}" alt="error" class="img3">
          </div>
          <div class="p">
            <p class="p1">جمهورية العراق</p>
            <p class="p2">وزارة التعليم العالي والبحث العلمي</p>
            <p class="p3">الجامعة التكنولوجية</p>
          </div>
        </div>
        <div class="body">
          <div class="first-body" style="display: flex;flex-direction: row-reverse;justify-content: space-between;width: 100%;text-align: end;">
          <div class="firstwrite">
            <div class="fp1">
                <p class="f2">وثيقة التخرج</p>
              <p class="f1">العدد: {{ $user->id }}</p>
            </div>
            <div class="fp2">
              <p class="f3">التاريخ: {{ $date }}</p>
            </div>
            <div class="fp3">
                <p class="f4w">{{ $user->arabic_name }}</p>
              <p class="f4">:الاسم</p>
            </div>
            <div class="fp4">
                <p class="f5w">{{ date('Y', strtotime($user->date_of_birth)) }}/ {{ $user->arabic_origin }}</p>
              <p class="f5">:محل وتاريخ الولادة</p>
            </div>
            <div class="fp5">
                <p class="f6w">{{ $user->arabic_country }}</p>
              <p class="f6">:الجنسية</p>
            </div>
            <div class="fp6">
                <p class="f7w">{{ $user->arabic_department}}</p>
              <p class="f7">:القسم</p>
            </div>
            <div class="fp7">
                <p class="f8w">{{ $grade }}</p>
              <p class="f8">:الشهادة</p>
            </div>
            <div class="fp8">
                <p class="f9w">بكالوريوس علوم في {{ $user->arabic_branch }}</p>
              <p class="f9">:التقدير</p>
            </div>
            <div class="fp9">
                <p class="f10w">{{ date('Y', strtotime($user->date_of_joining)) }}-{{ date('Y', strtotime($user->date_of_joining  . ' +1 year')) }}</p>
              <p class="f10">:سنة القبول</p>
            </div>
            <div class="fp10">
                <p class="f11w">({{ $total_avg }}%)</p>
              <p class="f11">:المعدل</p>
            </div>
            <div class="fp11">
                <p class="f12w">{{ date('d-m-Y', strtotime($user->date_of_graduation)) }}</p>
              <p class="f12">:تاريخ التخرج</p>
            </div>
            <div class="fp12">
                <p class="f13w">({{ $rank }})من اصل({{ $total_students }}) خريجا وبتخصصه للدراسة الصباحية والمسائية.</p>
              <p class="f13">:تسلسل التخرج</p>
            </div>
            <div class="fp13">
                <p class="f14w">علما ان معدل الخريج الاول في تخصصه ({{ $first_total_avg }}%)</p>
              <p class="f14">:ملاحظة</p>
            </div>
            <div class="fp14">
              <p class="f15">سجل الدرجات</p>
            </div>
          </div>
          <div class="faceimg"><img src="{{ $image_url }}" id="img" alt="error"></div>
          </div>
          <div class="second-body">
          <div class="divt1">
            <table class="table1">
              <thead>
                <tr class="tr11">
                  <th class="th11" colspan="2">درجات الصف الاول</th>
                  <th class="th12" colspan="4">{{ date('Y', strtotime($user->date_of_joining)) }}-{{ date('Y', strtotime($user->date_of_joining . '+1 year')) }}</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr12">
                  <td class="td111">الموضوع</td>
                  <td class="td112">الدرجة</td>
                  <td class="td113">الوحدة</td>
                  <td class="td114">الموضوع</td>
                  <td class="td115">الدرجة</td>
                  <td class="td116">الوحدة</td>
                </tr>
                @foreach($year_one_degrees as $year_one_degree)
                    <tr class="tr13">
                    <td class="td121">{{ $year_one_degree[0]->subject->arabic_name }}</td>
                    <td class="td122">{{ $year_one_degree[0]->degree }}</td>
                    <td class="td123">{{ $year_one_degree[0]->part }}</td>
                    <td class="td124">{{ $year_one_degree[1]->subject->arabic_name }}</td>
                    <td class="td125">{{ $year_one_degree[1]->degree }}</td>
                    <td class="td126">{{ $year_one_degree[1]->part }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="tr112">
                  <td colspan="6" class="td1111">ناجح من {{ $year_one_attempt }} وبمعدل ({{ $year_one_avg }}%)</td>
                </tr>
              </tfoot>
            </table>
            <table class="table3">
              <thead>
                <tr class="tr31">
                  <th class="th31" colspan="2">درجات الصف الثالث</th>
                  <th class="th32" colspan="4">{{ date('Y', strtotime($user->date_of_joining . '+2 year')) }}-{{ date('Y', strtotime($user->date_of_joining . '+3 year')) }}</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr32">
                  <td class="td311">الموضوع</td>
                  <td class="td312">الدرجة</td>
                  <td class="td313">الوحدة</td>
                  <td class="td314">الموضوع</td>
                  <td class="td315">الدرجة</td>
                  <td class="td316">الوحدة</td>
                </tr>
                @foreach($year_three_degrees as $year_one_degree)
                    <tr class="tr13">
                    <td class="td121">{{ $year_one_degree[0]->subject->arabic_name }}</td>
                    <td class="td122">{{ $year_one_degree[0]->degree }}</td>
                    <td class="td123">{{ $year_one_degree[0]->part }}</td>
                    <td class="td124">{{ $year_one_degree[1]->subject->arabic_name }}</td>
                    <td class="td125">{{ $year_one_degree[1]->degree }}</td>
                    <td class="td126">{{ $year_one_degree[1]->part }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="tr112">
                  <td colspan="6" class="td1111">ناجح من {{ $year_three_attempt }} وبمعدل ({{ $year_three_avg }}%)</td>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="divt2">
            <table class="table2">
              <thead>
                <tr class="tr21">
                  <th class="th21" colspan="2">درجات الصف الثاني</th>
                  <th class="th22" colspan="4">{{ date('Y', strtotime($user->date_of_joining . '+1 year')) }}-{{ date('Y', strtotime($user->date_of_joining . '+2 year')) }}</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr22">
                  <td class="td211">الموضوع</td>
                  <td class="td212">الدرجة</td>
                  <td class="td213">الوحدة</td>
                  <td class="td214">الموضوع</td>
                  <td class="td215">الدرجة</td>
                  <td class="td216">الوحدة</td>
                </tr>
                @foreach($year_two_degrees as $year_one_degree)
                    <tr class="tr13">
                    <td class="td121">{{ $year_one_degree[0]->subject->arabic_name }}</td>
                    <td class="td122">{{ $year_one_degree[0]->degree }}</td>
                    <td class="td123">{{ $year_one_degree[0]->part }}</td>
                    <td class="td124">{{ $year_one_degree[1]->subject->arabic_name }}</td>
                    <td class="td125">{{ $year_one_degree[1]->degree }}</td>
                    <td class="td126">{{ $year_one_degree[1]->part }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="tr112">
                  <td colspan="6" class="td1111">ناجح من {{ $year_two_attempt }} وبمعدل ({{ $year_two_avg }}%)</td>
                </tr>
              </tfoot>
            </table>
            <table class="table4">
              <thead>
                <tr class="tr41">
                  <th class="th41" colspan="2">درجات الصف الرابع</th>
                  <th class="th42" colspan="4">{{ date('Y', strtotime($user->date_of_joining . '+3 year')) }}-{{ date('Y', strtotime($user->date_of_joining . '+4 year')) }}</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr42">
                  <td class="td411">الموضوع</td>
                  <td class="td412">الدرجة</td>
                  <td class="td413">الوحدة</td>
                  <td class="td414">الموضوع</td>
                  <td class="td415">الدرجة</td>
                  <td class="td416">الوحدة</td>
                </tr>
                @foreach($year_four_degrees as $year_one_degree)
                    <tr class="tr13">
                    <td class="td121">{{ $year_one_degree[0]->subject->arabic_name }}</td>
                    <td class="td122">{{ $year_one_degree[0]->degree }}</td>
                    <td class="td123">{{ $year_one_degree[0]->part }}</td>
                    <td class="td124">{{ $year_one_degree[1]->subject->arabic_name }}</td>
                    <td class="td125">{{ $year_one_degree[1]->degree }}</td>
                    <td class="td126">{{ $year_one_degree[1]->part }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="tr112">
                  <td colspan="6" class="td1111">ناجح من {{ $year_four_attempt }} وبمعدل ({{ $year_four_avg }}%)</td>
                </tr>
              </tfoot>
            </table>
          </div>
          </div>
          <div class="foot">
          <div class="signtures">
            <div class="s1">
              <p class="">{{ $data['hod'] }}</p>
              <p class="">رئيس القسم</p>
            </div>
            <div class="s2">
              <p class="">{{ $data['ur'] }}</p>
              <p class="">مسجل الجامعة</p>
            </div>
            <div class="s3">
              <p class="">{{ $data['pou'] }}</p>
              <p class="">رئيس الجامعة</p>
            </div>
          </div>
          </div>
        </div>
        <div class="back-body"></div>
      </div>
      <br>
      <!-- <a href="#">PRINT</a> -->
    </form>
  </div>

  <script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
    window.onload = function() { window.print(); }
  </script>

  <!-- <script src="DegreeGraduationDocument.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/jquery-3.6.3.min.js"></script>
  <script src="/js/bootstrap.js"></script> -->

</body>

</html>