@extends('frontend/app')

@section('content')
    <div class="bg"></div>
    <div class="container home">
        <div class="row">
            <div class="col col-6">
                <h1>
                    აღმოაჩინე შენი პროდუქტის ინგრედიენტები ჩვენს პორტალზე
                </h1>
                <form class="form-inline">
                    <div class="flex-wrap">
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="მოძებნე პროდუქტი სახელის მიხედვით">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">ძიება</button>
                </form>
            </div>
            <div class="col col-6">
                <div class="main-image" style="background-image: url('{{ asset('resources/img/main-img.png') }}')"></div>
            </div>
        </div>
    </div>


    <div class="container main-categories block">
        <div class="row">
            <h2>აირჩიე კატეგორიის მიხედვით</h2>
            <div class="content">
                <a href="#" class="btn btn-secondary">სახის გამწმენდი</a>
                <a href="#" class="btn btn-secondary">ტონერი</a>
                <a href="#" class="btn btn-secondary">დამატენიანებელი</a>
                <a href="#" class="btn btn-secondary">მზისგან დამცავი</a>
                <a href="#" class="btn btn-secondary">სახის ნიღაბი</a>
                <a href="#" class="btn btn-secondary">ამქერცლავი</a>
                <a href="#" class="btn btn-secondary">თვალის მოვლა</a>
                <a href="#" class="btn btn-secondary">თმის მოვლა</a>
                <a href="#" class="btn btn-secondary">ტანის მოვლა</a>
                <a href="#" class="btn btn-secondary">ტუჩის მოვლა</a>
            </div>
        </div>
    </div>

    <div class="container feature-brands block">
        <div class="row">
            <h2>აღმოაჩინე პროდუქტები ტრენდული ბრენდებიდან</h2>
            <div class="block-link">
                <a href="#" class="page-link">ყველა ბრენდის ნახვა</a>
            </div>
            <div class="content">
                @for($i=1; $i<9; $i++)
                    <div>
                        <a href="#">
                            <img src="{{ asset('resources/img/brands/image '.$i.'.png') }}" alt="">
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>


    <div class="container-fluid compare-block">
        <div class="container">
            <div class="row">
                <div class="content">
                    <h2>შეადარე პროდუქტი</h2>
                    <form class="form-inline">
                        <div class="d-flex flex-wrap">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="აირჩიე პროდუქტი">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="დაამატე სხვა პროდუქტი">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">შედარება</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container block products-carousel">
        <div class="row">
            <h2>ბოლოს დამატებული პროდუქტები</h2>
            <div class="block-link">
                <a href="#" class="page-link">ყველა პროდუქტის ნახვა</a>
            </div>
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @for($i=1; $i<5; $i++)
                                <div class="carousel-item {{ $i==1 ? 'active' : '' }}">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('resources/img/products/Mask group-'.$i.'.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h3>ნიაცინამიდის შრატი</h3>
                                                <div class="stars">
                                                    <img src="{{ asset('resources/img/star-filled.svg') }}" alt="">
                                                    <img src="{{ asset('resources/img/star-filled.svg') }}" alt="">
                                                    <img src="{{ asset('resources/img/star-filled.svg') }}" alt="">
                                                    <img src="{{ asset('resources/img/star-filled.svg') }}" alt="">
                                                    <img src="{{ asset('resources/img/star-unfilled.svg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
