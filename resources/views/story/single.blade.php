@extends('main')

@section('content')
<section class="page-title" style="background-color: coral">
    <div class="auto-container">
        <div class="anim-icons">
            <span class="icon-1 icon-flower-1"></span>
            <span class="icon-2 icon-pencil"></span>
        </div>
        <h1 class="text-sky">{{ $story->category }}</h1>
        <ul class="bread-crumb clearfix">
            <li></li>
            <li></li>
        </ul>
    </div>
</section>

<section class="intro-section">
    <div class="auto-container">
        <p><h3><strong>{{ $story->name }}</strong></h3></p>
        <p>{{ $story->details }}</p>
    </div>
</section>

<div class="sidebar-page-container">
    <div class="auto-container">
        {!! Form::open(['route' => 'result.store', 'method' => 'POST']) !!}
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="content-side col-md-8 col-sm-12 col-xs-12">
                <div class="course-detail">
                    <div class="faqs">
                        <div class="group-title"><h2>প্রশ্ন</h2></div>
                        <ul class="accordion-box">
                            @foreach ($questions as $key=>$question)
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon flaticon-add"></span></div>{{ $question['question'] }}
                                    </div>
                                    <div class="acc-content">
                                        <input type="hidden" name="true_answer[]" value="{{ $question['answer'] }}">
                                        <div class="content">
                                        <div class="radio"><label><input type="radio" id="answer_{{ $key}}_0" name="answer[]" value="{{ $question['option1'] }}"  class="regular-radio"/>{{ $question['option1'] }}</label></div>
                                            <div class="radio"><label><input type="radio"  id="answer_{{ $key}}_1" name="answer[]" value="{{ $question['option2'] }}"  class="regular-radio"/>{{ $question['option2'] }}</label></div>
                                            <div class="radio"><label><input type="radio" id="answer_{{ $key}}_2" name="answer[]" value="{{ $question['option3'] }}"  class="regular-radio"/>{{ $question['option3'] }}</label></div>
                                            <div class="radio"><label><input type="radio" id="answer_{{ $key}}_3" name="answer[]" value="{{ $question['option4'] }}"  class="regular-radio"/>{{ $question['option4'] }}</label></div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::submit('জমা দিন', ['class' => 'theme-btn btn-style-one']) }}
        {!! Form::close() !!}
    </div>
</div>
@endsection