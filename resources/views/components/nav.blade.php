
<div id="topbar">
    <h1>Jotlin</h1>

    <nav>
        <ul>
            <li><a href="/notes">Notes</a></li>
            <li class="group">
                <ul>
                    @guest
                        <li><a href="/login" class="btn usr-btn">Login</a></li>
                        <li><a href="/register" class="btn usr-btn">Register</a></li>
                    @endguest
                    @auth
                        <li>
                            Hello {{ Auth::user()->name }}
                        </li>
                        <li>
                            <form method="POST" action="/logout">
                                <input class="btn" type="submit" value="Log Out">
                            </form>
                        </li>
                    @endauth
                </ul>
            </li>
        </ul>
    </nav>

</div>