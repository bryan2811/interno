<div class="{{ $block->classes }}">
  <div class="projects-block">
    <div class="projects-block-content__title mb-24 flex flex-col items-center gap-4">
      <h2 class="text-5xl text-center title capitalize">{{ $title }}</h2>
      <span class="subtitle font-jost text-xl">{{ $subtitle }}</span>
    </div>
    <div class="projects-block-content grid lg:grid-cols-2 gap-24">
      @foreach($projects as $project)
        <div class="projects-block-content__card flex flex-col gap-y-7 cursor-pointer hover:scale-95 ease-in duration-500">
          <img
            class="w-full object-cover object-center max-h-[548px] {{
              ($loop->iteration % 4 == 1) ? 'rounded-tr-[80px]' :
              (($loop->iteration % 4 == 2) ? 'rounded-tl-[80px]' :
              (($loop->iteration % 4 == 3) ? 'rounded-br-[80px]' :
              (($loop->iteration % 4 == 0) ? 'rounded-bl-[80px]' : '')))
            }}"
            src="{{ $project['image'] }}"
            alt=""
          >
          <div class="projects-block-content__card__text-content flex items-center justify-between">
            <div class="flex flex-col text">
              <p class="project-name text-2xl">{{ $project['name'] }}</p>
              <p class="project-category font-jost text-xl">{{ $project['category'] }}</p>
            </div>
            <a href="#">
              <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="35" cy="35" r="35" fill="#F4F0EC"/>
                <path d="M32 44L40 35L32 26" stroke="#292F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
