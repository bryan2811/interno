<div class="{{ $block->classes }}">
  <div class="flex flex-col items-center text-center simple-card">
    <p class="mb-5 text-2xl">{{ $title }}</p>
    <p class="text-xl text-[#4D5053] w-[70%] font-jost">{{ $text }}</p>
    <a class="mt-12 font-jost gap-3 flex items-center justify-center text-lg text-[#4D5053] hover:text-secondary transition-all" href="{{ $link }}" target="_blank">
      Read More
      <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.92969 8.43542L15.6529 8.29857M10.5479 1.91138L17.0708 8.43436L10.4165 15.0887" stroke="#CDA274" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
      </svg>
    </a>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
