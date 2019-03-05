@extends('default.layouts.backend')

@section('title')
    Contact-us
@endsection

@section('content')
    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')


            <form action="{{ route('contact-us.update', ['id' => 1]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="map_location">Map location</label>
                    <input type="text" name="map_location" value="{{ $contact->map_location }}" class="form-control"
                           id="map_location" placeholder="Location">
                </div>

                <div class="form-group">
                    <label for="social_media">Social media's</label>
                    <input class="form-control" name="social_media" value="{{ $contact->social_media }}"
                           id="social_media" placeholder="Social Media's">
                </div>

                <div class="form-group">

                    <div class="row">
                        <div class="col-lg-2">
                            <label for="social_media">Facebook</label>
                            <input type="text" class="form-control" value="{{ isset($social->facebook) }}" name="facebook">
                        </div>

                        <div class="col-lg-2">
                            <label for="social_media">Instagram</label>
                            <input type="text" class="form-control" value="{{ isset($social->instagram) }}" name="instagram">
                        </div>

                        <div class="col-lg-2">
                            <label for="social_media">Twitter</label>
                            <input type="text" class="form-control" value="{{ isset($social->twitter) }}" name="twitter">
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="etc">Address, tell ... </label>
                    <textarea class="form-control" name="etc" id="etc">
                        {!! $contact->etc  !!}
                    </textarea>
                </div>

                <input type="hidden" name="id" value="1">

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <script src="/assets/ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('etc');
            </script>

        </div>
    </div>
@endsection

