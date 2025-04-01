@extends('layout.app')
@section('head_style')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<section id="profile-wrapper">
    <div class="col col-left">
        @include('layout.profile_menu')
    </div>
    <div class="col col-right">
        <h2 class="title">Profile</h2>
        <hr>
        <div class="profile-information">
            <div>
                <label>Username:</label>
                <span>{{ Auth::user()->username }}</span>
            </div>

            <div>
                <label>Email:</label>
                <span>{{ Auth::user()->email }}</span>
            </div>

            <div>
                <label>Created At:</label>
                <span>{{ Auth::user()->created_at }}</span>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $('#link-profile').addClass('active');
    });
</script>
@endsection



