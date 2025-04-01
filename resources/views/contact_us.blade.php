@extends('layout.app')
@section('head_style')
<style>
    section .row{
        display: flex;
        max-width: 1024px;
        margin: 100px auto;
    }

    section .row .col{
        width: 50%;
    }

    section .row .col img{
        width: 100%;
        max-width: 500px;
    }

    section .row.contact{
        align-items: center;
  
    }

    section .row.contact .col{
        align-items: center;
        padding: 15px;
    }

    section .row.contact .form-wrapper{
        background: #f1f1f1;
        border-radius: var(--radius);
    }

    section .row.contact input{
        background: white;
    }

    section .row.contact textarea{
        border-radius: var(--radius);
        border: none;
        resize: vertical;
        font-size: 15px;
        line-height: 1.3;
        padding: 10px;
    }

    section .row.contact .col h2{
        margin-bottom: 15px;
    }

    @media only screen and (max-width: 768px){
        section .row{
            flex-wrap: wrap;
            margin: 50px auto;
        }
    
        section .row .col {
            width: 100%;
        }

        section .row.contact .col img{
            width: 80%;
            margin: 0 10%;
        }

        section .row.contact .col h2{
            margin-bottom: 10px;
        }

        section .row.contact .col h2, section .row.contact .col p{
            text-align: center;
        }
    }
</style>
@endsection
@section('content')
<!-- ABOUT US -->
<section>
    <div class="row contact">
        <div class="col"><img src="{{ asset('img/contact.png') }}"/></div>
        <div class="col form-wrapper">
        <form id="form-contact" enctype="multipart/form-data">
            <h2>Contact Us</h2>
                        <div class="input-field">
                            <label>Name:</label>
                            <input type="text" name="name" placeholder="Your name" autocomplete="off" required>
                        </div>

                        <div class="input-field">
                            <label>Email:</label>
                            <input type="email" name="email" placeholder="e.g: example@mail.com" autocomplete="off" required>
                        </div>

                        <div class="input-field">
                            <label>Contact No (Optional):</label>
                            <input type="text" name="contact" placeholder="0168883333" autocomplete="off">
                        </div>

                        <div class="input-field">
                            <label>Message:</label>
                            <textarea name="message" rows='3'></textarea>
                        </div>
                        
                      
                        <button type="submit" class="btn btn-submit" onclick="showLoading()">Submit</button>
                
                    </form>
    
        </div>
    </div>

</section>
<script>
    $(document).ready(function(){
        console.log('eqweq');
        $('#form-contact').on('submit', function(event){
            event.preventDefault();
            showLoading();
            const formData = new FormData(this);
            const btn = $(this).find('button[type="submit"]');
            $(btn).prop("disabled", true);
            $.ajax({
                url: "{{ route('submit_contact') }}",
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
    });
</script>
@endsection