<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books List - Memorial Books</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
</head>
<body class="main-layout">
    <!-- Header -->
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="{{ url('/') }}">Home</a> </li>
                                        <li> <a href="{{ url('/about') }}">About us</a> </li>
                                        <li> <a href="{{ url('/books') }}">Our Books</a> </li>
                                        <li class="active"> <a href="{{ url('/library') }}">Library</a> </li>
                                        <li> <a href="{{ url('/contact') }}">Contact us</a> </li>
                                        <li class="mean-last"> <a href="#"><img src="{{ asset('images/search_icon.png') }}" alt="#" /></a> </li>
                                        <li class="mean-last"> <a href="#"><img src="{{ asset('images/top-icon.png') }}" alt="#" /></a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Books List Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Books Collection</h2>
                    <span>Explore our collection of books available in the library.</span>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($books as $book)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if($book->image)
                            <img src="{{ asset('images/books/' . $book->image) }}" class="card-img-top" alt="{{ $book->title }}">
                        @else
                            <img src="{{ asset('images/default-book.jpg') }}" class="card-img-top" alt="Default Book Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                            <p class="card-text"><strong>Published:</strong> {{ $book->published_year }}</p>
                            <p class="card-text">{{ Str::limit($book->description, 100) }}</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <p>No books available in the library at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
    <!-- End Books List Section -->

    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="Follow">
                            <h3>Follow Us</h3>
                        </div>
                        <ul class="location_icon">
                            <li> <a href="#"><img src="{{ asset('icon/facebook.png') }}" alt="Facebook"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/Twitter.png') }}" alt="Twitter"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/linkedin.png') }}" alt="LinkedIn"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/instagram.png') }}" alt="Instagram"></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="Follow">
                            <h3>Newsletter</h3>
                        </div>
                        <input class="Newsletter" placeholder="Enter your email" type="email">
                        <button class="Subscribe">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Javascript files -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>