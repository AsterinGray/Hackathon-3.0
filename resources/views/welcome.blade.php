@extends('layout.main')

@section('css')
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/slick.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/slick-theme.css')}}" />
@endsection

@section('content')
  <section class="home container-fluid min-vh-100" id="home">
      <div class="home-content row">
        <div class="home-text col-lg-6 col-md-12">
          <img src="{{asset('assets/img/Hackathon-logo.png')}}" id="hackathon-logo" alt="Technoscape Hackathon Logo" />
          <h3>BNCC HACKTHON 3.0</h3>
          <h1>Transform ideas, <wbr>Code Your Solution</h1>
          <p>will be coming at</p>
          <p>10th - 12th October 2020</p>
          <!-- <div class="home-text-guide">
            <p>Get your guide book here!!</p>
            <button>
              <a
                href="{{asset('assets/img/Hackathon-logo.png')}}"
                download="Hackathon- logo.png"
                >DOWNLOAD</a
              >
            </button>
          </div> -->
        </div>
        <img
          src="{{asset('assets/img/home/1stSection_image-min.png')}}"
          class="col-lg-6 col-md-12"
          id="hackathon-laptop"
          alt="Laptop Coding Illustration"
        />
      </div>
      <div class="home-more-info">
        <p>More Information</p>
        <a href="#about">
          <img src="{{asset('assets/img/home/double-arrow.svg')}}" alt="arrow icon">
        </a>
      </div>
    </section>
    <section class="about container-fluid" id="about">
      <img src="{{asset('assets/img/about/Object1-min.png')}}" id="object1" />
      <div class="about-left col-md-12 col-lg-7">
        <div class="center autoplay lazy">
          <div class="card">
            <img
              src="{{asset('assets/img/about/carousel/Hackathon-2018-1.jpg')}}"
              alt="Hackathon-2018-1"
              class="carousel-image"
            />
            <div class="card-body carousel-content">
              <p class="card-text">BNCC HACKATHON 1.0</p>
            </div>
          </div>
          <div class="card">
            <img
              src="{{asset('assets/img/about/carousel/Hackathon-2018-2.jpg')}}"
              alt="Hackathon-2018-2"
              class="carousel-image"
            />
            <div class="card-body carousel-content">
              <p class="card-text">BNCC HACKATHON 1.0</p>
            </div>
          </div>
          <div class="card">
            <img
              src="{{asset('assets/img/about/carousel/Hackathon-2018-3.jpg')}}"
              alt="Hackathon-2018-3"
              class="carousel-image"
            />
            <div class="card-body carousel-content">
              <p class="card-text">BNCC HACKATHON 1.0</p>
            </div>
          </div>
          <div class="card">
            <img
              src="{{asset('assets/img/about/carousel/Hackathon-2019-1.jpg')}}"
              alt="Hackathon-2019-1"
              class="carousel-image"
            />
            <div class="card-body carousel-content">
              <p class="card-text">BNCC HACKATHON 2.0</p>
            </div>
          </div>
          <div class="card">
            <img
              src="{{asset('assets/img/about/carousel/Hackathon-2019-2.jpg')}}"
              alt="Hackathon-2019-2"
              class="carousel-image"
            />
            <div class="card-body carousel-content">
              <p class="card-text">BNCC HACKATHON 2.0</p>
            </div>
          </div>
          <div class="card">
            <img
              src="{{asset('assets/img/about/carousel/Hackathon-2019-3.jpg')}}"
              alt="Hackathon-2019-3"
              class="carousel-image"
            />
            <div class="card-body carousel-content">
              <p class="card-text">BNCC HACKATHON 2.0</p>
            </div>
          </div>
        </div>
      </div>
      <div class="about-right col-md-12 col-lg-5">
        <h1 class="heading">About BNCC Hackathon</h1>
        <p class="paragraf">
          Hackathon merupakan lomba coding selama 48 jam di mana setiap tim ditantang memberikan solusi atas suatu permasalahan dengan menghasilkan produk berupa aplikasi ataupun website.
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
              src="{{asset('assets/img/why/Icon_1.svg')}}"
              alt="Networking"
            />
            <div class="why-left-container">
              <h2 id="why-active-heading">Networking</h2>
              <p id="why-active-par">
                 Peserta akan mendapatkan kesempatan untuk networking dengan peserta lain, mentor, dan juri Hackathon 3.0.
              </p>
            </div>
          </div>
        </div>
        <div class="why-right d-flex justify-content-around">
          <div class="why-card card" onclick="replace(this)">
            <img
              class="why-right-img flex-column"
              src="{{asset('assets/img/why/Icon_4.svg')}}"
              alt="Mentoring"
            />
            <div class="why-card-content card-body">
              <div class="why-card-content-heading">Mentoring with Experts</div>
              <div class="why-card-content-par-container">
                <div class="why-card-content-par">
                  Peserta akan mendapatkan kesempatan untuk mentoring bisnis, desain, dan teknologi secara langsung dari orang-orang yang berpengalaman di bidang IT yang akan memberikan input mengenai project peserta.
                </div>
              </div>
              <!-- <span class="click-to-enlarge">Click to enlarge</span> -->
            </div>
          </div>
          <div class="why-card card" onclick="replace(this)">
            <img
              class="why-right-img flex-column"
              src="{{asset('assets/img/why/Icon_3.svg')}}"
              alt="Seminar"
            />
            <div class="why-card-content card-body">
              <div class="why-card-content-heading">Chance of Job Interview</div>
              <div class="why-card-content-par-container">
                <div class="why-card-content-par">
                  CV dari para pemenang Hackathon 3.0 akan disalurkan ke perusahaan sponsor dari Hackathon 3.0.
                </div>
              </div>
              <!-- <span class="click-to-enlarge">Click to enlarge</span> -->
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
              <div>Apa itu Hackathon 3.0 ?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Hackathon 3.0 adalah event Hackathon ke-3 yang akan diadakan oleh BNCC. Di event ini, peserta akan ditantang untuk menyelesaikan case-case yang berhubungan dengan dunia IT dalam waktu 48 jam dalam bentuk website atau aplikasi.
            </div>
          </div>
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Apakah Hackathon 3.0 akan diadakan secara online?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Ya, Hackathon 3.0 ini akan diadakan full secara online. 
            </div>
          </div>
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Apakah Hackathon 3.0 dipungut biaya?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Event Hackathon 3.0  ini dipungut biaya dan memiliki 3 paket:
              <ol type="A">
                <li>Paket 1: Early Bird (24 September - 15 September 2020) dikenakan biaya Rp 60.000/ tim</li>
                <li>Paket 2: Normal Price Binusian (16 September - 1 Oktober 2020) dikenakan biaya Rp 80.000/ tim</li>
                <li>Paket 3: Normal Price Umum (16 September - 1 Oktober 2020) dikenakan biaya Rp. 100.000/ tim</li>
              </ol>
            </div>
          </div>
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Apa saja hal yang diperlukan untuk mendaftar sebagai peserta?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Peserta harus melakukan registrasi tim di website hackathon.bncc.net, lalu mensubmit dokumen dokumen yang diperlukan seperti KTP, CV, dan Kartu Tanda Mahasiswa(Khusus untuk Binusian).
            </div>
          </div>
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Apa yang saya dapatkan jika memenangkan kompetisi ini?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Bila memenangkan kompetisi ini akan mendapatkan uang dan sertifikat dengan rincian:
              <ol type="A">
                <li>Juara 1 mendapat uang senilai Rp 4.000.000 + Sertifikat</li>
                <li>Juara 2 mendapat uang senilai Rp 2.000.000 + Sertifikat</li>
                <li>Juara 3 mendapat uang senilai Rp 1.000.000 + Sertifikat</li>
              </ol>
            </div>
          </div>
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Apa saja persyaratan untuk menjadi peserta dalam Hackathon 3.0 ini?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Untuk mengikuti Hackathon 3.0 ini, peserta dapat tim yang maksimal terdiri dari 3-4 orang dengan rentang usia 18-25 tahun. Setiap peserta diwajibkan untuk mengirimkan CV pada dashboard masing-masing tim. Setiap tim juga diwajibkan sudah melakukan pembayaran biaya lomba bila berminat mengikuti Hackathon 3.0 ini.
            </div>
          </div>
        </div>
        <div class="faq-right col-md-12 col-lg-6 w-100">
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Apakah peserta diwajibkan untuk membentuk tim saat mengikuti Hackathon 3.0?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Peserta tidak diwajibkan untuk membentuk tim dan diperbolehkan untuk mengikuti event ini secara individu bila berminat. 
            </div>
          </div>
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Apakah peserta diperbolehkan untuk terdaftar di 2 tim?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Peserta tidak diperbolehkan mendaftar di lebih dari satu tim.
            </div>
          </div>
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Bagaimana jika saat event ini berlangsung, saya ada kepentingan lain yang harus dilakukan?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Bila ada kepentingan lain saat event ini berlangsung, maka peserta wajib untuk memberikan info kepada panitia minimal H-2 dari event.
            </div>
          </div>
          <div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Kapan pendaftaran ditutup?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Pendaftaran ditutup pada 1 Oktober 2020, jam 21:00 WIB.
            </div>
          </div><div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Bagaimana jika peserta sudah menyiapkan sebagian source code sebelum event dimulai?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Menyiapkan source code sebelum event dimulai, melanjutkan dan melombakan lagi project yang pernah dibuat merupakan pelanggaran. Apabila peserta terbukti melakukan pelanggaran maka akan didiskualifikasi.
            </div>
          </div><div class="faq-content">
            <div
              class="faq-question justify-content-between align-items-center"
            >
              <div>Bila saya tidak memiliki basic coding maupun design, apakah saya masih boleh ikut?</div>
              <div
                class="circle d-flex justify-content-center align-items-center"
              >
                <div class="horizontal position-absolute"></div>
                <div class="vertical position-absolute"></div>
              </div>
            </div>
            <div class="faq-ans">
              Peserta yang tidak memiliki basic coding tetap diperbolehkan mengikuti Hackathon 3.0. Namun, nantinya akan ada seleksi untuk menentukan tim mana yang bisa berpartisipasi di hari H Hackathon.
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="timeline" id="timeline">
      <img src="{{asset('assets/img/timeline/Object2.png')}}" alt="Decoration" id="object3" />
      <img src="{{asset('assets/img/timeline/Object3.png')}}" alt="Decoration" id="object4" />
      <h1 class="my-5">Timeline</h1>
      <div
        class="timeline-wrapper d-flex row justify-content-center align-items-center flex-column my-5"
      >
        <div class="timeline-icons d-flex justify-content-around my-3 w-100">
          <div>
            <img src="{{asset('assets/img/timeline/open-registration.svg')}}" alt="Open Registration Icon" />
          </div>
          <div>
            <img src="{{asset('assets/img/timeline/close-registration.svg')}}" alt="Close Registration Icon" />
          </div>
          <div>
            <img src="{{asset('assets/img/timeline/technical-meeting.svg')}}" alt="Technical Meeting Icon" />
          </div>
          <div>
            <img src="{{asset('assets/img/timeline/competition-day.svg')}}" alt="Competition Day Icon" />
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
            <span>24 August 2020</span>
          </div>
          <div class="timeline-content">
            <span>Close Registration</span>
            <span>1 October 2020</span>
          </div>
          <div class="timeline-content">
            <span>Technical Meeting</span>
            <span>7 Ocotober 2020</span>
          </div>
          <div class="timeline-content">
            <span>Competition Day</span>
            <span>10 - 12 October 2020</span>
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
            <img src="{{asset('assets/img/sponsor/tiket.png')}}" class="w-100" alt="Tiket.com Logo" />
          </div>
          <!-- <div class="sponsor-table-subhead">
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
          </div> -->
        </div>
      </div>
      <div class="sponsor-table col-lg-12 col-md-12">
        <div class="sponsor-table-head"><h1>Media Partner</h1></div>
        <div class="sponsor-table-content">
          <div class="sponsor-img">
            <div class="sponsor-img">
                <img src="{{asset('assets/img/sponsor/Dailysocial.png')}}" alt="Dailysocial.id Logo" />
                <img src="{{asset('assets/img/sponsor/Geekhunter.png')}}" alt="Geekhunter Logo" />
                <img src="{{asset('assets/img/sponsor/Himatif.png')}}" alt="Himatif Logo" />
            </div>
            <div class="sponsor-img">
                <img src="{{asset('assets/img/sponsor/HMTI.png')}}" alt="HMTI Logo" />
                <img src="{{asset('assets/img/sponsor/Karir.com.png')}}" alt="Karir.com Logo" />
                <img src="{{asset('assets/img/sponsor/FiveTV.png')}}" alt="FIVETV Logo" />
            </div>
            <div class="sponsor-img">   
                <img src="{{asset('assets/img/sponsor/Lu Kan Anak IT.png')}}" alt="Lu Kan Anak IT Logo" />
                <img src="{{asset('assets/img/sponsor/Radio 2.png')}}" alt="Biems Radio" />
                <img src="{{asset('assets/img/sponsor/Bahaso.png')}}" alt="Bahaso" />
            </div>
            <div class="sponsor-img">   
                <img src="{{asset('assets/img/sponsor/FOURTYFIVE RADIO.png')}}" alt="Forty Five Logo" />
                <img src="{{asset('assets/img/sponsor/Logo ziliun_bg putih.png')}}" alt="Ziliun Logo" />
                <img src="{{asset('assets/img/sponsor/Logo_Tri Cyber Founder.png')}}" alt="Tri Cyber Logo" />
            </div>
            <div class="sponsor-img">   
                <img src="{{asset('assets/img/sponsor/Logo_HMPTI Kristen Satya Wacana.jpg')}}" alt="HMPTI Logo" />
                <img src="{{asset('assets/img/sponsor/logo-phpid-putih.png')}}" alt="PHPID Logo" />
                <img src="{{asset('assets/img/sponsor/WhatsApp Image 2020-08-25 at 14.33.03 (1).jpeg')}}" alt="Agile Circles Logo" />
            </div>
            <div class="sponsor-img">   
                <img src="{{asset('assets/img/sponsor/Logo MK baru PNG.png')}}" alt="LPM Progress Logo" />
                <img src="{{asset('assets/img/sponsor/Female Geek.png')}}" alt="Female Geek Logo" />
                <img src="{{asset('assets/img/sponsor/Bvoice.png')}}" alt="Bvoice Logo" />
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
        <form action="https://formspree.io/mwkrzyok" method="POST">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Name"
              name="name"
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
              name="email"
              required
            />
          </div>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Subject"
              name="subject"
              required
            />
          </div>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Your Message"
              name="message"
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
            <a href="http://line.me/ti/p/~@joy0117j" target="_blank" class="socmed-item">
                <img src="{{asset('assets/img/footer/line.svg')}}" alt="Line Icon">
                <span>@joy0117j</span>
            </a>
            <a href="mailto:technoscape@bncc.net" target="_blank" class="socmed-item">
                <img src="{{asset('assets/img/footer/mail.svg')}}" alt="E-Mail Icon">
                <span>technoscape@bncc.net</span>
            <a href="https://www.facebook.com/bina.nusantara.computer.club/" target="_blank" class="socmed-item">
                <img src="{{asset('assets/img/footer/facebook.svg')}}" alt="Facebook Icon">
                <span>Bina Nusantara Computer Club</span>
            </a>
            <a href="https://www.instagram.com/technoscapebncc/" target="_blank" class="socmed-item">
                <img src="{{asset('assets/img/footer/instagram.svg')}}" alt="Instagram Icon">
                <span>technoscapebncc</span>
            </a>
        </div>
        <div class="foot vh-20 d-flex align-items-center justify-content-between">
            <span class="foot-item">
                <span>Powered By</span>
                <a href="http://binus.ac.id/" target="_blank">
                  <img src="{{asset('assets/img/footer/BINUS_LOGO.png')}}" alt="BINUS Logo">
                </a>
            </span>
            <span class="foot-copyright">&copy; 2020 Bina Nusantara Computer Club, All right Reserved</span>
            <span class="foot-item">
                <span>Organized By</span>
                <a href="https://bncc.net/" target="_blank">
                  <img id="bncc-logo" src="{{asset('assets/img/footer/BNCC_LOGO.png')}}" alt="BNCC Logo">
                </a>
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
