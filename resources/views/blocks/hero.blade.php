<div class="{{ $block->classes }}">
  <div class="w-full bg-cover bg-no-repeat bg-center h-screen text-secondary rounded-bl-[291px] flex items-center justify-center bg-[url({{"'". $background . "'"}})]">
    <div class="flex flex-col w-1/2">
      <h2 class="text-[85px]">{{ $title }}</h2>
      <p class="text-xl">{{ $subtitle }}</p>
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
