<div class="menu-items">
            <ul class="nav-links">
                <li><a href="/registered/{{$students->id}}">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>
                

                <li><a href="/studentInfo/{{$students->id}}">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Student Info</span>
                    </a></li>
                <li><a href="/student/{{$students->id}}">
                        <i class="uil uil-user"></i>
                        <span class="link-name">card</span>
                    </a></li>
                <li><a href="/feedback/{{$students->id}}">
                        <i class="uil uil-user"></i>
                        <span class="link-name">feedback</span>
                    </a></li>
            </ul>


            <ul class="logout-mode">
                <li><a href="login.html">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                

                    <div class="mode-toggle">
                        <!-- <span class="switch"></span> -->
                    </div>
                </li>
            </ul>
        </div>
        </div>