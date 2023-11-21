@extends('frontend.layouts.app2')
@section('title', 'Contact us')

@section('meta')
    <meta name="description" content="asassa">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('bootstrap/bootstrap.css')}}">

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

    <div class="container">
    <section class="section pb-0" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-detail text-center">
                            <div class="icon">
                            <img src="{{asset('bootstrap/1.png')}}" style="width: 120px;height:150px"  />
                            </div>
                            <div class="content mt-4">
                                <h6 class="title text-uppercase fw-bold">Phone</h6>
                                <p class="text-muted">Promising development turmoil inclusive education transformative community</p>
                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <img src="{{asset('bootstrap/e.png')}}" style="width: 120px;height:150px" />
                            </div>
                            <div class="content mt-4">
                                <h6 class="title text-uppercase fw-bold">Email</h6>
                                <p class="text-muted">Promising development turmoil inclusive education transformative community</p>
                                <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                            <img src="{{asset('bootstrap/l.png')}}" style="width: 120px;height:150px" />
                            </div>
                            <div class="content mt-4">
                                <h6 class="title text-uppercase fw-bold">Location</h6>
                                <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                                <a href="#" class="video-play-icon text-primary">USA</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        <div class="row col-md-12 my-5">
        <div  class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.8615395400593!2d39.6168415!3d24.455588699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15bdbfa40ca942fb%3A0xc522c5916d8cf57c!2z2LTYsdmD2Kkg2KfYqNiv2Kcg2KfZhNiv2YjZhNmK2KkgLSDYqNix2YbYp9mF2Kwg2YXZh9in2YUg2KfZhNiz2K3Yp9io2Yo!5e0!3m2!1sar!2ssa!4v1700346417562!5m2!1sar!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        <div class="col-md-6" >
            <form>
            <div class="mb-3">
    <label class="form-label float-end">الاسم</label>
    <input type="text" class="form-control" id="exampleInputEmail1" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label float-end">الايميل</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label float-end">رسالتك</label>
    <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
  </div>
  
  <button  class="btn btn-primary">ارسل</button>
</form>
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

<script src="{{asset('bootstrap/bootstrap.js')}}"></script>
@endsection