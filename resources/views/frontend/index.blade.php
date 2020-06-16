@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="row mb-4 text-center text-uppercase text-lg-center">
    <div class="col">
        <h1 class="text-success" style="font-weight: 800 !important">@lang('strings.frontend.welcome_to',
            ['place' =>
            app_name()])</h1>
    </div>
</div>
<div class="row mb-4">
    <div class="col">
        <p class="text-lg-center text-secondary " style="font-weight: 400">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Vitae
            ipsam aut dicta harum, in voluptatum? Alias soluta suscipit reiciendis, voluptatum dicta cupiditate illo
            nemo nulla repudiandae vel maxime, tenetur asperiores.
            Vitae ex, quos suscipit odio soluta, fugiat saepe vel alias possimus doloremque unde in, magni sequi
            exercitationem repudiandae similique corrupti distinctio animi officia. Ad veritatis, earum quis delectus
            dicta deserunt.
            Rem voluptas aspernatur magnam possimus molestias culpa, voluptatem blanditiis ab dolorem neque, sapiente
            deserunt quae iusto deleniti, ex illo illum beatae temporibus veniam veritatis. Quam quas aperiam veniam
            repellendus possimus?</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/biology.png')}}" alt="">
    </div>
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/chemistry2.png')}}" alt=""></div>
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/glases.png')}}" alt=""></div>
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/math.png')}}" alt=""></div>
</div>
<div class="row mb-5">
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/maths.png')}}" alt=""></div>
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/others.png')}}" alt=""></div>
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/physics2.png')}}" alt=""></div>
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/practical.png')}}" alt=""></div>
</div>
<div class="row mb-5">
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/science2.png')}}" alt=""></div>
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/teachers.png')}}" alt=""></div>
    <div class="col-md" style="width: 200px;height:200px"><img class="image"
            src="{{url('/img/frontend/books/teachers2.png')}}" alt=""></div>
</div>

<hr style="width: 100%">
@include('backend.includes.footer')
{{-- <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-home"></i> @lang('navs.general.home')
                </div>
                <div class="card-body">
                    @lang('strings.frontend.welcome_to', ['place' => app_name()])
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <div class="row mb-4">
        <div class="col">
            <example-component></example-component>
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fab fa-font-awesome-flag"></i> Font Awesome @lang('strings.frontend.test')
                </div>
                <div class="card-body">
                    <i class="fas fa-home"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest"></i>
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row--> --}}
@endsection