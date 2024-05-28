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
        <a class="nav-link" href="{{config('custom.app.root')}}/">HOME <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link"></a>
        <?php if (session()->has('logdata')) {
          echo "<a class=" . "nav-link" . " " . "href=" . "{{config('custom.app.root')}}/faculty" . " " . ">FACULTIES</a>";
        } ?>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{config('custom.app.root')}}/faculty" class="nav-link{{request()->is('faculty*')? 'active' : ''}}">UNIVERSITY / INSTITUTE      </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{config('custom.app.root')}}/department" class="nav-link{{request()->is('department*')? 'active' : ''}}">COURSES / DEGREE</a>
      </li> --}}
      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    INITIAL DETAILS
                </a>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <a class="dropdown-item {{request()->is('university')? 'active' : ''}}" href="{{ url('/university') }}">UNIVERSITY/INSTITUTE</a>
                  <a class="dropdown-item {{request()->is('degree')? 'active' : ''}}" href="{{ url('/degree') }}">COURSES/DEGREE</a>
 
{{-- 
                <a class="dropdown-item {{request()->is('designation*')? 'active' : ''}}" href="{{ url('/designation') }}">*****</a>
                 <a class="dropdown-item {{request()->is('seniority designation*')? 'active' : ''}}" href="{{ url('/seniority_designation') }}">****</a> --}}
 
                <a class="dropdown-item {{request()->is('')? 'active' : ''}}" href="{{ url('/division') }}">DIVISION</a> 
                 <a class="dropdown-item {{request()->is('supervisor')? 'active' : ''}}" href="{{ url('/supervisor') }}">SUPERVISORS</a>
    {{--            {{-- <a class="dropdown-item {{request()->is('EmpType*')? 'active' : ''}}" href="{{ url('/EmpType') }}">GENDER</a> --}}
                 {{-- <a class="dropdown-item {{request()->is('EmpOlddesig*')? 'active' : ''}}" href="{{ url('/EmpOlddesig') }}">******</a>
                <a class="dropdown-item {{request()->is('EmpRe*')? 'active' : ''}}" href="{{ url('/EmpRe') }}">********</a>
               <a class="dropdown-item {{request()->is('Emplevtype*')? 'active' : ''}}" href="{{ url('/Emplevtype') }}">********</a> 
   --}}
              </div>
            </li>

      <li class="nav-item ">
        <a class="nav-link" href="{{config('custom.app.root')}}/academicemployee">TRAINEE FORM <span class="sr-only">(current)</span></a>
      </li>

    

      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          STAFF DETAILS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{config('custom.app.root')}}/academicemployee">Trainee Details <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/externalLecturer">******</a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/academicLecExtention">********</a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/otherdesignationapp">*****</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/academicEmpPromoDetails">******</a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/acaempeduqualificationdetals">**********</a>
          <a class="dropdown-item" href="{{ url('/EmplevDetails') }}">*********</a>
             <a class="dropdown-item" href="{{config('custom.app.root')}}/academicEmpIncreDetails">**********</a>
            <a class="dropdown-item" href="{{ url('/EmpProjAllowance') }}">***********</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REPORTS
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{config('custom.app.root')}}/facultypdf">University/Institute Details <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/facultyspdf">University/Institute Details  in Sinhala <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/departmentpdf">Courses/Degree Details <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/departmentspdf">Courses/Degree Details in Sinhala<span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empdetailsPDF">Employee Details <span class="sr-only">(current)</span></a>
       <a class="dropdown-item" href="{{config('custom.app.root')}}/empdetails2PDF">Employee Details 2 <span class="sr-only">(current)</span></a>

           <a class="dropdown-item" href="{{config('custom.app.root')}}/empsdetailsPDF">Employee Details in Sinhala <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/employee/details/filterreports">Individual Employee Details <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/employee/details/filtersreports">Individual Employee Details in Sinhala<span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empincrementsPDF">Salary Increments Details <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empincrementsPDFSinhala">Salary Increments Details in Sinhala<span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empdistrictPDF">District Details <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empdistrictsPDF">District Details in Sinhala <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empfacultPDF">Employee Faculty Details <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empfacultsPDF">Employee Faculty Details in Sinhala <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empphdPDF">Employee Postgraduate Details <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/empphdsPDF">Employee Postgraduate Details in Sinhala<span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="{{config('custom.app.root')}}/staffcarderreport">Staff Carder Details<span class="sr-only">(current)</span></a>
          
        </div>
      </li> --}}
    </ul>
    <ul class="navbar-nav">
      <!-- Authentication Links -->
      @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @endif
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle badge badge-danger p-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
 	  @if(Auth::user()->is_logs_admin)
          <a class="dropdown-item" href="{{ url('/admin/user-activity') }}">View Logs</a>
          @endif
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div>
</nav>