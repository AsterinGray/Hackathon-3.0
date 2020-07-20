@extends('layouts.main')

@section('css')
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/slick.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/slick-theme.css')}}" />
@endsection

@section('content')
  <section class="home container-fluid min-vh-100" id="home">
    <div class="home-content row">
      <div class="home-text col-lg-6 col-md-12">
        <img src="assets/img/Hackathon-logo.png" id="hackathon-logo" alt="" />
        <h3>BNCC HACKTHON 3.0</h3>
        <h1>Transform ideas, <wbr>Code Your Solution</h1>
        <p>will be coming at</p>
        <p>11th-13th July 2020</p>
        <div class="home-text-guide">
          <p>Get your guide book here!!</p>
          <button>
            <a
              href="assets/img/Hackathon-logo.png"
              download="Hackathon-logo.png"
              >DOWNLOAD</a
            >
          </button>
        </div>
      </div>
      <img
        src="assets/img/home/1stSection_image-min.png"
        class="col-lg-6 col-md-12"
        alt=""
      />
    </div>
    <div class="home-more-info">
      <p>More Information</p>
      <a href="#about"
        ><img src="assets/img/home/double-arrow.svg" alt=""
      /></a>
    </div>
  </section>
  <section class="about container-fluid row" id="about">
    <img src="assets/img/about/Object1-min.png" id="object1" />
    <div class="about-left col-md-12 col-lg-6">
      <div class="center autoplay lazy">
        <div class="card">
          <img
            src="assets/img/about/carousel/Hackathon-2018-1.jpg"
            alt="Hackathon-2018-1"
            class="carousel-image"
          />
          <div class="card-body carousel-content">
            <p class="card-text">BNCC HACKATHON 1.0</p>
          </div>
        </div>
        <div class="card">
          <img
            src="assets/img/about/carousel/Hackathon-2018-2.jpg"
            alt="Hackathon-2018-2"
            class="carousel-image"
          />
          <div class="card-body carousel-content">
            <p class="card-text">BNCC HACKATHON 1.0</p>
          </div>
        </div>
        <div class="card">
          <img
            src="assets/img/about/carousel/Hackathon-2018-3.jpg"
            alt="Hackathon-2018-3"
            class="carousel-image"
          />
          <div class="card-body carousel-content">
            <p class="card-text">BNCC HACKATHON 1.0</p>
          </div>
        </div>
        <div class="card">
          <img
            src="assets/img/about/carousel/Hackathon-2019-1.jpg"
            alt="Hackathon-2019-1"
            class="carousel-image"
          />
          <div class="card-body carousel-content">
            <p class="card-text">BNCC HACKATHON 2.0</p>
          </div>
        </div>
        <div class="card">
          <img
            src="assets/img/about/carousel/Hackathon-2019-2.jpg"
            alt="Hackathon-2019-2"
            class="carousel-image"
          />
          <div class="card-body carousel-content">
            <p class="card-text">BNCC HACKATHON 2.0</p>
          </div>
        </div>
        <div class="card">
          <img
            src="assets/img/about/carousel/Hackathon-2019-3.jpg"
            alt="Hackathon-2019-3"
            class="carousel-image"
          />
          <div class="card-body carousel-content">
            <p class="card-text">BNCC HACKATHON 2.0</p>
          </div>
        </div>
      </div>
    </div>
    <div class="about-right col-md-12 col-lg-6">
      <h1 class="heading">About BNCC Hackathon</h1>
      <p class="paragraf">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Sit libero illum consequatur quod fugiat iure, inventore, 
        magni quisquam tempora quas perferendis ea cumque unde porro eius, 
        iusto id quo numquam. Tempora cupiditate voluptatibus natus, 
        quam rerum voluptates animi mollitia quasi commodi! 
        Quidem quaerat ullam ab omnis rerum quod, iusto perspiciatis.
      </p>
    </div>
  </section>
  <section class="why" id="why">
    <h1 class="heading">Why Should You Join?</h1>
    <div class="why-content">
      <div class="why-left">
        <div class="d-flex align-items-center h-100">
          <img
            id="why-active-image" class="why-active-image"
            src="assets/img/why/Icon_1.svg"
            alt="Networking"
          />
          <div class="why-left-container">
            <h2 id="why-active-heading">Networking</h2>
            <p id="why-active-par">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim,
              itaque molestias eum dignissimos voluptatem quae?
            </p>
          </div>
        </div>
      </div>
      <div class="why-right d-flex justify-content-around">
        <div class="why-card card" onclick="replace(this)">
          <img
            class="why-right-img flex-column"
            src="assets/img/why/Icon_2.svg"
            alt="Mentoring"
          />
          <div class="why-card-content card-body">
            <h5 class="why-card-content-heading">Mentoring</h5>
            <div class="why-card-content-par-container">
              <p class="why-card-content-par">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut,
                blanditiis!<br />
              </p>
            </div>
            <span class="click-to-enlarge">Click to enlarge</span>
          </div>
        </div>
        <div class="why-card card" onclick="replace(this)">
          <img
            class="why-right-img flex-column"
            src="assets/img/why/Icon_3.svg"
            alt="Seminar"
          />
          <div class="why-card-content card-body">
            <h5 class="why-card-content-heading">Seminar</h5>
            <div class="why-card-content-par-container">
              <p class="why-card-content-par">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut,
                blanditiis!<br />
              </p>
            </div>
            <span class="click-to-enlarge">Click to enlarge</span>
          </div>
        </div>
        <div class="why-card card" onclick="replace(this)">
          <img
            class="why-right-img flex-column"
            src="assets/img/why/Icon_4.svg"
            alt="Job Interview"
          />
          <div class="why-card-content card-body">
            <h5 class="why-card-content-heading">Job Interview</h5>
            <div class="why-card-content-par-container">
              <p class="why-card-content-par">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut,
                blanditiis!<br />
              </p>
            </div>
            <span>Click to enlarge</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="faq" id="faq">
    <h1 class="heading">FAQ</h1>
    <div class="faq-content row justify-content-center">
      <div class="faq-left col-md-12 col-lg-6 w-100">
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
      </div>
      <div class="faq-right col-md-12 col-lg-6 w-100">
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
        <div class="faq-content">
          <div
            class="faq-question justify-content-between align-items-center"
          >
            <div>Lorem ipsum dolor sit amet consectetur adipisicing ?</div>
            <div
              class="circle d-flex justify-content-center align-items-center"
            >
              <div class="horizontal position-absolute"></div>
              <div class="vertical position-absolute"></div>
            </div>
          </div>
          <div class="faq-ans">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            quas officiis! Veritatis dolorem molestias illo, eaque beatae
            accusantium odio! Velit?
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="timeline">
    <img src="assets/img/timeline/Object2.png" alt="" id="object3" />
    <img src="assets/img/timeline/Object3.png" alt="" id="object4" />
    <h1 class="my-5">Timeline</h1>
    <div
      class="timeline-wrapper d-flex row justify-content-center align-items-center flex-column my-5"
    >
      <div class="timeline-icons d-flex justify-content-around my-3 w-100">
        <div>
          <img src="assets/img/timeline/open-registration.svg" alt="" />
        </div>
        <div>
          <img src="assets/img/timeline/close-registration.svg" alt="" />
        </div>
        <div>
          <img src="assets/img/timeline/technical-meeting.svg" alt="" />
        </div>
        <div>
          <img src="assets/img/timeline/competition-day.svg" alt="" />
        </div>
      </div>
      <div class="timeline-path d-flex row justify-content-between">
        <div class="timeline-path-line">
          <span>30 days</span>
          <img src="assets/img/timeline/path.svg" alt="" />
        </div>
        <div class="timeline-path-line">
          <span>2 days</span>
          <img src="assets/img/timeline/path.svg" alt="" />
        </div>
        <div class="timeline-path-line">
          <span>5 days</span>
          <img src="assets/img/timeline/path.svg" alt="" />
        </div>
      </div>
      <div class="timeline-line"></div>
      <div class="timeline-dot row d-flex justify-content-between">
        <div id="dot-active"></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="timeline-contents d-flex justify-content-around w-100 my-3">
        <div class="timeline-content">
          <span>Open Registration</span>
          <span>8 May 2020</span>
        </div>
        <div class="timeline-content">
          <span>Close Registration</span>
          <span>8 June 2020</span>
        </div>
        <div class="timeline-content">
          <span>Technical Meeting</span>
          <span>10 June 2020</span>
        </div>
        <div class="timeline-content">
          <span>Competition Day</span>
          <span>15-16 June 2020</span>
        </div>
      </div>
    </div>
  </section>
  <section class="sponsor" id="sponsor">
    <div class="sponsor-table col-lg-12 col-md-12 mt-5">
      <div class="sponsor-table-head"><h1>Sponsor</h1></div>
      <div class="sponsor-table-content">
        <div class="sponsor-table-subhead"><h1>Platinum Sponsor</h1></div>
        <div class="sponsor-img platinum">
          <img src="assets/img/sponsor/sponsors.jpg" alt="" />
        </div>
        <div class="sponsor-table-subhead">
          <h1>Gold Sponsor</h1>
        </div>
        <div class="sponsor-img gold">
          <img src="assets/img/sponsor/sponsors.jpg" alt="" />
          <img src="assets/img/sponsor/sponsors.jpg" alt="" />
          <img src="assets/img/sponsor/sponsors.jpg" alt="" />
        </div>
        <div class="sponsor-table-subhead">
          <h1>Silver Sponsor</h1>
        </div>
        <div class="sponsor-img silver">
          <div class="sponsor-img">
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
          </div>
          <div class="sponsor-img">
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="sponsor-table col-lg-12 col-md-12">
      <div class="sponsor-table-head"><h1>Media Partner</h1></div>
      <div class="sponsor-table-content">
        <div class="sponsor-img">
          <div class="sponsor-img">
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
          </div>
          <div class="sponsor-img">
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
          </div>
          <div class="sponsor-img">   
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
              <img src="assets/img/sponsor/sponsors.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact" id="contact">
    <div class="location col-lg-7 col-md-12">
      <h2>Location</h2>
      <iframe
        class="col-lg-12 col-md-12"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4551138837364!2d106.78082431485436!3d-6.203537995509112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6c4a8e09f5d%3A0x29720d62d8b976c5!2sBina%20Nusantara%20Computer%20Club!5e0!3m2!1sen!2sid!4v1585368680586!5m2!1sen!2sid"
        width="700"
        height="450"
        frameborder="0"
        style="border: 0;"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
    </div>
    <div class="contact-box col-lg-5 col-md-12">
      <h2>Contact</h2>
      <form action="https://formspree.io/xdolqbda" method="POST">
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            placeholder="Name"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="Email"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            placeholder="Subject"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            placeholder="Your Message"
            required
          />
        </div>
        <div class="form_submit">
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </section>
  <footer class="footer vh-30 d-flex flex-column">
      <div class="socmed py-3">
          <a href="" class="socmed-item">
              <img src="assets/img/footer/line.svg" alt="">
              <span>@joy0117</span>
          </a>
          <a href="" class="socmed-item">
              <img src="assets/img/footer/mail.svg" alt="">
              <span>technoevent@bncc.net</span>
          <a href="" class="socmed-item">
              <img src="assets/img/footer/facebook.svg" alt="">
              <span>Bina Nusantara Computer Club</span>
          </a>
          <a href="" class="socmed-item">
              <img src="assets/img/footer/instagram.svg" alt="">
              <span>technoeventbncc</span>
          </a>
      </div>
      <div class="foot vh-20 d-flex align-items-center justify-content-between">
          <span class="foot-item">
              <span>Powered By</span>
              <img src="assets/img/footer/BINUS_LOGO.png" alt="">
          </span>
          <span class="foot-copyright">&copy; 2020 Bina Nusantara Computer Club, All right Reserved</span>
          <span class="foot-item">
              <span>Organized By</span>
              <img id="bncc-logo" src="assets/img/footer/BNCC_LOGO.png" alt="">
          </span>
      </div>
      <div class="copyright">
        &copy; 2020 Bina Nusantara Computer Club, All right Reserved
      </div>
  </footer>
@endsection

@section('script')
  <script src="{{asset('assets/lib/bootstrap/js/slick.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
@endsection