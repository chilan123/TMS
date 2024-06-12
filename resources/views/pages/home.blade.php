@extends('layouts.mainlayout')

@section('title','Home')

@section('content')
<br>
<br>
<div class="container">
  
  <br>
  <div class="row">
    
    <div class="col-md-8" id="container01">
      <p style="font-family: 'Arial', sans-serif; color: #ffffff; font-weight: bold; font-size: 24px; text-transform:  margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
        <?php
        $hour = date('h');
        $ampm = date('a');
        if ($ampm == 'am') {
            echo "🌅 Hello, Good morning";
        } elseif ($ampm == 'pm' && $hour < 6) {
            echo "☀️ Hello, good afternoon";
        } else {
            echo "🌙 Hello, good evening";
        }
        ?>
        
    [Admin mode]!
      </p>
      
      
      <h2 style="color: #f4fbff; /* White text color */
      text-align: center;
   
    font-family: 'Roboto', sans-serif; /* Setting the font family for the entire document */


      font-size: 40px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); /* Text shadow for effect */
       padding-left: 50px; /* Adding left padding */">
      
    Trainee Management System
    </h2>
      <h2 style="color: #d1e8f4; font-family: 'Times New Roman', Times, serif; font-weight: bold; text-align: center; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">for IT division of <a href="https://www.example.com">ACC</a>🛸🛰️</h2>

      <div class="row" id="container03">
        <div class="col-md-6" >
            <div class="card" style="width: 18rem;border-radius: 40px;">
                <div class="card-body">
                  <div style="background-color: #acbaff; padding: 20px; border-radius: 40px;text-align: center;">
                  
                    <p style="font-family: 'Arial', sans-serif; color: #333; font-weight: bold;  margin-bottom: 10px;">Registerd Trainee Details</p>
                   
                    {{-- <p class="card-img">Quick links to registerd trainee information  >></p>
                    <a href="{{config('custom.app.root')}}/academicemployeek" class="card-link">Trainee Details</a> --}}
                    {{-- <a href="{{config('custom.app.root')}}/academicEmpPromoDetails" class="card-link">Promotions</a> --}}
                    <br><a href=" " class="btn btn-outline-dark" style="border-radius: 40px";>Click for Show List of registerd Students </a>
                 
                   </div>
                  </div>
            </div>
        </div>
        
        <div class="col-md-6">
          <div class="card" style="width: 18rem;border-radius: 40px;">
                <div class="card-body">
                  <div style="background-color: #ADD8E6; border-radius: 40px;padding: 20px; text-align: center;">
                    <p style="font-family: 'Arial', sans-serif; color: #333; font-weight: bold;  margin-bottom: 10px;">Arthur C. Clarke Institute for Modern Technologies</p>
                    <a href="https://www.accimt.ac.lk/?page_id=779" class="btn btn-outline-dark"  style="border-radius: 40px";>Click for more information About ACC</a>

                  </div>

                  
               
                </div>
        
          </div>
        </div>
        <p>chilan</p>  
      </div>
    </div>
    <div class="col-md-4"  id="container02"><br/><br/>
      <img class="card-img-top" src="images/hrmodulehomeimage.jpg" alt="Card image" style="border-radius: 30px;">

    </div>
  </div>
</div>




@endsection