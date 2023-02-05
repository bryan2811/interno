<div class="{{ $block->classes }}">
  <div class="reviews-block">
    <div class="reviews-block-content bg-tertiary rounded-[70px] px-6 py-20">
      <h2 class="text-5xl text-center mb-9">{{ $title }}</h2>
      <div class="grid grid-cols-1 gap-5 xl:grid-cols-3">
        @foreach($reviews as $review)
          <div class="px-8 bg-white py-14 review-card rounded-3xl">
            <div class="flex items-center photo-name gap-x-6">
              <img loading="lazy" class="w-[77px] h-[77px] object-cover object-right rounded-[100%]" src="{{ $review['image'] }}" alt="">
              <div class="flex flex-col name-location">
                <p class="text-2xl">{{ $review['name'] }}</p>
                <p class="text-xl font-jost">{{ $review['location'] }}</p>
              </div>
            </div>
            <p class="text-xl mt-8 font-jost text-[#4D5053]">{{ $review['review'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
