<div class="question">
    <div class="faqs-content">
        @if(isset($faqs))
            @foreach($faqs as $faq)
                <div class="question-item">
                    <div class="question-title" data-answer="{{$faq->title}}">
                        <div class="question-title-text">
                            <h3>{{$faq->title}}</h3>
                        </div>
                        <div class="question-title-icon" data-answer="{{$faq->title}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                                <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="question-content" data-answer="{{$faq->title}}">
                        {!!$faq->description!!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
    