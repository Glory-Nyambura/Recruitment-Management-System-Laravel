<!DOCTYPE html>
<html>

<head>
    <title>My Laravel Website</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>

<body>

    <nav>

        @if(request()->routeIs('home'))
            <strong>Home</strong>
        @else
            <a href="/">Home</a>
        @endif

        |

        @if(request()->routeIs('about'))
            <strong>About</strong>
        @else
            <a href="/about">About</a>
        @endif

        |

        @if(request()->routeIs('contact'))
            <strong>Contact</strong>
        @else
            <a href="/contact">Contact</a>
        @endif

        |

        @if(request()->routeIs('careers') || request()->routeIs('apply'))
            <strong>Careers</strong>
        @else
            <a href="/careers">Careers</a>
        @endif

    </nav>

    <hr>

    @yield('content')

</body>

</html>
