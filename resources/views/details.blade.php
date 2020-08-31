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
                        <input class="input_search" type="text" placeholder="Enter search text...">
                        <a class="search_link" href="">
                            <div class="icon_circle">
                                <i class="fas fa-search" onclick="">
                                </i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row align-items-center detail_content" >

    <div class="col-md-6 col-sm-12 mx-auto text-center img_detail">
        <img src="{{ url('img/thor.png') }}" >
    </div>

    <div class="col-md-6 col-sm-12 mx-auto">
        <div id="alias_name">
            <span id="alias">THOR</span><br>
            <span id="name">Thor Odison</span>
        </div>

        <div class="description_content">
            <div class="description">
                lo asado pasado es lo que tu quieras desde siempre asi que no me estes molestndo pcoidcsdfsdfg s rtsdf dergfdty d htfrg fguh yfg hyth gf  hyufg yft hgyu hyftgj ft hy drh gdfh fg ghghh ft jftjgfghgjhh tyhew fgdj iytjhul kdydfj ki ftg ldfghy
           </div>
       </div>
    </div>
</div>
 


    

@endsection