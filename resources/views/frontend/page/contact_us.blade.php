@include('frontend.layouts.head')
<div class="site-blocks-cover inner-page overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
                <h1 class="mb-5">Get In Touch</h1>
            </div>
        </div>
    </div>
</div>
<div class="panel-header panel-header-sm">
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Enter Your Message Here</h4>
                    </div>
                    <div class="card-body">
                        <form id="riddle_create" method="post" action="{{ route('backend.customers.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @include('backend.alerts.success')
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="name">{{__("Name")}}</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                        @include('backend.alerts.feedback', ['field' => 'name'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="email">{{__("Email")}}</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                        @include('backend.alerts.feedback', ['field' => 'email'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="contact_no">{{__("Contact Number")}}</label>
                                        <input type="text" name="contact_no" class="form-control"
                                            value="{{ old('contact_no') }}">
                                        @include('backend.alerts.feedback', ['field' => 'contact_no'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="message">{{__("Meassage")}}</label>
                                        <input type="textarea" name="message" class="form-control"
                                            value="{{ old('message') }}">
                                        @include('backend.alerts.feedback', ['field' => 'message'])
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary btn-round">{{__('Submit')}}</button>
                            </div>
                            <hr class="half-rule" />
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">304, KANDY ROAD,KURUNEGALA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>
            </div>

          </div>
    </div> --}}
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
