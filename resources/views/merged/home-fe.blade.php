<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="assets/img/Hackathon-logo.png">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/slick.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/slick-theme.css">
    <link rel="stylesheet" href="css/user-dashboard.css">
</head>
<body>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content display-c">
            <div class="modal-body display-c">
                <img id="display-image" src="{{asset('assets/img/admin-panel/CV-CROP.jpg')}}">
            </div>
          </div>
        </div>
    </div>

    <div id="container">
        <div id=navbar-c>
            <nav id="navbar" class="navbar">
                <div id="hamburger" class="navbar-header" aria-expanded="false">
                    <div class="navbar-icon-c hamburger-inside">
                        <img class=navbar-icon src="{{asset('assets/img/admin-panel/Group 990.png')}}">
                    </div>
                    <div class="navbar-caption display-none">
                        BNCC Hackathon 2.0
                    </div>
                </div>
                <hr class="line">
                <div class="navbar-header navbar-header-special">
                    <div class=navbar-icon-c>
                        <img id=navbar-hackathon-logo class="navbar-icon" src="{{asset('assets/img/Hackathon-logo.png')}}">
                    </div>
                    <div class="navbar-caption-special">
                        <div>Welcome,</div>
                        <span id=group_name>Group_Name A</span>
                    </div>
                </div>
                <div class="nav nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <div class="navbar-content">
                            <div class=navbar-icon-c-2>
                                <img class=navbar-icon src="{{asset('assets/img/user-dashboard/home.png')}}">
                            </div>
                            <div class="navbar-caption-2">Home</div>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-payment" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                        <div class="navbar-content">
                            <div class=navbar-icon-c-2>
                                <img class=navbar-icon src="{{asset('assets/img/admin-panel/Payment.png')}}">
                            </div>
                            <div class="navbar-caption-2">Payment</div>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-timeline" role="tab" aria-controls="v-pills-timeline" aria-selected="false">
                        <div class="navbar-content">
                            <div class=navbar-icon-c-2>
                                <img class=navbar-icon src="{{asset('assets/img/user-dashboard/month-calendar.png')}}">
                            </div>
                            <div class="navbar-caption-2">Timeline</div>
                        </div>
                    </a>
                    <!-- <a class="nav-link" data-toggle="pill" href="#v-pills-logout" role="tab" aria-controls="v-pills-logout" aria-selected="false"> -->
                        <button class="logout inherit nav-link" id="v-pills-settings-tab" data-toggle="pill" role="tab" aria-controls="v-pills-logout" aria-selected="false">
                            <div class="navbar-content">
                                <div class=navbar-icon-c-2>
                                    <img class=navbar-icon src="{{asset('assets/img/admin-panel/logout.png')}}">
                                </div>
                                <div class="navbar-caption-2">Logout</div>
                            </div>
                        </button>
                    <!-- </a> -->
                </div>
                <div class="navbar-footer">2020 Bina Nusantara Computer Club</div>
            </nav>
        </div>

        <section id="content">
            <div id="header">
                Dashboard
            </div>
            <hr>
            <div class="tab-content content" id="v-pills-tabContent">
                <div class="tab-pane fade show active content-x" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h1>
                        Home
                    </h1>
                    <div class="editgroup-content">
                        <div class="editgroup-col">
                            <header>Leader</header>
                            <hr class="hr3">
                            <div class="editgroup-info">
                                <div class="editgroup-info-left">
                                    <div class="editgroup-info-c">
                                        <div>Name</div>
                                        <div class="editgroup-info-input" id="editgroup-info-name">Leader_Name</div>
                                    </div>
                                    <div class="editgroup-info-c">
                                        <div>Address</div>
                                        <div class="editgroup-info-input" id="editgroup-info-address">Jalan Palmerah Barat 10 RT 02/RW 05, Palmerah, Kemanggisan, Jakarta Barat</div>
                                    </div>
                                    <div class="editgroup-info-c">
                                        <div>Email</div>
                                        <div class="editgroup-info-input" id="editgroup-info-email">email@gmail.com</div>
                                    </div>
                                    <div class="editgroup-info-c">
                                        <div>Birth Place</div>
                                        <div class="editgroup-info-input" id="editgroup-info-birthplace">email@gmail.com</div>
                                    </div>
                                </div>
                                <div class="editgroup-info-right">
                                    <div class="editgroup-info-c">
                                        <div>Whatsapp Number</div>
                                        <div class="editgroup-info-input" id="editgroup-info-number">0812 3423 7878</div>
                                    </div>
                                    <div class="editgroup-info-c">
                                        <div>Line_ID</div>
                                        <div class="editgroup-info-input" id="editgroup-info-line">Line_id</div>
                                    </div>
                                    <div class="editgroup-info-c">
                                        <div>GitLab_ID</div>
                                        <div class="editgroup-info-input" id="editgroup-info-gitlab">GitLab ID</div>
                                    </div>
                                    <div class="editgroup-info-c">
                                        <div>Birth Date</div>
                                        <div class="editgroup-info-input" id="editgroup-info-birthdate">11 Juli 2001</div>
                                    </div>
                                </div>
            
                            </div>
                            <hr class="hr3">
                            <div class="editgroup-cv-c">
                                <div class="editgroup-cv-left">
                                    <img src="{{asset('assets/img/admin-panel/folder.png')}}">
                                    <span>|</span>
                                    <div class="editgroup-cv">Your CV</div>
                                </div>
                                <button type="button" class="editgroup-view" data-toggle="modal" data-target="#exampleModalCenter" data-whatever="assets/img/admin-panel/CV-CROP.jpg">View CV</button>
                            </div>
                        </div>
                        <div id=memberform class="editgroup-col">
                            <header>New Member</header>
                            <hr class="hr3">
                            <form class=form action="">
                                <div class="editgroup-info">
                                    <div class="editgroup-info-left">
                                        <input type="text" class="editgroup-info-input my-2" 
                                        placeholder="Full Name" required/>
                                    
                                        <input type="email" class="editgroup-info-input my-2" 
                                        placeholder="Email" onchange="validateEmail(this)"required/>
                                        <p class="invalid"></p>
    
                                        <input
                                        type="text"
                                        class="editgroup-info-input my-2"
                                        placeholder="Birth Place"
                                        required
                                        />

                                        <input type="number" class="editgroup-info-input my-2" 
                                        placeholder="Whatsapp Number" onchange="validatePhone(this)" required/>
                                        <p class="invalid"></p>
    
                                    </div>
                                    <div class="editgroup-info-right">
    
                                        <input
                                        type="text"
                                        class="editgroup-info-input my-2"
                                        placeholder="LINE ID"
                                        required
                                        />
    
                                        <input
                                        type="text"
                                        class="editgroup-info-input my-2"
                                        placeholder="Github/Gitlab ID"
                                        required
                                        />
    
                                        <input
                                        type="date"
                                        class="editgroup-info-input my-2 inp-date"
                                        placeholder="DD/MM/YYYY"
                                        required
                                        />
                                    </div>
                                </div>
                                <hr class="hr3">
                                <div class="editgroup-info">
                                    <div class="editgroup-info-left">
                                        <label for="idcard-leader" class="inp-file editgroup-info-input">Upload ID Card</label>
                                        <p class="invalid"></p>
                                        <input type="file" id="idcard-leader" class="editgroup-info-input" onchange="changeFile(this)" />
                                    </div>
                                    <div class="editgroup-info-right">
                                        <label for="cv-leader" class="inp-file editgroup-info-input">Upload CV</label>
                                        <p class="invalid"></p>
                                        <input type="file" id="cv-leader" class="" onchange="changeFile(this)" />
                                    </div>
                                </div>
                                <hr class="hr3">
                                <button class="submit" type="submit">Submit</button>
                            </form>
                        </div>
                        <div class="editgroup-col add-member">
                            <div class="add-member-head">
                                <header>Add Member</header>
                                <div class="cir" onclick="expandForm(this)">
                                    <div class="min"></div>
                                    <div class="plus"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="editgroup-col flex-row">
                            <div class="editgroup-contact-content">
                                Jika ada informasi yang ingin diubah, silahkan hubungi Contact Person berikut:
                            </div>
                            <div class="editgroup-contact-info">
                                Admin_1:
                                <div class="editgroup-contact-info-c">
                                    <img class="editgroup-contact-icon" src="{{asset('assets/img/user-dashboard/line_dark.png')}}" alt="">Admin_1
                                </div>
                                <div class="editgroup-contact-info-c">
                                    <img class="editgroup-contact-icon" src="{{asset('assets/img/user-dashboard/whatsapp_dark.png')}}" alt="">0812 8788 9390
                                </div>
                            </div>
                            <div class="editgroup-contact-info">
                                Admin_2:
                                <div class="editgroup-contact-info-c">
                                    <img class="editgroup-contact-icon" src="{{asset('assets/img/user-dashboard/line_dark.png')}}" alt="">Admin_2
                                </div>
                                <div class="editgroup-contact-info-c">
                                    <img class="editgroup-contact-icon" src="{{asset('assets/img/user-dashboard/whatsapp_dark.png')}}" alt="">0812 1109 9291
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane fade content-x" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                    <h1>Payment</h1>
                    <div class="payment-c">
                        <div class="payment">
                            <header class="payment-header">Payment Method Instructions</header>
                            <hr class="hr4">
                            <div class="payment-content-c">
                                <div class="payment-title-c">
                                    <div class="payment-title">
                                        1. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                    <div class="payment-cross" data-toggle="collapse" data-target="#content1" aria-expanded="false" aria-controls="content1">
                                        <div class="horizontal position-absolute"></div>
                                        <div class="vertical position-absolute"></div>
                                    </div>
                                </div>
                                <div id=content1 class="payment-content collapse">
                                    1) Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
                                    2) Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
                                    3) Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                                    4) Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                                </div>
                                <hr class="hr4">
                            </div>
                            <div class="payment-content-c">
                                <div class="payment-title-c">
                                    <div class="payment-title">
                                        2. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                    <div class="payment-cross"  data-toggle="collapse" data-target="#content2" aria-expanded="false" aria-controls="content2">
                                        <div class="horizontal position-absolute"></div>
                                        <div class="vertical position-absolute"></div>
                                    </div>
                                </div>
                                <div id="content2" class="payment-content collapse">
                                    1) Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
                                    2) Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
                                    3) Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                                    4) Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                                </div>
                                <hr class="hr4">
                            </div>
                            <div class="payment-content-c">
                                <div class="payment-title-c">
                                    <div class="payment-title">
                                        3. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                    <div class="payment-cross" data-toggle="collapse" data-target="#content3" aria-expanded="false" aria-controls="content3">
                                        <div class="horizontal position-absolute"></div>
                                        <div class="vertical position-absolute"></div>
                                    </div>
                                </div>
                                <div id=content3 class="payment-content collapse">
                                    1) Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
                                    2) Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
                                    3) Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                                    4) Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                                </div>
                                <hr class="hr4">
                            </div>
                        </div>
                        <div class="payment-2">
                            <div class="payment-left">a
                                <h4>Upload Payment Receipt</h4>
                                <div class="flex-col d-flex ">
                                    <img class="payment-time" src="{{asset('assets/img/user-dashboard/time-left.png')}}">
                                    <div class="payment-time-content" id="countdown">
                                        23:59:45 left
                                    </div>
                                </div>
                            </div>
                            <div class="payment-right" id="payment-form">
                                <form id="payment-form">
                                <div class="payment-button-left d-flex flex-column align-items-center justify-content-center mr-3">
                                    <label for="upload-payment">Upload File</label>
                                    <input type="file" name="" id="upload-payment" onchange="changeFile(this)">
                                    <button type="submit">Submit</button>
                                </div>
                                <div class="d-flex flex-column">
                                    <div>
                                    File Name: <span id="file-name">No file chosen</span>
                                    </div>
                                    <div>
                                    Status: <span id="file-status">_</span>
                                    </div>
                                    <p class="invalid">
                                        adsad
                                    </p>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>

                <div class="tab-pane fade " id="v-pills-timeline" role="tabpanel" aria-labelledby="v-pills-timeline-tab">
                    <h1>
                        Timeline
                    </h1>
                    <div class="content-x">
                        <div class="timeline-wrapper d-flex row justify-content-center align-items-center flex-column my-5">
                            <div class="timeline-icons d-flex justify-content-around my-3 w-100">
                                <div><img src="{{asset('assets/img/timeline/open-registration.svg')}}" alt=""></div>
                                <div><img src="{{asset('assets/img/timeline/close-registration.svg')}}" alt=""></div>
                                <div><img src="{{asset('assets/img/timeline/technical-meeting.svg')}}" alt=""></div>
                                <div><img src="{{asset('assets/img/timeline/competition-day.svg')}}" alt=""></div>
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
                    </div>
                </div>

              </div>
        </section>
          
    </div>
    <script src="{{asset('assets/lib/jquery.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/slick.min.js')}}"></script>
    <script src="{{asset('js/user-dashboard.js')}}"></script>
</body>
</html>