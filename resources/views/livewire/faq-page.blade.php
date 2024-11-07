<main>
<section class="section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
          <h1>Frequently Asked Questions</h1>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="accordion accordion-border-bottom" id="accordionFAQ">
        @forelse($faqs as $faq)  
        <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 @if($loop->first) active @endif"
              id="heading-{{$loop->iteration}}" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-{{$loop->iteration}}" aria-expanded="@if($loop->first)true @else false @endif"
              aria-controls="collapse-{{$loop->iteration}}">
			  {{ $faq->question }}
            </h2>
            <div id="collapse-{{$loop->iteration}}"
              class="accordion-collapse collapse border-0 @if($loop->first) show  @endif"
              aria-labelledby="heading-{{$loop->iteration}}" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content">{!! $faq->answer !!}</div>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
  </div>
</section>
</main>
