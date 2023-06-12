<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>dashboard admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Acss/bootstrap.min.css')}}">
    <!----css3---->
    <link rel="stylesheet" href="{{asset('Acss/custom.css')}}">

    
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

</head>

<body>



    <div class="wrapper">

        <div class="body-overlay"></div>

        <!-------sidebar--design------------>


        @include('admin.sidebar')

        <!-------sidebar--design- close----------->



        <!-------page-content start----------->


        <div id="content">

            <!------top-navbar-start----------->

            <div class="top-navbar">
                <div class="xd-topbar">
                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                <span class="material-icons text-white">signal_cellular_alt</span>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        </div>


                        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                            <div class="xp-profilebar text-right">
                                <nav class="navbar p-0">
                                    <ul class="nav navbar-nav flex-row ml-auto">
                                        {{-- <li class="dropdown nav-item active">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <span class="material-icons">notifications</span>
                                                <span class="notification">4</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">You Have 4 New Messages</a></li>
                                                <li><a href="#">You Have 4 New Messages</a></li>
                                                <li><a href="#">You Have 4 New Messages</a></li>
                                                <li><a href="#">You Have 4 New Messages</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <span class="material-icons">question_answer</span>
                                            </a>
                                        </li> --}}

                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <img src="{{asset('img/undraw_profile.svg')}}"
                                                    style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span>
                                            </a>
                                            <ul class="dropdown-menu small-menu">
                                                <li><a href="#">
                                                        <span class="material-icons">person_outline</span>
                                                        @php
                                                        $user = Auth::guard('admin')->user();
                                                            
                                                        @endphp
                                                        {{ $user->nama }}
                                                    </a></li>
                                                
                                                <li><a href="{{ route('logout.admin') }}">
                                                        <span class="material-icons">logout</span>
                                                        Logout
                                                    </a></li>

                                            </ul>
                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                    <div class="xp-breadcrumbbar text-center">
                        <h4 class="page-title">Desa Kom C</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
                        </ol>
                    </div>


                </div>
            </div>
            <!------top-navbar-end----------->


            <!------main-content-start----------->
            @yield ('konten')

            <!------main-content-end----------->



            <!----footer-design------------->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="footer-in">
                        <p class="mb-0">&copy Desa kom C . All Rights Reserved.</p>
                    </div>
                </div>
            </footer>




        </div>

    </div>



    <!-------complete html----------->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('Ajs/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('Ajs/popper.min.js')}}"></script>
    <script src="{{asset('Ajs/bootstrap.min.js')}}"></script>
    <script src="{{asset('Ajs/jquery-3.3.1.min.js')}}"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <script>
                function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>

    {{-- <script>
        $('body').on('click', '#editEmployeeModal', function(event) {

            event.preventDefault();
            var id = $(this).data('id');

            $.get(admin + '/' + id + '/edit', function(data) {

                $('#userCrudModal').html("Edit Penduduk");
                $('#submit').val("Edit Penduduk");
                $('#modal-id').modal('show');
                $('#company_id').val(data.data.id);
                $('#name').val(data.data.name);
                $('#address').val(data.data.address);
            })
        });
    </script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            $(".xp-menubar").on('click', function() {
                $("#sidebar").toggleClass('active');
                $("#content").toggleClass('active');
            });

            $('.xp-menubar,.body-overlay').on('click', function() {
                $("#sidebar,.body-overlay").toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>
