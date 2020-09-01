@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/detail_styles.css') }}">
@endpush

@section('content')
    
<div class="row">
    <div class="col-sm-12 ">
        <div class="blackBar">
        </div>
        <div class="content_search">
            <div class="blackBar">
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 search_col align-self-center">
                    <div class="search_bar">
                       
                        <form id="search_form" name="search_form" action="{{route ('search.by_name')}}"  method="GET">
                          {{ csrf_field() }}
                            <input class="input_search" type="text" name="input_search" placeholder="Enter search text..."  name="name_search">
                             <button type="submit" class="btn_search">
                                    
                                        <i class="fas fa-search" onclick=""></i>
                                    
                                </button>
                          
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row align-items-center detail_content" >

    <div class="col-md-6 col-sm-12 mx-auto text-center img_detail">
        <img src="{{ url($descriptions['image']) }}" >
    </div>

    <div class="col-md-6 col-sm-12 mx-auto">
        <div id="alias_name">
            <span id="alias">{{$descriptions['name']}}</span><br>
            <span id="name">{{$descriptions['publish']}}</span>
        </div>

        <div class="description_content">
            <div class="description">
               <span class="title">GENDER: </span><span class="title_text">{{$descriptions['gender']}}</span><br>
               <span class="title">INTELLIGENCE: </span><span class="title_text">{{$descriptions['intelligence']}}</span><br>
               <span class="title">STRENGTH: </span><span class="title_text">{{$descriptions['strength']}}</span><br>
               <span class="title">POWER: </span><span class="title_text">{{$descriptions['power']}}</span><br>
               <span class="title">RACE: </span><span class="title_text">{{$descriptions['race']}}</span><br>
               <span class="title">WORK: </span><span class="title_text">{{$descriptions['work']}}</span><br>
               <span class="title">COMBAT: </span><span class="title_text">{{$descriptions['combat']}}</span><br>
               <span class="title">RACE:</span><span class="title_text">{{$descriptions['publish']}}</span><br>
           </div>
       </div>
    </div>
</div>
 


    

@endsection