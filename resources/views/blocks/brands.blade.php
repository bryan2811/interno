<div class="{{ $block->classes }}">
  <div class="reviews-block flex flex-col lg:flex-row space-y-8 xl:space-y-0 xl:space-x-28 items-center">
    @foreach($brands as $brand)
      <img class="object-contain w-full max-h-28" src="{{ $brand['image'] }}" alt="{{ $brand['name'] }} Logo Image">
    @endforeach
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
