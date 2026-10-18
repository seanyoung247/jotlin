
<div id="topbar">
    <h1>Jotlin</h1>

    <nav>
        <ul>
            <li><a href="/notes">Notes</a></li>
            <li class="group">
                <ul>
                    @guest
                        <li><a href="/register" class="btn">Login / Register</a></li>
                    @endguest
                    @auth
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