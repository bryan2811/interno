<div class="{{ $block->classes }}">
  <div class="w-full mb-4 bg-cover bg-no-repeat bg-center h-screen text-secondary lg:rounded-bl-[291px] flex items-center justify-center bg-[url({{ "'" . $background . "'" }})]">
    <div class="container flex flex-col gap-y-4">
      <h2 class="text-4xl leading-none lg:text-[85px] w-full lg:w-2/5">{{ $title }}</h2>
      <p class="w-full text-xl lg:w-1/2 font-jost">{{ $subtitle }}</p>
      <a class="text-center font-jost text-lg text-white hover:text-primary flex items-center justify-center gap-3 transition-all w-3/5 lg:w-64 bg-secondary rounded-[18px] p-7" href="{{ $ctaLink }}" target="_blank">
        {{ $ctaLabel }}
        <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 8.43542L15.7232 8.29857M10.6182 1.91138L17.1412 8.43436L10.4868 15.0887" stroke="#CDA274" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
