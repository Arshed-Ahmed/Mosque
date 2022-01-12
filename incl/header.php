<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mosque Home</title>

    <!-- bootsrtap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Roboto Slab', serif;
        }

        nav {
            transition: 1s;
        }

        nav.black {
            background: #000;
            height: 80px;
        }

        .nav-link {
            font-family: "Cinzel Decorative", cursive;
            font-weight: 700;
            font-size: 20px;
            color: #db9e30 !important;
            margin-top: 2rem;
            margin-left: 1rem;
            margin-right: 1rem;
        }

        .nav-item.active .nav-link {
            border-bottom: 2px solid #db9e30;
        }

        /* .nav-item:hover .nav-link {
            border-bottom: 1px solid #db9e30;
        } */
        .nav-item.active~.indicator {
            transform: scaleX(1);
        }

        .navbar-nav:hover~.indicator {
            transform: scaleX(1);
        }

        .indicator {
            position: absolute;
            height: 2px;
            background-color: #db9e30;
            top: calc(100% - 2px);
            transition: all 0.3s ease-in-out;
            transform: scaleX(0);
        }

        #goog-gt-tt {
            display: none !important;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .goog-te-menu-value:hover {
            text-decoration: none !important;
        }

        #google_translate_element2 {
            display: none !important;
        }
    </style>

    <!-- Translater Site  Scripts-->
    <script>
        function translateSite(val) {
            var x = document.getElementById("countryId");
            x.value = val
            doGTranslate(x)
        }
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement({
                pageLanguage: 'eng',
                autoDisplay: false
            }, 'google_translate_element2');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
    </script>

    <script type="text/javascript">
        /* <![CDATA[ */
        eval(function(p, a, c, k, e, r) {
            e = function(c) {
                return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
            };
            if (!''.replace(/^/, String)) {
                while (c--) r[e(c)] = k[c] || e(c);
                k = [function(e) {
                    return r[e]
                }];
                e = function() {
                    return '\\w+'
                };
                c = 1
            };
            while (c--)
                if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
            return p
        }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
        /* ]]> */
    </script>
    <!-- Translate end -->
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li id="home" class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li id="reg" class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Change Language">
                            <i class="fas fa-globe fa-lg"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="translateSite('en|ta');return false;">Tamil</a>
                        <a class="dropdown-item" onclick="translateSite(' |en');return false;">English</a>
                    </div>
                </li>
                <!-- Begin -  Hidden Language Switcher -->
                <li style="margin-top: 3px;" class="d-none">
                    <select id="countryId" class="select" onchange="translateSite(this)">
                        <!-- <option value="">Select Language</option> -->
                        <option value='en|ta'>TA</option>
                        <option value=" |en">EN</option>
                    </select>
                    <div id="google_translate_element2"></div>
                </li>
                <!-- End -  Hidden Language Switcher -->
            </ul>
            <div class="indicator"></div>
        </div>
    </nav>