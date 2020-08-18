<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon 3.0</title>
    <link rel="icon" href="{{asset('assets/img/Hackathon-logo.png')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-panel.css')}}">
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
                <form action="{{route('admin.payment')}}" method="post">
                @csrf
                <p>Verify payment for <span id=groupName>group A</span></p>
                <input type="hidden" name="payment_id" id="payment_id" value="">
                </div>
                <div class="modal-footer">
                <button type="submit" name="action" value="approve" class="btn btn-primary">Approve</button>
                <button type="submit" name="action" value="reject" class="btn btn-secondary">Reject</button>
                </form>
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
                <form action="{{route('admin.delete')}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <p>Delete <span id=groupName>group</span> account submission?</p>
                <input type="hidden" name="delete_id" id="delete_id" value="">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </form>
                </div>
            </div>
            </div>
    </div>
    <div class="modal fade" id="identity-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Verify Binusian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="{{route('admin.identity')}}" method="post">
                @csrf
                <p>Verify <span id=groupName>group A</span> as Binusian?</p>
                <input type="hidden" name="identity_id" id="identity_id" value="">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </form>
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
                <div class="navbar-content" onclick="switchToggle(this,'identity')">
                    <div class=navbar-icon-c>
                        <img class=navbar-icon src="{{asset('assets/img/admin-panel/Account_Verification.svg')}}">
                    </div>
                    <div class="navbar-caption">
                        identity
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
                <button class="navbar-content" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class=navbar-icon-c>
                        <img class=navbar-icon src="{{asset('assets/img/admin-panel/logout.png')}}">
                    </div>
                    <div class="navbar-caption">
                        logout
                    </div>
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
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
    <script>
        
    </script>
</body>
</html>