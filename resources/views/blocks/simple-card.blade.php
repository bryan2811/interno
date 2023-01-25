<div class="{{ $block->classes }}">
  <div class="flex flex-col items-center text-center simple-card">
    <p class="mb-5 text-2xl">{{ $title }}</p>
    <p class="text-xl text-[#4D5053] w-[70%]">{{ $text }}</p>
    <a class="block mt-12 text-lg text-[#4D5053]" href="{{ $link }}" target="_blank">Read More</a>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
