<div class="{{ $block->classes }}">
  <div class="w-full mb-4 bg-cover bg-no-repeat bg-center h-screen text-secondary xl:rounded-bl-[291px] flex items-center justify-center bg-[url({{ "'" . $background . "'" }})]">
    <div class="container flex flex-col gap-y-4">
      <h2 class="text-4xl leading-none xl:text-[85px] w-full xl:w-2/5">{{ $title }}</h2>
      <p class="w-full text-xl xl:w-1/2">{{ $subtitle }}</p>
      <a class="text-center text-lg text-white w-1/6 bg-secondary rounded-[18px] p-7" href="{{ $ctaLink }}" target="_blank">{{ $ctaLabel }}</a>
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
