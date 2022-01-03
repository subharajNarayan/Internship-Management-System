@include('layout.header')

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/about/advance.png')}}" alt="communication" width="100%" height="350px" >
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/about/intern.jpg')}}" alt="world" width="100%" height="350px">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/about/softmaker_office.jpg')}}" alt="networld" width="100%" height="350px">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section>
  <div class="container">
    <div class="section-header">
        <div class="hs-page-width-module">
          <h2 class="section-header__header ">The Story Behind the Interns</h2>
          <p>An <strong>internship</strong> is a period of work experience <br>Internships is for professional careers are similar in some ways, but not as rigorous as apprenticeships for professions, trade, and vocational jobs.The lack of standardization and oversight leaves the term <strong>"internship"</strong> open to broad interpretation. Interns may be high for<strong style="text-decoration: underline;">school students, college and university students, or post-graduate adults.</strong> These positions may be paid or unpaid and are temporary.</p>
          </div>
      </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <img src="{{asset('images/about/Women.jpg')}}" width="100%;" alt="">
      </div>
      <div class="col-md-5" style="background-color: #F8F9F9;">
        <div class="intern-body" style="padding-top: 17px;">
          <h4 class="text-center">Beneficial Intership</h4>
          <ol class="pt-3">
            <li>A chance to develop your knowledge and skills in a particular field or industry</li>
            <li class="pt-1">Gaining valuable work experience to set apart from other candidates</li>
            <li class="pt-1">Internships is for professional careers which are similar in some ways.</li>
            <li class="pt-1">Volunteering is an excellent way to build your experience.</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-4">
  <div class="container"><hr>
    <h4 style="font-family: 'Rajdhani', sans-serif;">“The Internship is an incredible nonprofit organization that is addressing student for interns and working towards ending them.” – The Subharaj Post</h4>
    <p><strong>In a Nutshell: &nbsp;</strong> We fight extreme for student who needed interns.</p>
  </div>
</section>

<section>
  <div class="container"><hr>
      <div class="media-internship">
        <h4>What Interns Do &nbsp;<i class="fa fa-check" style="color: #154360;"></i></h4>
        <p style="font-size: 17px;">Interns are usually college or graduate students. While interns are usually older students, like juniors or seniors, can seek out internships as well. Having several internships while in college can be very impressive to potential employers. <br><br>The daily tasks of an intern can vary widely, even within the same industry. It is largely dependent on the company itself. In some internships, you may do mainly administrative tasks or run errands. But in others, you will be an important part of the team, making substantial contributions to the company. </p>
      </div> 
  </div>
</section>
    <div class='container'>
      <span class='bottom_shadow'>
        <img src='https://borgenproject.org/wp-content/themes/choices/images/layout/big_shadow.png'  title='' alt='' />
      </span>
    </div>

<section class="container pt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="body">
          <img src="{{asset('images/about/interntypes.jpg')}}" width="250;" height="220;" alt="" style="margin-left: 49px;">
        </div>
        <div class="media-body pt-2">
          <h6 style="text-align: center;">Internship Types</h6>
          <p class="text-center pt-0" style=" padding: 30px;">Recognizing the Value of Internship</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="body">
          <img src="{{asset('images/about/internshiptips.jpg')}}" width="250;" height="220;" alt="" class="img-responsive" style="margin-left: 49px;">
        </div>
        <div class="media-body pt-2">
          <h6 style="text-align: center;">Tips For Interns</h6>
          <p class="text-center pt-0" style=" padding: 30px;">Don't Let Misinformation Hold You Back in Finding the Right Internship</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="body">
          <img src="{{asset('images/about/exploration.jpg')}}" width="250;" height="220;" alt="" style="margin-left: 49px;">
        </div>
        <div class="media-body pt-2">
          <h6 style="text-align: center;">Intern Exploration</h6>
          <p class="text-center pt-0" style=" padding: 30px;">How Experiential Education Can Help You to Get A Job</p>
        </div>
      </div> 
  </div>
</section>

@include('layout.footer')