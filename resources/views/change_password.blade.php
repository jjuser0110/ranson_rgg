@extends('layout.app')
@section('head_style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<style>
    .profile-change-password{
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding: 0 10px;
    }

    #form-password{
        max-width: 325px;
    }

    @media only screen and (max-width:768px){
        #form-password{
            max-width: 100%;
            width: 100%;
        }
    }
</style>
@endsection

@section('content')
<section id="profile-wrapper">
    <div class="col col-left">
        @include('layout.profile_menu')
    </div>
    <div class="col col-right">
        <h2 class="title">Change Password</h2>
        <hr>
        <div class="profile-change-password">
            <form id="form-password" enctype="multipart/form-data">
                @csrf
                <div class="input-field">
                    <label>Current Password:</label>
                    <input type="password" name="current_password"  autocomplete="off" required>
                </div>

                <div class="input-field">
                    <label>New Password:</label>
                    <input type="password" name="new_password"  autocomplete="off" required>
                </div>

                <div class="input-field">
                    <label>Re-enter New Password:</label>
                    <input type="password" name="re_new_password"  autocomplete="off" required>
                </div>
                <button type="submit" class="btn btn-submit" onclick="showLoading()">Update</button>
            </form>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $('#link-change-password').addClass('active');
        $('#form-password').on('submit', function(event){
            event.preventDefault();
            showLoading();
            const formData = new FormData(this);
            const btn = $(this).find('button[type="submit"]');
            $(btn).prop("disabled", true);
            $.ajax({
                url: "{{ route('user.new_password') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                success: function(response) {
                    if(response.success == true){
                        setReloadSwal('success','',response.message);
                    }
                    else{
                        setDefaultSwal('error','',response.message);
                    }
                },
                error: function() {
                    setDefaultSwal('error','', "There is something wrong, please try again.");
                },
                complete: function(){
                    $(btn).prop("disabled", false);
                    hideLoading();
                }
            });
        })
    })
</script>
@endsection



