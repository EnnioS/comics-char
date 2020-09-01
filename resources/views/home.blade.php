@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home_styles.css') }}">
@endpush

@section('content')
 

        <div class="blackBar">
        </div>

        <section id="carousel_characters" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel_characters" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_characters" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ url('img/slide_1_1920x425.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel_text_bg">
                        <h4>All You Heros in a place</h4>
                        <p>Find you´re favorite hero and .....</p>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="{{ url('img/slide_2_1920x425.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel_text_bg">
                        <h4>All You Villains in a place</h4>
                        <p>Find you´re favorite villain.</p>
                    </div>
                </div>
                </div>
           
            </div>
            <a class="carousel-control-prev" href="#carousel_characters" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_characters" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>
        <div class="content_search">
            <div class="blackBar">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-10 search_col align-self-center">
                    <div class="search_bar">

                        
                     <form id="search_form" name="search_form" action="{{route ('search.by_name')}}"  method="GET">
                          {{ csrf_field() }}
                            <input class="input_search" type="text" name="input_search" placeholder="Enter search text..."  name="name_search">
                            <div lass="search_link">
                                <button type="submit" class="btn_search">
                                    
                                        <i class="fas fa-search" onclick=""></i>
                                    
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div> 
   </div>
</div>
<div class="container">

   <div class="row justify-content-center align-items-center">
        @foreach ($results as $data)

            <a class="text-decoration-none link_container" href="{{route('char_details',[ 'id' => $data['id']]) }}">
                <div class="col-md-2 col-sm-4 lst_description_cont ">
                    <div class="desc_box_content p-0">
                        <div class="img_box_cont">
                                 <img src="{{$data['img']}}">
                        </div>
                        <div class="text_box_cont">
                            <div class="animation_text_box">
                        
                            </div>
                            <div class="text_box">
                                <span class="name">{{$data['name']}}</span><br>
                                <span>{{$data['gender']}}</span>
                            </div>
                            
                        </div>
                   </div>
               </div>
            </a>
        @endforeach
       
        {{-- <div class="table-responsive mt-3 mb-2">
            <table class="table table-bordered table-sm" id="table_res" width="100%" >
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                </tr>
            </table>
        </div> --}}
    
</div>
    <div class="row">
        <div class="col-md-2 col-sm-4 description_content">
            <div class="description">
                <img src="">
           </div>
       </div>
       <div class="col-md-2 col-sm-4 description_content">
            <div class="description">
                <img src="">
           </div>
       </div>
       <div class="col-md-2 col-sm-4 description_content">
            <div class="description">
                <img src="">
           </div>
       </div>
       <div class="col-md-2 col-sm-4 description_content">
            <div class="description">
                <img src="">
           </div>
       </div>
       <div class="col-md-2 col-sm-4 description_content">
            <div class="description">
                <img src="">
           </div>
       </div>
       <div class="col-md-2 col-sm-4 description_content">
            <div class="description">
                <img src="">
           </div>
       </div>
    </div>
</div>
    

@endsection