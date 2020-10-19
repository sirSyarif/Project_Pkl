@extends('template')

@section('title', 'Home')

@section('content')

<!-- HEADER / MASTERHEAD -->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Company Name</div>
            <div class="masthead-heading text-uppercase">Company Tagline or Any</div>
        </div>
    </header>  

<!-- SERVICES -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" style="font-weight: 1000; font-size:2rem;">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3><br>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle bg" style="font-size: 115px" ></i>
                        <i class="fas fa-code fa-stack-1x fa-inverse log"></i>
                    </span>
                    <h4 class="my-3">Framework</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle bg" style="font-size: 115px" ></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse log"></i>
                    </span>
                    <h4 class="my-3">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle bg" style="font-size: 115px" ></i>
                        <i class="fas fa-bolt fa-stack-1x fa-inverse log"></i>
                    </span>
                    <h4 class="my-3">Fast Load</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

<!-- SERVICE 2 -->
    <div class="container-fluid" id="service2">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center" style="margin-top: 100px; margin-bottom:100px;" id="services-img">
                <img src="/images/service.png" alt="" width="400px" height="400px">
            </div>
            <div class="col-lg-6" style="margin-top: 100px; margin-bottom:100px;">
                <div class="typo-light service-text">
                    <h1>Who we are</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolore necessitatibus sint vitae iusto tempore nesciunt, totam ea eveniet, neque quam reprehenderit a nulla officia quis doloremque facere voluptatem ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sunt quibusdam molestiae at nobis asperiores suscipit doloribus, quaerat deleniti fugiat non quo distinctio, corrupti perspiciatis dolorum odio. Voluptates, modi sunt. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores quisquam quas quos accusantium neque perferendis a vel sapiente obcaecati illo? Perspiciatis eum in vitae quaerat soluta, possimus facere consectetur doloremque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, fugit perspiciatis saepe consectetur pariatur sint, sequi perferendis eveniet omnis blanditiis ducimus aspernatur odio quaerat doloribus aliquid vero tempore dolor quibusdam?</p>
                </div>  
                <button class="custom-btn btn-about"><span><a href="/about" style="color: black">Read More</a></span></button>
            </div>
        </div>
    </div>

<!-- PRODUCT SHOT (ONLY 3 PRODUCT SHOWED)-->
    <div class="container-fluid" id="product-shot">
        <div class="text-center">
            <h2 class="section-heading text-uppercase" style="font-weight: 1000; font-size:2rem; padding-bottom:20px;">Featured Products</h2>
        </div>
        <div class="row typo-dark">
            <div class="col-md-4 mt-4">
                <a href="#" class="product-hover"><div class="card profile-card-5">
                    <div class="card-img-block">
                        <img class="card-img-top" src="/images/products/product1.png" width="360px" height="250px" alt="Card image cap">
                    </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Wireless Auodio</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae quos expedita iste asperiores officia a totam consectetur maiores recusandae provident,</p>   
                </div>
                </div></a>
            </div>
            <div class="col-md-4 mt-4">
                <a href="#" class="product-hover"><div class="card profile-card-5">
                    <div class="card-img-block">
                        <img class="card-img-top" src="/images/products/product2.png" width="360px" height="250px" alt="Card image cap">
                    </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Smartphone App</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae quos expedita iste asperiores officia a totam consectetur maiores recusandae provident,</p>   
                </div>
                </div></a>
            </div>
            <div class="col-md-4 mt-4">
                <a href="#" class="product-hover"><div class="card profile-card-5">
                    <div class="card-img-block">
                        <img class="card-img-top" src="/images/products/product3.png" width="360px" height="250px" alt="Card image cap">
                    </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Smartwatch App</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae quos expedita iste asperiores officia a totam consectetur maiores recusandae provident,</p>   
                </div>
                </div></a>
            </div>
        </div>
    </div>

<!-- FAQ -->
    <div class="container-fluid" id="faq">
        <div class="row">
            <div class="col-lg-6">
                <h1  style="padding-bottom: 30px">Frequently Asked Question</h1>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="fa-stack fa-3x">
                            <i class="fas fa-circle bg" style="font-size: 85px; margin-left:10px;"></i>
                            <i class="fas fa-question fa-stack-1x fa-inverse log"></i>
                        </span>
                    </div>
                    <div class="col-lg-10">
                        <h3 style="color: white">What happen if there is any error?</h3>
                        <p style="color: white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam culpa commodi ullam deleniti at iure quo corporis nisi veritatis dicta</p>
                    </div>
                    <div class="col-lg-2" style="padding-top: 30px">
                        <span class="fa-stack fa-3x">
                            <i class="fas fa-circle bg" style="font-size: 85px; margin-left:10px;"></i>
                            <i class="fas fa-question fa-stack-1x fa-inverse log"></i>
                        </span>
                    </div>
                    <div class="col-lg-10" style="padding-top: 30px">
                        <h3 style="color: white">Is there any fee for maintenance?</h3>
                        <p style="color: white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam culpa commodi ullam deleniti at iure quo corporis nisi veritatis dicta</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="margin-top:45px">
                <div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="5000">
                    <div class="carousel-inner row w-100 mx-auto">
                      <div class="carousel-item active">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">What People Say</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi at recusandae nisi maiores velit expedita eveniet tempora dolores sequi ut, fugiat nam nemo eum doloribus eaque consequatur accusantium similique voluptatem!</p>
                            <div class="row" style="margin-left:5px">
                                <img src="/images/testimoni/people.jpeg" class="rounded-circle" alt="" width="70" height="70"> 
                                <div class="collumn" style="margin-left: 10px">
                                    <h4>Jeff Bezos</h4>
                                    <p>Ceo and President of Amazon</p>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">What People Say</h4>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit neque, delectus veniam vel nihil error vero eum maiores provident assumenda reprehenderit ut. Accusamus dolor iusto perferendis, itaque doloremque quae consequatur!.</p>
                            <div class="row" style="margin-left:5px">
                                <img src="/images/testimoni/people2.jpg" class="rounded-circle" alt="" width="70" height="70"> 
                                <div class="collumn" style="margin-left: 10px">
                                    <h4>Bill Gates</h4>
                                    <p>Co-Founder of Microsoft Corporation.</p>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">What People Say</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam qui voluptas aliquam placeat accusamus dicta eligendi sequi, suscipit voluptatibus. Cupiditate deleniti consectetur quae vero minima corporis aliquam, optio dolore commodi?.</p>
                            <div class="row" style="margin-left:5px">
                                <img src="/images/testimoni/people3.jpg" class="rounded-circle" alt="" width="70" height="70"> 
                                <div class="collumn" style="margin-left: 10px">
                                    <h4>John McAfee</h4>
                                    <p>Founder McAfee Associates.</p>
                                </div>
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- GET IN TOUCH -->
    <div class="container-fluid " id="contact-form">
        <h1>Get In Touch</h1>
        <center><p class="col-lg-8 d-flex" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla placeat inventore repudiandae corporis dolor est tenetur odio architecto, dolore impedit. Iure expedita amet iusto illo adipisci voluptatum soluta facere nobis!</p></center>
        <form class="form-inline justify-content-center">
            <input type="text" class="form-control col-lg-3" id="name" placeholder="Enter name" name="name" style="margin-right: 5px; height:50px; margin-top:30px">
            <input type="text" class="form-control col-lg-4" id="pwd2" placeholder="Enter email" name="email" style="height: 50px; margin-top:30px">  
            <button class="btn btn-primary mb-2" style="margin-left: 20px; height:50px; margin-top:35px">Submit</button>
          </form>
        </div>
    </div>
@endsection