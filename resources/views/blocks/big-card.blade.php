<div class="{{ $block->classes }}">
  <div class="grid items-center justify-center grid-cols-1 big-card xl:grid-cols-2 big-card-block">
    <div class="flex flex-col justify-center h-full gap-12 first-col">
      <h2 class="text-5xl">{{ $title }}</h2>
      <p class="text-lg font-jost">{{ $description }}</p>
      <a href="tel:{{ $phone }}" class="flex items-center phone-information gap-x-4">
        <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="46.5" cy="46.5" r="46.5" fill="#F4F0EC"/>
          <path d="M61.0012 55.0749C59.7796 53.8442 56.8211 52.0482 55.3857 51.3243C53.5164 50.3828 53.3625 50.3059 51.8933 51.3974C50.9133 52.1258 50.2617 52.7766 49.1148 52.532C47.9678 52.2874 45.4754 50.9082 43.2931 48.7329C41.1107 46.5576 39.6514 43.9931 39.4061 42.8501C39.1607 41.7071 39.8222 41.0632 40.5438 40.081C41.5607 38.6964 41.4838 38.4657 40.6145 36.5965C39.9368 35.1427 38.0883 32.2121 36.8529 30.9967C35.5313 29.6914 35.5313 29.9222 34.6798 30.276C33.9865 30.5677 33.3214 30.9222 32.6928 31.3352C31.462 32.1529 30.7789 32.8321 30.3012 33.8528C29.8235 34.8735 29.6089 37.2665 32.0759 41.7478C34.5429 46.2292 36.2737 48.5206 39.8561 52.0928C43.4385 55.6649 46.1931 57.5856 50.2202 59.844C55.2018 62.6339 57.1126 62.09 58.1365 61.6131C59.1604 61.1362 59.8427 60.4593 60.662 59.2286C61.076 58.6011 61.4314 57.9368 61.7235 57.2441C62.0781 56.3957 62.3089 56.3957 61.0012 55.0749Z" stroke="#CDA274" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
        <div class="flex flex-col phone-information__content font-jost">
          <p class="font-bold text-[#4D5053] text-2xl">{{ $phone }}</p>
          <p class="text-xl">Call Us Anytime</p>
        </div>
      </a>
      {{-- Button --}}
      <a class="text-center font-jost text-lg text-white hover:text-primary flex items-center justify-center gap-3 transition-all w-1/3 bg-secondary rounded-[18px] p-7" href="{{ $link }}" target="_blank">
        {{ $link_text }}
        <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 8.43542L15.7232 8.29857M10.6182 1.91138L17.1412 8.43436L10.4868 15.0887" stroke="#CDA274" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
    <div class="second-col">
      <img class="rounded-tr-[326.5px] rounded-bl-[123px] object-cover w-full max-h-[650px]" src="{{ $image }}}" alt="">
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
