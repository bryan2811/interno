<div class="{{ $block->classes }}">
  <div class="reviews-block flex space-x-28 items-center">
    @foreach($brands as $brand)
      <img class="object-contain w-full max-h-28" src="{{ $brand['image'] }}" alt="{{ $brand['name'] }} Logo Image">
    @endforeach
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
