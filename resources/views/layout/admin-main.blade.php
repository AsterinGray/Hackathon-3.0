<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon 3.0</title>
    <link rel="icon" href="assets/img/Hackathon-logo.png">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/slick.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/slick-theme.css">
    <link rel="stylesheet" href="css/admin-panel.css">
</head>
<body onload="defaultToggle()">
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Verify Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Verify payment for <span id=groupName>group A</span></p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Approve</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Reject</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Delete Submission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Delete <span id=groupName>group A</span> account submission?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            </div>
    </div>
    <div id="display-c" style="display:none">
        <img id="display-image" src="{{asset('assets/img/admin-panel/Receipt-CROP.jpg')}}">
    </div>
    <div id="barrier" style="display:none"></div>
    
    <div id="container">
        <section id=navbar class="navbar">
            <div class="navbar-header">
                <div class=navbar-icon-c id=hamburger aria-expanded="false">
                    <img class=navbar-icon src="{{asset('assets/img/admin-panel/Group 990.png')}}">
                </div>
                <div class="navbar-caption-2 display-none">
                    admin panel
                </div>
            </div>
            <hr class="hr-navbar">
            <div class="navbar-content-c">
                <div class="navbar-content" onclick="switchToggle(this,'payment')">
                    <div class=navbar-icon-c>
                        <img class=navbar-icon src="{{asset('assets/img/admin-panel/Payment.png')}}">
                    </div>
                    <div class="navbar-caption">
                        payment
                    </div>
                </div>
                <div class="navbar-content" onclick="switchToggle(this,'participant')">
                    <div class=navbar-icon-c>
                        <img class=navbar-icon src="{{asset('assets/img/admin-panel/participant.png')}}">
                    </div>
                    <div class="navbar-caption">
                        participant
                    </div>
                </div>
                <button class="navbar-content">
                    <div class=navbar-icon-c>
                        <img class=navbar-icon src="{{asset('assets/img/admin-panel/logout.png')}}">
                    </div>
                    <div class="navbar-caption">
                        logout
                    </div>
                </button>
            </div>
        </section>
        <section id=content>
            <div id="header">
                Dashboard
            </div>
            <hr>
            @yield('content')
        </section>
    </div>
    <script src="{{asset('assets/lib/jquery.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin-panel.js')}}"></script>
</body>
</html>