<div class="w-full bg-[center_top_-2rem] bg-no-repeat bg-cover print-scan-hero bg-hero-image flex flex-col justify-between">
  <div class="container flex items-center w-full mx-auto hero-content pt-14">
    <div class="header-navigation-container space-x-[126px] flex w-full">
      <a class="grow" href="/">
        <img src={{ $printscan_logo }} alt="PrintScan Logo">
      </a>
      <div class="flex items-center header-navigation-content space-x-14 xl:text-xs 2xl:text-base">
        <x-navigation menuName="Header Menu" themeLocation="primary_navigation" menuClass="text-white font-light space-x-14 flex" />
        <div class="flex space-x-4 header-buttons">
          <a class="button-one rounded-[20px] border-solid border border-white py-[9px] px-4 text-white font-normal hover:border-[#40AE49] transition-all hover:transition-all" href="#">{{ _e( 'Find My Appointment', 'printscan' ) }}</a>
          <a class="button-two rounded-[20px] border-solid border border-white py-[9px] px-4 text-white font-normal hover:border-[#40AE49] transition-all hover:transition-all" href="#">{{ _e( 'Contact', 'printscan' ) }}</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container flex flex-col w-full m-0 pl-[132px] hero-title">
    <h1 class="text-white font-normal text-[85px] w-[35%]">{{ _e( 'Next Generation Identity.', 'printscan' ) }}</h1>
    <div class="grid w-full grid-cols-3 hero_tabs">
      <div class="flex flex-col first-column">
        <p class="text-2xl font-light text-white">{{ _e( 'Secure Solutions.', 'printscan' ) }}</p>
        <p class="text-2xl font-light text-white">{{ _e( 'Trusted Innovation.', 'printscan' ) }}</p>
      </div>
      @foreach($printscan_hero_tabs as $tab)
        <div class="flex flex-col px-[50px] dinamic-tab text-white {{ $loop->index === 0 ? 'border-x border-white' : ''}}">
          <p class="w-4/5 mb-4 text-3xl font-normal">{{ $tab['title'] }}</p>
          <p class="mb-5 text-lg font-light">{{ $tab['subtitle'] }}</p>
          <a class="w-1/2 text-center rounded-[20px] border-solid border text-base uppercase border-white py-[9px] px-4 text-white font-normal hover:border-[#40AE49] transition-all hover:transition-all" href="{{ $tab['link'] }}">Learn More</a>
        </div>
      @endforeach
    </div>
  </div>
</div>