@include('frontend.layouts.head')

<div class="slide-one-item home-slider owl-carousel">
    @foreach ($mainImages as $mainImage )
    <div class="site-blocks-cover overlay" style="background-image: url({{$mainImage->image_url}});" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center text-center image-details">
                <div class="col-md-6">
                    <h1 class="head-topic">Welcome</h1>
                    <h2 class="sub-topic">Solid Water Systems</h2>
                </div>
                <div class="col-lg-10 col-md-12">
                    <p class="page-para">
                        {{ $mainImage->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="site-blocks-cover overlay" style="background-image: url(images/1.jpeg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center text-center image-details">
                <div class="col-md-6">
                    <h1 class="head-topic">Welcome</h1>
                    <h2 class="sub-topic">Solid Water Systems</h2>
                </div>
                <div class="col-lg-10 col-md-12">
                    <p class="page-para">
                        Solid Water Systems is Sri Lanka's one of the premier water treatment providers.
                        We can maintain any kind of wastewater treatment plant and We provide full services to any type of reverse osmosis plant.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="site-section">
    <div class="container">
        <div class="row no-gutters align-items-stretch h-100">
            @foreach ($projects as $project )
            <div class="col-md-6 col-lg-6 mb-6">
                <div class="post-entry bg-white">
                    <div class="image">
                        <img src={{  asset($project->image_url) }} alt="Image" class="img-fluid" style="height: 500px">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-main">{{ $project->title }}</h2>
                        <h5 class="text-details">{{ $project->description }}
                            <p class="mb-0"><a href="{{ route('project') }}" class=""><small
                                        class="text-uppercase font-weight-bold ">Read
                                        More</small></a></p>
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-6 mb-6">
                <div class="post-entry bg-white">
                    <div class="image">
                        <img src="images/7.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-main">Lorem ipsum dolor sit amet</h2>
                        <h5 class="text-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error
                            perspiciatis odit ullam officia.
                            <p class="mb-0"><a href="{{ route('project') }}" class=""><small
                class="text-uppercase font-weight-bold">Read
                More</small></a></p>
            </h5>
        </div>
    </div>
    {{-- </div> --}}

</div>
</div>
</div>
@include('frontend.layouts.footer')
