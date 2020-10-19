@extends('template')

@section('title', 'About')

@section('content')
    <!-- About Section -->
    <section id="about" class="about-section text-center">
        <div class="container-fluid">
            <div class="text-center mx-auto">
                <h2 class="section-heading text-uppercase" style="font-weight: 1000;padding-top:50px; font-size:2rem; padding-bottom:20px;">About Us</h2>
            </div>
          <img src="/images/bg-masthead.jpg" alt="" class="img-fluid" width="100%">
          <p class="text-wh col-lg-10 d-lg-block mx-auto" style="padding-top: 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </section>
    
  <!-- Projects Section -->
  <section id="projects bg-dark" class="projects-section">
    
  
  <!-- Project Two Row -->
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
            <h1 class="text-black text-center">Our Goals</h1>
              <p class="mb-0 text-black text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, error et obcaecati suscipit expedita in adipisci culpa dicta? Tempora error quidem ducimus rerum sequi eius incidunt repellendus expedita corrupti eveniet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam porro expedita quam repellat animi, alias commodi aliquam reiciendis fugiat sint, ea cumque molestias libero omnis quia? Commodi qui facilis quibusdam!</p>
              <hr class="d-none d-lg-block mb-0 mr-0">
          </div>
          <div class="col-lg-5">
            <img class=" mx-auto" src="/images/01-thumbnail.jpg" alt=""/>
          </div>
      </div>

  </div>
  </section>
  
  <br>
  
  <!-- Team-->
  <section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center mx-auto">
            <h2 class="section-heading text-uppercase" style="font-weight: 1000;padding-top:50px; font-size:2rem; padding-bottom:30px;">Our Teams</h2>
        </div>
        <div class="row ">
          <div class="col-lg-3 ">
              <div class="team-member">
                  <img class="rounded-circle" src="/images/team/1.jpg" alt="" />
                  <h4 class="d-flex justify-content-center">Kay Garland</h4>
                  <p class="text-muted d-flex justify-content-center">Lead Designer</p>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="team-member">
                  <img class="rounded-circle" src="/images/team/2.jpg" alt="" />
                  <h4 class="d-flex justify-content-center">Larry Parker</h4>
                  <p class="text-muted d-flex justify-content-center">Lead Marketer</p>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="team-member">
                  <img class="rounded-circle" src="/images/team/3.jpg" alt="" />
                  <h4 class="d-flex justify-content-center">Diana Petersen</h4>
                  <p class="text-muted d-flex justify-content-center">Lead Developer</p>
              </div>
          </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <img class=" rounded-circle" src="/images/team/1.jpg" alt="" />
                    <h4 class="d-flex justify-content-center">Kay Garland</h4>
                    <p class="text-muted d-flex justify-content-center">Lead Designer</p>
                </div>
            </div>
        </div>
    </div>
  </section>
        
  
  
  
@endsection