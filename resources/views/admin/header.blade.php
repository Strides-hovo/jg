<main>
    <nav>
        <div class="menu_btn">
            <div class="menu_ico">
            </div>
        </div>
        <div class="nav_list">
            
            <div class="nav_account">
                <div class="avatar"></div>
                <div class="acc_login">{{Auth::user()->name}}
                    <div class="logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Выйти</div>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
