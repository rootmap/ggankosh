@extends('main')

@section('content')
<section class="info-section">
    <div class="auto-container">
        <div class="row clearfix">
            @foreach ($stories as $story)
                <div class="info-block col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><img src="" alt=""></div>
                        <h3><a href="{{ route('story.details', ['id' => $story->id]) }}">{{ $story->name }}</a></h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection