<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta type="author" content="Adam">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" />
  <title>SRMS</title>

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
  top: 780px;
  width: 800px;
  padding: 40px 20px;
  margin: 0 0 100px 0;
  transform: translate(-50%, -50%);
  background: #00001f;
  box-sizing: border-box;
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
}

.head {
  width: 100%;
  height: 10%;
}

.head .p {
  position: relative;
  top: 0;
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
  font-size: 17px;
  font-weight: 600;
}

.p1 {
  bottom: 5px;
}

.p2 {
  bottom: 15px;
  font-size: 14px;
}

.p3 {
  bottom: 25px;
}

.head .img {
  position: relative;
  right: 0;
  width: 45%;
  height: 100%;
  display: inline-block;
  margin-left: 32px;
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
  padding-left: 5px;
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
  padding: 0;
}

.f1,
.f2 {
  display: inline-block;
  font-weight: 700;
}

.f1 {
  width: 100px;
}

.f2 {
  position: relative;
  left: 145px;
}

.f3 {
  position: relative;
  font-weight: 700;
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
  width: 137px;
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
  width: 453px;
  margin:0px;
}

.f4w {
  font-size: 22px;
}

.f13w {
  font-size: 14.5px;
}

.f15 {
  position: relative;
  top: 20px;
  left: 100%;
  transform: translate(-50%);
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
  top:17.5px;
  width: 100%;
  height: 45%;
  padding: 0 5px;
}

.divt1,
.divt2 {
  display: inline-block;
  position: relative;
  height: 100%;
  width: 48.5%;
}

.divt2 {
  left: 10px;
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

.tr111{display:none;}

.second-body * {
  border: black solid 1px;
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
  top:30px;
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
  left: 130px;
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
  margin-top: 35px;
  margin-left: 42.5%;
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


  
  </style>
</head>

<body>

 

 
  
 
<div class="">
  <form>
    <div class="border">
      <div class="paper">
        <div class="head">
          <div class="p">
            <p class="p1">Republic of Iraq</p>
            <p class="p2">Ministry of Higher Education and Scientific Research</p>
            <p class="p3">University of Technology - Baghdad</p>
          </div>
          <div class="img">
            <img src="{{ asset('storage/images/u.jpg') }}" alt="error" class="img1">
            <img src="{{ asset('storage/images/b.png') }}" alt="error" class="img2">
            <img src="{{ asset('storage/images/d.jpg') }}" alt="error" class="img3">
          </div>
        </div>
        <div class="body">
          <div class="first-body">
          <div class="firstwrite">
            <div class="fp1">
              <p class="f1">No. : {{ $user->id }}</p>
              <p class="f2">Transcript Certificate of Graduation</p>
            </div>
            <div class="fp2">
              <p class="f3">date: {{ $date }}</p>
            </div>
            <div class="fp3">
              <p class="f4">Name:</p>
              <p class="f4w">{{ $user->name }}</p>
            </div>
            <div class="fp4">
              <p class="f5">Date & Place of Birth:</p>
              <p class="f5w">{{ date('Y', strtotime($user->date_of_birth)) }}/ {{ $user->origin }}</p>
            </div>
            <div class="fp5">
              <p class="f6">Nationality:</p>
              <p class="f6w">{{ $user->country }}</p>
            </div>
            <div class="fp6">
              <p class="f7">Department:</p>
              <p class="f7w">{{ $user-> department}}</p>
            </div>
            <div class="fp7">
              <p class="f8">Degree:</p>
              <p class="f8w">{{ $grade }}</p>
            </div>
            <div class="fp8">
              <p class="f9">Grade:</p>
              <p class="f9w">B.Sc. in {{ $user->branch }} - Day Program</p>
            </div>
            <div class="fp9">
              <p class="f10">First Enrollment:</p>
              <p class="f10w">{{ date('Y', strtotime($user->date_of_joining)) }}-{{ date('Y', strtotime($user->date_of_joining  . ' +1 year')) }}</p>
            </div>
            <div class="fp10">
              <p class="f11">Average:</p>
              <p class="f11w">({{ $total_avg }}%)</p>
            </div>
            <div class="fp11">
              <p class="f12">Graduation Date:</p>
              <p class="f12w">{{ date('d-m-Y', strtotime($user->date_of_graduation)) }}</p>
            </div>
            <div class="fp12">
              <p class="f13">Rank of Graduation:</p>
              <p class="f13w">The({{ $rank }})Out of({{ $total_students }}) graduates in his specialization for 1st and 2nd attempts.</p>
            </div>
            <div class="fp13">
              <p class="f14">Noting:</p>
              <p class="f14w">that the average of the graduate who ranked the first is ({{ $first_total_avg }}%)</p>
            </div>
            <div class="fp14">
              <p class="f15">Academic Record</p>
            </div>
          </div>
          <div class="faceimg"><img src="{{ $image_url }}" alt="error" id="img"></div>
          </div>
          <div class="second-body">
          <div class="divt1">
            <table class="table1">
              <thead>
                <tr class="tr11">
                  <th class="th11" colspan="2">First Year</th>
                  <th class="th12" colspan="4">{{ date('Y', strtotime($user->date_of_joining)) }}-{{ date('Y', strtotime($user->date_of_joining . '+1 year')) }}</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr12">
                  <td class="td111">Subject</td>
                  <td class="td112">Mark</td>
                  <td class="td113">Unit</td>
                  <td class="td114">Subject</td>
                  <td class="td115">Mark</td>
                  <td class="td116">Unit</td>
                </tr>
                @foreach($year_one_degrees as $year_one_degree)
                    <tr class="tr13">
                    <td class="td121">{{ $year_one_degree[0]->subject->name }}</td>
                    <td class="td122">{{ $year_one_degree[0]->degree }}</td>
                    <td class="td123">{{ $year_one_degree[0]->part }}</td>
                    <td class="td124">{{ $year_one_degree[1]->subject->name }}</td>
                    <td class="td125">{{ $year_one_degree[1]->degree }}</td>
                    <td class="td126">{{ $year_one_degree[1]->part }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="tr112">
                  <td colspan="6" class="td1111">Passed in {{ $year_one_attempt }} attempt with grade of medium ({{ $year_one_avg }}%)</td>
                </tr>
              </tfoot>
            </table>
            <table class="table3">
              <thead>
                <tr class="tr31">
                  <th class="th31" colspan="2">Third Year</th>
                  <th class="th32" colspan="4">{{ date('Y', strtotime($user->date_of_joining . '+2 year')) }}-{{ date('Y', strtotime($user->date_of_joining . '+3 year')) }}</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr32">
                  <td class="td311">Subject</td>
                  <td class="td312">Mark</td>
                  <td class="td313">Unit</td>
                  <td class="td314">Subject</td>
                  <td class="td315">Mark</td>
                  <td class="td316">Unit</td>
                </tr>
                @foreach($year_three_degrees as $year_one_degree)
                    <tr class="tr13">
                    <td class="td121">{{ $year_one_degree[0]->subject->name }}</td>
                    <td class="td122">{{ $year_one_degree[0]->degree }}</td>
                    <td class="td123">{{ $year_one_degree[0]->part }}</td>
                    <td class="td124">{{ $year_one_degree[1]->subject->name }}</td>
                    <td class="td125">{{ $year_one_degree[1]->degree }}</td>
                    <td class="td126">{{ $year_one_degree[1]->part }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="tr311">
                  <td colspan="6" class="td3111">Passed in {{ $year_two_attempt }} attempt with grade of medium ({{ $year_two_avg }}%)</td>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="divt2">
            <table class="table2">
              <thead>
                <tr class="tr21">
                  <th class="th21" colspan="2">Second Year</th>
                  <th class="th22" colspan="4">{{ date('Y', strtotime($user->date_of_joining . '+1 year')) }}-{{ date('Y', strtotime($user->date_of_joining . '+2 year')) }}</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr22">
                  <td class="td211">Subject</td>
                  <td class="td212">Mark</td>
                  <td class="td213">Unit</td>
                  <td class="td214">Subject</td>
                  <td class="td215">Mark</td>
                  <td class="td216">Unit</td>
                </tr>
                @foreach($year_two_degrees as $year_one_degree)
                    <tr class="tr13">
                    <td class="td121">{{ $year_one_degree[0]->subject->name }}</td>
                    <td class="td122">{{ $year_one_degree[0]->degree }}</td>
                    <td class="td123">{{ $year_one_degree[0]->part }}</td>
                    <td class="td124">{{ $year_one_degree[1]->subject->name }}</td>
                    <td class="td125">{{ $year_one_degree[1]->degree }}</td>
                    <td class="td126">{{ $year_one_degree[1]->part }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="tr211">
                  <td colspan="6" class="td2111">Passed in {{ $year_three_attempt }} attempt with grade of medium ({{ $year_three_avg }}%)</td>
                </tr>
              </tfoot>
            </table>
            <table class="table4">
              <thead>
                <tr class="tr41">
                  <th class="th41" colspan="2">Fourth Year</th>
                  <th class="th42" colspan="4">{{ date('Y', strtotime($user->date_of_joining . '+3 year')) }}-{{ date('Y', strtotime($user->date_of_joining . '+4 year')) }}</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr42">
                  <td class="td411">Subject</td>
                  <td class="td412">Mark</td>
                  <td class="td413">Unit</td>
                  <td class="td414">Subject</td>
                  <td class="td415">Mark</td>
                  <td class="td416">Unit</td>
                </tr>
                @foreach($year_four_degrees as $year_one_degree)
                    <tr class="tr13">
                    <td class="td121">{{ $year_one_degree[0]->subject->name }}</td>
                    <td class="td122">{{ $year_one_degree[0]->degree }}</td>
                    <td class="td123">{{ $year_one_degree[0]->part }}</td>
                    <td class="td124">{{ $year_one_degree[1]->subject->name }}</td>
                    <td class="td125">{{ $year_one_degree[1]->degree }}</td>
                    <td class="td126">{{ $year_one_degree[1]->part }}</td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="tr410">
                  <td colspan="6" class="td4111">Passed in {{ $year_four_attempt }} attempt with grade of medium ({{ $year_four_avg }}%)</td>
                </tr>
              </tfoot>
            </table>
          </div>
          </div>
          <div class="foot">
          <div class="signtures">
            <div class="s1">
              <p class="ps11">{{ $data['hod'] }}</p>
              <p class="ps12">Head of Department</p>
            </div>
            <div class="s2">
              <p class="ps21">{{ $data['ur'] }}</p>
              <p class="ps22">University Registrar</p>
            </div>
            <div class="s3">
              <p class="ps31">{{ $data['pou'] }}</p>
              <p class="ps32">President of University</p>
            </div>
          </div>
          </div>
        </div>
        <div class="back-body"></div>
      </div>
    </div>
    <br>
   
  </form>
</div>

  <script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
    // on load print
    window.onload = function() { window.print(); }
  </script>



</body>

</html>