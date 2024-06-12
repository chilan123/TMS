<nav class="navbar navbar-expand-lg navbar-custom fixed-top" id="navbar">
  <a class="navbar-brand" href="{{config('custom.app.root')}}/">
    <img src="{{ asset('images/bpulogo.png') }}" width="360px" height="100%" class="d-inline-block align-center" id="nav-image-logo" alt="">
  </a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  
    <span class="navbar-toggler-icon"></span>
  </button>
  <h2 style="color: #fff; /* White text color */
  text-align: center;
  font-family: 'Arial', sans-serif;
  font-size: 25px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Text shadow for effect */
   padding-left: 50px; /* Adding left padding */">
  
Trainee Management System👩‍💻👨‍💻
</h2>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      {{-- <li class="nav-item ">
        Trainee Management System
      </li> --}}

      <li class="nav-item ">
        <a class="nav-link" href="{{config('custom.app.root')}}/home">HOME <span class="sr-only">(current)</span></a>
      </li>
    
 

      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    INITIAL DETAILS
                </a>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <a class="dropdown-item {{request()->is('university')? 'active' : ''}}" href="{{ url('/university') }}">UNIVERSITY/INSTITUTE</a>
                  <a class="dropdown-item {{request()->is('degree')? 'active' : ''}}" href="{{ url('/degree') }}">COURSES/DEGREE</a>
 

 
                <a class="dropdown-item {{request()->is('')? 'active' : ''}}" href="{{ url('/') }}">DIVISION</a> 
                <a class="dropdown-item {{request()->is('')? 'active' : ''}}" href="{{ url('/duration') }}">DURATION</a> 
                <a class="dropdown-item {{request()->is('supervisor')? 'active' : ''}}" href="{{ url('/supervisor') }}">SUPERVISORS</a>

              </div>
            </li>

      <li class="nav-item ">
        <a class="nav-link" href="{{config('custom.app.root')}}/academicemployee">TRAINEE FORM <span class="sr-only">(current)</span></a>
      </li>

    

 
    </ul>
    
  </div>
</nav>