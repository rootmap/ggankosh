@extends('main')

@section('content')
<section class="subscribe-section" style="background-image: url(images/background/6.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="title-column col-md-7 col-sm-12 col-xs-12">
                <h2>আনসাবস্ক্রাইব করুন</h2>
            </div>

            <div class="form-column col-md-5 col-sm-12 col-xs-12">
                <div class="subscribe-form">
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" name="mobile_number" value="" placeholder="আপনার মোবাইল নম্বর প্রবেশ করুন" required="">
                            <button type="submit" class="theme-btn btn-style-one">আনসাবস্ক্রাইব</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection