@extends('layout.admin-main')

@section('content')
<div id=editgroup>
    <h1 class="editgroup-name">Group Name A</h1>
    <div class="editgroup-content">
        <form>
            <div class="editgroup-col">
            <header>Leader</header>
            <hr class="hr3">
            <div class="editgroup-info">
                <div class="editgroup-info-left">
                    <div class="editgroup-info-c">
                        <label for="leader-name">Name</label>
                        <input class="editgroup-info-input" name="leader-name" id="leader-name">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-address">Address</label>
                        <input class="editgroup-info-input" name="leader-address" id="leader-address">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-email">Email</label>
                        <input class="editgroup-info-input" name="leader-email" id="leader-email">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-birthplace">Birth Place</label>
                        <input class="editgroup-info-input" name="leader-birthplace" id="leader-birthplace">
                    </div>
                </div>
                <div class="editgroup-info-right">
                    <div class="editgroup-info-c">
                        <label for="leader-number">Whatsapp Number</label>
                        <input class="editgroup-info-input" name="leader-number" id="leader-number">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-line">Line_ID</label>
                        <input class="editgroup-info-input" name="leader-line" id="leader-line">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-gitlab">GitLab_ID</label>
                        <input class="editgroup-info-input" name="leader-gitlab" id="leader-gitlab">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-birthdate">Birth Date</label>
                        <input class="editgroup-info-input" name="leader-birthdate" id="leader-birthdate">
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
                <button class="editgroup-view" onclick="view('assets/img/admin-panel/CV-CROP.jpg')" type="button">View CV</button>
            </div>
            <hr class="hr3">
            <button class="editgroup-submit" type="submit">Submit</button>
            </div>
        </form>
        <form>
            <div class="editgroup-col">
                <header>Member 1</header>
                <hr class="hr3">
                <div class="editgroup-info">
                    <div class="editgroup-info-left">
                        <div class="editgroup-info-c">
                            <label for="member1-name">Name</label>
                            <input class="editgroup-info-input" name="member1-name" id="member1-name">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member1-address">Address</label>
                            <input class="editgroup-info-input" name="member1-address" id="member1-address">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member1-email">Email</label>
                            <input class="editgroup-info-input" name="member1-email" id="member1-email">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member1-birthplace">Birth Place</label>
                            <input class="editgroup-info-input" name="member1-birthplace" id="member1-birthplace">
                        </div>
                    </div>
                    <div class="editgroup-info-right">
                        <div class="editgroup-info-c">
                            <label for="member1-number">Whatsapp Number</label>
                            <input class="editgroup-info-input" name="member1-number" id="member1-number">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member1-line">Line_ID</label>
                            <input class="editgroup-info-input" name="member1-line" id="member1-line">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member1-gitlab">GitLab_ID</label>
                            <input class="editgroup-info-input" name="member1-gitlab" id="member1-gitlab">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member1-birthdate">Birth Date</label>
                            <input class="editgroup-info-input" name="member1-birthdate" id="member1-birthdate">
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
                    <button class="editgroup-view" onclick="view('assets/img/admin-panel/CV-CROP.jpg')"  type="button">View CV</button>
                </div>
                <hr class="hr3">
                <button class="editgroup-submit" type="submit">Submit</button>
            </div>
        </form>
        <form>
            <div class="editgroup-col">
                <header>Member 2</header>
                <hr class="hr3">
                <div class="editgroup-info">
                    <div class="editgroup-info-left">
                        <div class="editgroup-info-c">
                            <label for="member2-name">Name</label>
                            <input class="editgroup-info-input" name="member2-name" id="member2-name">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member2-address">Address</label>
                            <input class="editgroup-info-input" name="member2-address" id="member2-address">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member2-email">Email</label>
                            <input class="editgroup-info-input" name="member2-email" id="member2-email">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member2-birthplace">Birth Place</label>
                            <input class="editgroup-info-input" name="member2-birthplace" id="member2-birthplace">
                        </div>
                    </div>
                    <div class="editgroup-info-right">
                        <div class="editgroup-info-c">
                            <label for="member2-number">Whatsapp Number</label>
                            <input class="editgroup-info-input" name="member2-number" id="member2-number">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member2-line">Line_ID</label>
                            <input class="editgroup-info-input" name="member2-line" id="member2-line">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member2-gitlab">GitLab_ID</label>
                            <input class="editgroup-info-input" name="member2-gitlab" id="member2-gitlab">
                        </div>
                        <div class="editgroup-info-c">
                            <label for="member2-birthdate">Birth Date</label>
                            <input class="editgroup-info-input" name="member2-birthdate" id="member2-birthdate">
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
                    <button class="editgroup-view" onclick="view('assets/img/admin-panel/CV-CROP.jpg')" type="button">View CV</button>
                </div>
                <hr class="hr3">
                <button class="editgroup-submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection