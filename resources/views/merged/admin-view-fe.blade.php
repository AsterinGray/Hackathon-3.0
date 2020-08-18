@extends('layout.admin-main')

@section('content')
<div id=editgroup>
    <h1 class="editgroup-name">Group Name A</h1>
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
                    <img src="assets/img/admin-panel/folder_red.png">
                    <span>|</span>
                    <div class="editgroup-cv">Your CV</div>
                </div>
                <button class="editgroup-view" onclick="view('assets/img/admin-panel/CV-CROP.jpg')">View CV</button>
            </div>
        </div>
        <div class="editgroup-col">
            <header>Member 1</header>
            <hr class="hr3">
            <div class="editgroup-info">
                <div class="editgroup-info-left">
                    <div class="editgroup-info-c">
                        <div>Name</div>
                        <div class="editgroup-info-input" id="editgroup-info-leader-name">Member1_Name</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Address</div>
                        <div class="editgroup-info-input" id="editgroup-info-leader-address">Jalan Palmerah Barat 10 RT 02/RW 05, Palmerah, Kemanggisan, Jakarta Barat</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Email</div>
                        <div class="editgroup-info-input" id="editgroup-info-leader-email">email@gmail.com</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Birth Place</div>
                        <div class="editgroup-info-input" id="editgroup-info-leader-birthplace">email@gmail.com</div>
                    </div>
                </div>
                <div class="editgroup-info-right">
                    <div class="editgroup-info-c">
                        <div>Whatsapp Number</div>
                        <div class="editgroup-info-input" id="editgroup-info-leader-number">0812 3423 7878</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Line_ID</div>
                        <div class="editgroup-info-input" id="editgroup-info-leader-line">Line_id</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>GitLab_ID</div>
                        <div class="editgroup-info-input" id="editgroup-info-leader-gitlab">GitLab ID</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Birth Date</div>
                        <div class="editgroup-info-input" id="editgroup-info-leader-birthdate">11 Juli 2001</div>
                    </div>
                </div>

            </div>
            <hr class="hr3">
            <div class="editgroup-cv-c">
                <div class="editgroup-cv-left">
                    <img src="assets/img/admin-panel/folder_red.png">
                    <span>|</span>
                    <div class="editgroup-cv">Your CV</div>
                </div>
                <button class="editgroup-view" onclick="view('assets/img/admin-panel/CV-CROP.jpg')">View CV</button>
            </div>
        </div>
        <div class="editgroup-col">
            <header>Member 2</header>
            <hr class="hr3">
            <div class="editgroup-info">
                <div class="editgroup-info-left">
                    <div class="editgroup-info-c">
                        <div>Name</div>
                        <div class="editgroup-info-input" id="editgroup-info-name">Member2_Name</div>
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
                    <img src="assets/img/admin-panel/folder_red.png">
                    <span>|</span>
                    <div class="editgroup-cv">Your CV</div>
                </div>
                <button class="editgroup-view" onclick="view('assets/img/admin-panel/CV-CROP.jpg')">View CV</button>
            </div>
        </div>
    </div>
</div>
@endsection