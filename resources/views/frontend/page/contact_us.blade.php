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
    @include('backend.alerts.success')
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Enter Your Message Here</h4>
                    </div>
                    <div class="card-body">
                        <form id="riddle_create" method="post" action="{{ route('backend.customers.store') }}"
                            enctype="multipart/form-data">
                            @csrf
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
            <div class="col-md-12 col-lg-6 mb-5">

                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7911.639209878227!2d80.35533494470852!3d7.485162028296652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae33a18c84dd003%3A0xdf4c90fbcbb7ef32!2sKurunegala%20Town%20Central%2C%20Kurunegala!5e0!3m2!1sen!2slk!4v1597719729928!5m2!1sen!2slk"  width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>

            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
