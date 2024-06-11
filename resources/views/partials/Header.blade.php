<nav>

            <div class="container_nav">
                <ul>
                    <div class="cont_left">
                        <li>Logo Treno</li>
                    </div>
                    <div class="cont_center">
                        <li><a class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">HOME</a></li>
                        <li><a class="{{ Request::route()->getName() === 'about' ? 'active' : '' }}" href="{{ route('about') }}">ABOUT</a></li>
                        <li><a class="{{ Request::route()->getName() === 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">CONTACT</a></li>
                    </div>
                    <div class="cont_right">
                        <li>user</li>
                    </div>
                </ul>
            </div>

        </nav>