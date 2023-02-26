<DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF8">
        <link rel="stylesheet" href="/css/style-general.css">
        <title>Layout</title>
    </head>


    <body>
    <div class="sidebar">
        <a href="welcome" class="{{ Request::path() === 'welcome' ? 'active' : '' }}" >Home Page</a>
        <a href="profile" class="{{ Request::path() === 'profile' ? 'active' : '' }}">Profile</a>
        <a href="dashboard" class="{{ Request::path() === 'dashboard' ? 'active' : '' }}">Dashboard</a>
        <a href="faq" class="{{ Request::path() === 'faq' ? 'active' : '' }}">FAQ</a>
        <a href="blog" class="{{ Request::path() === 'blog' ? 'active' : '' }}">Blog</a>
        <a href="article" class="{{ Request::path() === 'article' ? 'active' : '' }}">Articles</a>
        <a>&nbsp</a>
        <a href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/Algemeen?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&amp;tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams</a>
        <a>------------------</a>
        <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/NL/5.-Onderwijs-examenregelingen/Onderwijs-en-examenregeling/OER-HZ-Bacheloropleiding-voltijd-2022-2023-DEF-13-juni.pdf">Examen Regeling </a>
        <a>------------------</a>
        <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf">ICT Implementation</a>
        <a>------------------</a>
        <a href="https://learn.hz.nl/course/view.php?id=23602#section-1">HZ Learn</a>
        <a class="hzlogo" href="https://hz.nl/"> <img src="/img/hz-logo%20(1)_low.png" alt="HZ Logo" width="150" height="150"></a>
    </div>

    <header>
        <a  class="twitterlink" href="http://www.twitter.com/@TubieSwims">
            <img src="/img/twitterwit.png" alt="Twitter" width="50" height="50">
        </a>
        <a  class="instalink" href="https://www.instagram.com/uriel.baron/">
            <img src="/img/TQnew-Instagram-Qlogo-white-glyph-1200x1199.png" alt="Instagram" width="45" height="45">
        </a>
        <a  class="maillink"  href="mailto:baro0002@hz.nl ?subject=[Contact]">
            <img src="/img/mail.png" alt="mail" width="55"  height="55">
        </a>
        <a class="Githublink" href="https://github.com/UBaron">Ontdek mijn werk!</a>
    </header>
    @yield('welcome_content')
    @yield('dashboard_content')
    @yield('profile_content')
    @yield('faq_content')
    @yield('blog_content')
    @yield('article_content')
    </body>
    </html>
</DOCTYPE>
