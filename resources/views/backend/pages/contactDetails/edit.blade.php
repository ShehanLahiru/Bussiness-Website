@extends('backend.layouts.app', [
'namePage' => 'contactDetails',
'class' => 'sidebar-mini',
'activePage' => 'contactDetails',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="pull-right">
                    <a href="{{ route('backend.contactDetails.index') }}">
                        <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title"> Update Main Images</h4>
                </div>
                <div class="card-body">
                    <form id="riddle_update" method="post"
                        action="{{ route('backend.contactDetails.update', $contactDetail->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('backend.alerts.success')
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="email">{{__(" Email")}}</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{ old('email',$contactDetail->email) }}">
                                    @include('backend.alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="contact_no">{{__(" Contact No")}}</label>
                                    <input type="text" name="contact_no" class="form-control"
                                        value="{{ old('contact_no',$contactDetail->contact_no) }}">
                                    @include('backend.alerts.feedback', ['field' => 'contact_no'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="address">{{__("Address")}}</label>
                                    <input type="textarea" name="address" class="form-control"
                                        value="{{ old('address',$contactDetail->address) }}">
                                    @include('backend.alerts.feedback', ['field' => 'address'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="social_media_link">{{__("Facebook Profile Link")}}</label>
                                    <input type="textarea" name="social_media_link" class="form-control"
                                        value="{{ old('social_media_link',$contactDetail->social_media_link) }}">
                                    @include('backend.alerts.feedback', ['field' => 'social_media_link'])
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit"
                                class="btn btn-primary float-right btn-round">{{__('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <!-- Laravel Javascript Validation -->--}}
{{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
{{-- {!! JsValidator::formRequest('App\Http\Requests\CMS\AdCreateRequest', '#traditional_song_update') !!}--}}
@endsection
