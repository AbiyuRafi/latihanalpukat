<!DOCTYPE html>
<html lang="en">

<head>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='{{asset('poto/potoicon.png')}}'>
    <title>@yield('title')</title>

</head>

<body>
<nav>
        <div class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="{{asset('poto/logo.png')}}" alt="">
                    </span>
                    <div class="text header-text" style="  margin-left: 10px;">
                        <span class="name">YasmaVoca Farm</span>
                        <span class="profession">All Abouts Avocado</span>
                    </div>
                </div>
                <i class='bx bx-chevron-right toggle'></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">

                        <i class='bx bx-search-alt-2 icon'></i>
                        <input type="search" placeholder="Search...">

                    </li>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="/">
                                <i class='bx bxs-home icon'></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="beli">
                                <i class='bx bxs-cart icon'></i></i>
                                <span class="text nav-text">Beli Produk</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="tampil">
                                <i class='bx bx-list-ul icon'></i>
                                <span class="text check">list pesanan</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="">
                                <i class='bx bxs-phone icon'></i>
                                <span class="text nav-text">Contact</span>
                            </a>
                        </li>


                        <li class="logout" style="margin-top:130px">
                            <a href="">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">LOG OUT</span>
                            </a>
                        </li>
                        <li class="mode">
                            <div class="mon-sun" style="margin-bottom: 20px;">
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text" style="margin-left: 60px;">Dark Mode</span>

                            <div class="toggle-switch">
                                <span class="switch"></span>


                            </div>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @yield('content');

</body>

</html>
