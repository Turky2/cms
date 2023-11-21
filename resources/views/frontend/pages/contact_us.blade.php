@extends('frontend.layouts.app')
@section('title', 'Contact us')

@includeIf('frontend.layouts.header')
@section('meta')
    <meta name="description" content="asassa">
@endsection
@section('css')
<style type="text/css">
    .error{
        color: #e55151 !important;
        margin-bottom: 0.5rem;
    }
    .non-bullet-list{
        list-style: none;
        margin-left: 0px;
        padding-left: 0px;
    }
</style>
@endsection
@section('content')
<!------------------------------>
<!--Section Name---------------->
<!------------------------------>
<div class="block-27 space-between-blocks">
    
    <div class="block-27__row d-block d-lg-flex row">
        <div class="block-27__image-column container col-lg-6 col-md-9 col-sm-9"
            style="background-image: url(zxdc);">        
        </div>
    </div>
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 px-4 px-xl-5 py-3 text-center">
                <form class="contact-form text-center" id="contact_form">
                    <div class="contact-form__header mb-5">
                        <h6 class="contact-form__title mb-3">
                            Contact Us
                        </h6>
                        <p class="contact-form__paragraph mb-0 mx-auto">
                              "We're happy to receive your message. Ask us anything, we'll respond as soon as possible."
                            
                        </p>
                    </div>
                    <div class="alert mt-4 alert-primary enquire_response_alert" role="alert" style="display:none;">
                        <span class="enquire_response"></span>
                    </div>
                    <input type="text" name="name" class="contact-form__input" placeholder="Full Name" required>
                    <input type="number" name="mobile" class="contact-form__input" placeholder="Mobile" required>
                    <input type="email" name="email" class="contact-form__input" placeholder="Email" required>
                    <textarea class="contact-form__input" name="message" placeholder="Message" required></textarea>
                    <button id="submit-btn" class="btn btn-primary w-100">
                        SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
        
            <div class="row flex-row-reverse">
                <div class="col-lg-6 px-4 px-xl-5 py-3">
                        <h4 class="pt-3">
                            Call <strong>Us</strong>
                        </h4>
                        <ul class="non-bullet-list mt-2">
                                <li>
                                    <i class="fas fa-phone"></i> &nbsp;
                                    <strong class="text-dark">
                                    </strong> &nbsp;
                                    <a href="tel:01098749193" class="text-dark text-decoration-none" target="_blank">

asdsa                                </a>
                                </li>
                        </ul>
                        <h4 class="pt-3">
                            Mail <strong>Us</strong>
                        </h4>
                        <ul class="non-bullet-list mt-2">
                                <li>
                                    <i class="fas fa-envelope"></i> &nbsp;
                                    <strong class="text-dark">
sdasdasa                                    </strong> &nbsp;
                                    <a href="mailto:sdsd" target="_blank" class="text-dark text-decoration-none">
adasdssdsdsdsdsdsd                                    </a>
                                </li>
                        </ul>
                </div>
            </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    new Sticky("[sticky]");
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#contact_form").validate({
            submitHandler: function(form, e) {
                if ($('#contact_form').valid()) {
                    let data = $('form#contact_form').serialize();
                    $("#submit-btn").attr('disabled', true);
                    $.ajax({
                        method: 'POST',
                        dataType: "json",
                        url: "",
                        data:data,
                        success: function(result){
                            $("#submit-btn").attr('disabled', false);
                            if (result.success) {
                                $('form#contact_form').trigger("reset");
                                $('form#enquire_now_form').trigger("reset");
                                $(".enquire_response_alert").css({ 'display' : '' });
                                $(".enquire_response").text(result.msg);
                            } else {
                                $(".enquire_response_alert").css({ 'display' : '' });
                                $(".enquire_response").text(result.msg);
                            }
                        }
                    });
                }
            }
        });
    });
</script>
@endsection