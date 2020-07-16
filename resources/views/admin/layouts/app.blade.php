<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Control System</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/admin/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/admin/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('csslink')
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">home</a>
                            </li>
                       
                            <li class="nav-item">
                                <a class="nav-link" href="">Login</a>
                            </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="">Register</a>
                                </li>
                           
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">logout
                                      
                                    </a>

                                    <form id="logout-form" action="#" method="POST" style="display: none;">
                                        
                                    </form>
                                </div>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        
        <div class="container">
            <div class="row py-2">
                <div class="col-md-3">
                    <div class="list-group" style="margin-bottom:10px;">
                           
                            <a  class="list-group-item list-group-item-action " style="text-align:center; color:black;">Teachers</a>
                            <a  class="list-group-item list-group-item-action " href="{{route('add_teacher')}}"><i class="fa fa-plus" aria-hidden="true"></i> add a teacher</a>
                            <a  class="list-group-item list-group-item-action  " href="{{route('view_teacher')}}"><i class="fa fa-users" aria-hidden="true"></i> all teachers  </span></a>
                            <a  class="list-group-item list-group-item-action " href="#"><i class="fa fa-trash" aria-hidden="true"></i> Trashed</a>                            

                    </div>
                    <div class="list-group">
                           
                           <a  class="list-group-item list-group-item-action "  style="text-align:center; color:black;" >Courses</a>                           
                           <a  class="list-group-item list-group-item-action " href="{{route('view_course_categories_add')}}">add a course category</a>
                           <a  class="list-group-item list-group-item-action " href="{{route('view_course_categories')}}">all course categories</a>
                           <a  class="list-group-item list-group-item-action " href="#">add a course</a>
                           <a  class="list-group-item list-group-item-action " href="{{route('view_courses')}}">all courses</a>                           
                           <a  class="list-group-item list-group-item-action " href="#">Comments</a>

                   </div>
                    
                </div>
                
                <div class="col-md-8">

                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>       
    </div>
    @yield('script');
</body>
</html>