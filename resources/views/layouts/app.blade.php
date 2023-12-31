<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta and fonawesome + bootstrap  --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    {{-- Fav icon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}"rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}"rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{ asset('css/style.css') }}'>

    <!-- Bao gồm CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        @yield('title', 'Dream Laptop')
    </title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container text-black-50">
            <a href="{{ route('home') }}" class="" data-event-module-slug="header"data-event-label="logo">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                    viewBox="0 0 64 64">
                    <linearGradient id="k41MFBC-6nrNxSe9HVK3Ya_hotvQzjQoPwi_gr1" x1="32" x2="32"
                        y1="-3.216" y2="53.794" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#6dc7ff"></stop>
                        <stop offset=".492" stop-color="#aab9ff"></stop>
                        <stop offset="1" stop-color="#e6abff"></stop>
                    </linearGradient>
                    <path fill="url(#k41MFBC-6nrNxSe9HVK3Ya_hotvQzjQoPwi_gr1)"
                        d="M52,33c0,7.504-9.448,18.381-15.5,25.183c-2.399,2.696-6.599,2.692-8.992-0.01 C21.456,51.342,12,40.411,12,33c0-4.608,0.152-10.159,1-14c2.006-9.084,8.992-13.792,16.089-15.475 c1.863-0.442,3.801-0.447,5.66,0.01C41.304,5.148,48.899,9.437,51,18C52,22.076,52,28.005,52,33z">
                    </path>
                    <path fill="#fff"
                        d="M29.557,47.334c-1.069-4.501-3.515-12.759-11.795-13.954c-0.574-0.083-1.111,0.31-1.175,0.887 c-0.742,6.642,6.166,12.562,11.684,14.245C29.018,48.739,29.738,48.094,29.557,47.334z">
                    </path>
                    <path fill="#fff"
                        d="M34.561,47.334c1.069-4.501,3.515-12.759,11.795-13.954c0.574-0.083,1.111,0.31,1.175,0.887 c0.742,6.642-6.166,12.562-11.684,14.245C35.1,48.739,34.38,48.094,34.561,47.334z">
                    </path>
                    <linearGradient id="k41MFBC-6nrNxSe9HVK3Yb_hotvQzjQoPwi_gr2" x1="32" x2="32"
                        y1="-1.991" y2="61.455" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#1a6dff"></stop>
                        <stop offset="1" stop-color="#c822ff"></stop>
                    </linearGradient>
                    <path fill="url(#k41MFBC-6nrNxSe9HVK3Yb_hotvQzjQoPwi_gr2)"
                        d="M52.94,17.52 c-0.91-3.7-4.45-12.66-17.71-15.93c-1.08-0.26-2.2-0.4-3.32-0.4c-1.1,0-2.2,0.13-3.28,0.39c-9.28,2.2-15.68,8.39-17.58,16.99 C10.11,22.82,10,28.84,10,33c0,5.42,4.24,15.26,16.13,26.62c1.64,1.57,3.73,2.43,5.89,2.43c2.16,0,4.24-0.86,5.87-2.43 C51.91,46.13,54,37.15,54,33C54,27.76,54,21.83,52.94,17.52z M32.02,59.05c-1.38,0-2.74-0.57-3.82-1.6C20.63,50.22,13,39.86,13,33 c0-4.02,0.1-9.82,0.98-13.78c1.64-7.43,7.23-12.8,15.34-14.72c0.86-0.21,1.73-0.31,2.59-0.31c0.88,0,1.75,0.11,2.6,0.32 c3.89,0.95,13.18,4.2,15.52,13.73C51,22.2,51,28.19,51,33c0,6.34-5.4,15.03-15.19,24.46C34.74,58.49,33.4,59.05,32.02,59.05z">
                    </path>
                    <path fill="#fff"
                        d="M51,18C48.9,9.44,41.3,5.15,34.75,3.54c-0.93-0.23-1.88-0.35-2.84-0.35c-0.94,0-1.89,0.11-2.82,0.33 C21.99,5.21,15.01,9.92,13,19c-0.85,3.84-1,9.39-1,14c0,7.41,8,18,15.51,25.17c1.31,1.25,2.91,1.88,4.51,1.88 c1.59,0,3.18-0.62,4.48-1.87C45,50,52,40.5,52,33C52,28.01,52,22.08,51,18z M32.02,58.05c-1.12,0-2.24-0.47-3.13-1.32 C21.48,49.65,14,39.56,14,33c0-6.23,0.31-10.66,0.95-13.57c2.13-9.64,10.06-12.88,14.6-13.96c0.78-0.18,1.57-0.28,2.36-0.28 c0.8,0,1.59,0.1,2.36,0.29c3.71,0.91,12.58,4,14.79,13C50,22.32,50,28.24,50,33c0,5.98-5.43,14.63-14.89,23.74 C34.22,57.6,33.15,58.05,32.02,58.05z M51,18C48.9,9.44,41.3,5.15,34.75,3.54c-0.93-0.23-1.88-0.35-2.84-0.35 c-0.94,0-1.89,0.11-2.82,0.33C21.99,5.21,15.01,9.92,13,19c-0.85,3.84-1,9.39-1,14c0,7.41,8,18,15.51,25.17 c1.31,1.25,2.91,1.88,4.51,1.88c1.59,0,3.18-0.62,4.48-1.87C45,50,52,40.5,52,33C52,28.01,52,22.08,51,18z M32.02,58.05 c-1.12,0-2.24-0.47-3.13-1.32C21.48,49.65,14,39.56,14,33c0-6.23,0.31-10.66,0.95-13.57c2.13-9.64,10.06-12.88,14.6-13.96 c0.78-0.18,1.57-0.28,2.36-0.28c0.8,0,1.59,0.1,2.36,0.29c3.71,0.91,12.58,4,14.79,13C50,22.32,50,28.24,50,33 c0,5.98-5.43,14.63-14.89,23.74C34.22,57.6,33.15,58.05,32.02,58.05z M51,18C48.9,9.44,41.3,5.15,34.75,3.54 c-0.93-0.23-1.88-0.35-2.84-0.35c-0.94,0-1.89,0.11-2.82,0.33C21.99,5.21,15.01,9.92,13,19c-0.85,3.84-1,9.39-1,14 c0,7.41,8,18,15.51,25.17c1.31,1.25,2.91,1.88,4.51,1.88c1.59,0,3.18-0.62,4.48-1.87C45,50,52,40.5,52,33C52,28.01,52,22.08,51,18z M32.02,58.05c-1.12,0-2.24-0.47-3.13-1.32C21.48,49.65,14,39.56,14,33c0-6.23,0.31-10.66,0.95-13.57 c2.13-9.64,10.06-12.88,14.6-13.96c0.78-0.18,1.57-0.28,2.36-0.28c0.8,0,1.59,0.1,2.36,0.29c3.71,0.91,12.58,4,14.79,13 C50,22.32,50,28.24,50,33c0,5.98-5.43,14.63-14.89,23.74C34.22,57.6,33.15,58.05,32.02,58.05z">
                    </path>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">

                <!-- Nav right -->
                <ul class="navbar-nav me-auto text-uppercase ">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">LexuZ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.store.index') }}">Tùy chỉnh sản phẩm <i
                                class="fa-solid fa-gear"></i></a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="">Tùy chỉnh linh kiện <i class="fa-solid fa-gear"></i></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.user') }}">tùy chỉnh Người dùng <i
                                class="fa-solid fa-gear"></i></a>
                    </li>


                </ul>

                <!-- /nav left -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-bookmark me-2"></i>Thư viện
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('home.service') }}">
                                    <i class="fa-brands fa-servicestack  me-2"></i>Dịch vụ
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('home.team') }}">
                                    <i class="fa-solid fa-users  me-2"></i>Đội ngũ
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('home.testimonial') }}">
                                    <i class="fa-solid fa-meteor  me-2"></i>Phản hồi
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">

                        <form action="{{ route('search') }}" method="GET" class="nav-link search">
                            @csrf

                            <input type="text" name="SearchValue" id="SearchInput" autocomplete="off"
                                class="input rounded form-control-sm" style="background-color: white"
                                placeholder="Search...">
                            <ul id="searchResult" class="List-group position-absolute bg-light text-dark"
                                style="display: block; z-index:100; padding:0; width:189px"></ul>
                            <button type="submit" class="bg-transparent border-0">
                                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                            </button>


                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#SearchInput').on('keyup input', function() {
                                        var input = $(this).val();
                                        if (input != null) {
                                            $.ajax({
                                                url: '{{ route('suggest_ajax') }}', // Đường dẫn đã đăng ký trong route
                                                method: 'get',
                                                data: {
                                                    SearchInput: input
                                                }, // Gửi dữ liệu từ input
                                                success: function(data) {
                                                    // Xóa nội dung hiện tại của div searchResult
                                                    $('#searchResult').empty();

                                                    // Đưa dữ liệu từ controller vào div searchResult
                                                    $('#searchResult').html(data);
                                                }
                                            });
                                        } else {
                                            $('#searchResult').empty(); // Xóa nội dung div searchResult nếu không có input
                                            $('#searchResult').css('display', 'none');
                                        }
                                    });

                                    $('#searchResult').on('click', 'li', function() {
                                        var selectedText = $(this).text();
                                        var redirectUrl = '{{ route('search') }}?SearchValue=' + encodeURIComponent(selectedText);
                                        window.location.href = redirectUrl;
                                    });
                                });
                            </script>






                        </form>

                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="UserDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user"></i>
                        </a>

                        @guest
                            <ul class="dropdown-menu" aria-labelledby="UserDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}"><i
                                            class="fa-solid fa-user-gear"></i>
                                        Đăng nhập</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}"><i
                                            class="fa-solid fa-right-from-bracket"></i>Tạo tài khoản</a>
                                </li>
                            </ul>
                        @else
                            <ul class="dropdown-menu" aria-labelledby="UserDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('myProfile') }}">
                                        <i class="fa-solid fa-user-gear"></i>
                                        Cài đặt
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('my-account.orders') }}">
                                        <i class="fa-solid fa-file-invoice-dollar"></i>
                                        Danh sách hóa đơn
                                    </a>
                                </li>
                                <li>
                                    <form id="logout" action="{{ route('logout') }}" method="POST">
                                        <a class="dropdown-item" role="button"
                                            onclick="document.getElementById('logout').submit();">
                                            <i class="fa-solid fa-right-from-bracket"></i> Đăng xuất
                                        </a>
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        @endguest

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-regular fa-comments"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="padding: 0; margin-top: 80px"> </div>

    <section>
        @yield('beta')
    </section>

    <div class="container-fluid" style="padding: 0; margin-top: 80px">
        @yield('sect1')
    </div>

    <div class="container-fluid bg-white" style="padding:0; margin-top: 80px">
        @yield('sect2')
    </div>

    <div class="container-fluid bg-light" style="margin-top: 80px">
        @yield('sect3')
    </div>


    @yield('sect4')



    @yield('sect5')

    <div class="container-fluid ">
        @yield('sect8')
    </div>

    <div class="container"> </div>

    {{-- <section>
        <button ref="#top" class="btn btn-lg btn-primary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up"></i>
        </button>

    </section> --}}

    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5" id="contact">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Liên hệ với chúng tôi</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Công viên Phần mềm Quang Trung, Lô 14
                        Đường Số 5,Tân Chánh Hiệp, Quận 12, Thành phố Hồ Chí Minh .</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0877-876-875</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>LexuZofficial@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Thời gian hoạt động</h4>
                    <h6 class="text-light">Thứ hai - Thứ sáu:</h6>
                    <p class="mb-4">07.00 AM - 22.00 PM</p>
                    <h6 class="text-light">Thứ bảy - Chủ nhật:</h6>
                    <p class="mb-0">07.00 AM - 16.00 PM</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Dịch vụ</h4>
                    <a class="btn btn-link" href="">Kiểm tra chẩn đoán</a>
                    <a class="btn btn-link" href="">Dịch vụ động cơ</a>
                    <a class="btn btn-link" href="">Thay thế lốp xe</a>
                    <a class="btn btn-link" href="">Thay dầu máy</a>
                    <a class="btn btn-link" href="">Vệ sinh bụi bẩn</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Đăng ký nhận tin tức</h4>
                    <p>Đăng ký nhận thông tin và cập nhật mới nhất về sản phẩm và dịch vụ của chúng tôi.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Email của bạn">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Đăng ký</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">LeuxZ Official Webisite</a>, All Right
                        Reserved.
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Dr.Moho & Oranty</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script Component --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
