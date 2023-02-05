{{-- @include('sections.mobile-navigation')

<div class="w-full bg-[center_top_-2rem] bg-no-repeat bg-cover print-scan-hero bg-hero-image flex flex-col justify-between">
  <div class="container lg:flex items-center w-full mx-auto hero-content pt-14 hidden">
    <div class="header-navigation-container space-x-[126px] flex w-full">
      <a class="grow" href="/">
        <img src={{ $printscan_logo }} alt="PrintScan Logo">
      </a>
      <div class="lg:flex items-center header-navigation-content space-x-14 xl:text-xs 2xl:text-base hidden">
        <x-navigation menuName="Header Menu" themeLocation="primary_navigation" menuClass="text-white font-light space-x-14 flex" />
        <div class="xl:flex space-x-4 header-buttons hidden">
          <a class="button-one rounded-[20px] border-solid border border-white py-[9px] px-4 text-white font-normal hover:border-[#40AE49] transition-all hover:transition-all" href="#">{{ _e( 'Find My Appointment', 'printscan' ) }}</a>
          <a class="button-two rounded-[20px] border-solid border border-white py-[9px] px-4 text-white font-normal hover:border-[#40AE49] transition-all hover:transition-all" href="#">{{ _e( 'Contact', 'printscan' ) }}</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container flex flex-col w-full m-0 xl:pl-[132px] hero-title xl:pb-[84px] mx-auto py-[2rem] xl:py-0">
    <h1 class="text-white font-normal text-[35px] xl:text-[85px] xl:w-[35%] text-center xl:text-left w-full xl:pt-[140px] xl:pb-[113px]">{{ _e( 'Next Generation Identity.', 'printscan' ) }}</h1>
    <div class="grid w-full grid-cols-1 lg:grid-cols-3 hero_tabs lg:items-center xl:items-start lg:py-8 xl:py-0">
      <div class="flex flex-col first-column text-center xl:text-left">
        <p class="text-2xl font-light text-white">{{ _e( 'Secure Solutions.', 'printscan' ) }}</p>
        <p class="text-2xl font-light text-white">{{ _e( 'Trusted Innovation.', 'printscan' ) }}</p>
      </div>
      @foreach($printscan_hero_tabs as $tab)
        <div class="flex flex-col px-[50px] dinamic-tab text-white py-8 xl:py-0 {{ $loop->index === 0 ? 'relative tab-w-borders' : ''}}">
          <p class="xl:w-4/5 mb-4 text-3xl font-normal text-center xl:text-left w-full">{{ $tab['title'] }}</p>
          <p class="mb-5 text-lg font-light text-center xl:text-left">{{ $tab['subtitle'] }}</p>
          <a class="xl:w-1/2 w-full text-center rounded-[20px] border-solid border text-base uppercase border-white py-[9px] px-4 text-white font-normal hover:border-[#40AE49] transition-all hover:transition-all" href="{{ $tab['link'] }}">Learn More</a>
        </div>
      @endforeach
    </div>
  </div>
</div> --}}
