<div class="container w-full main-content">
  {{-- First Block --}}
  <div class="flex xl:py-[83px] first-block flex-col xl:flex-row">
    <div class="w-full text-center xl:text-left xl:w-1/4 mt-3.5">
      <h2 class="text-[#40AE49] font-light text-2xl">{{ _e('Advanced Fingerprinting and Biometrics', 'printscan') }}</h2>
      <span class="border-b border-[#2C58BD] block w-full xl:w-1/2 h-[30px] xl:h-[70px]"></span>
    </div>
    <div class="w-full xl:w-3/4 pb-16 xl:pb-0">
      <p class="text-[#091F40] font-light text-[28px] xl:text-[52px] text-center xl:text-left leading-[46px] xl:leading-[75px] mb-14 w-full pt-8 xl:pt-0">{{ _e('PrintScan is the leader in fingerprinting and biometric innovation with services around the world and convenient locations across the United States.', 'printscan') }}
      </p>
      <a class="uppercase text-white bg-[#40AE49] hover:bg-green-700 transition-all font-normal rounded-[25px] py-3 px-4" href="#">{{ _e('Schedule Appointment', 'printscan') }}</a>
    </div>
  </div>

  {{-- Second Block --}}
  <div class="second-block">
    <div class="second-block__content container py-[135px] lg:px-[4.5rem]">
      <div class="titles mb-14">
        <h2 class="text-[53px] font-light text-white">{{ _e('Secure Identity', 'printscan') }}</h2>
        <h2 class="text-[53px] font-light text-white">{{ _e('Services and Solutions', 'printscan') }}</h2>
      </div>
      @foreach ($printscan_services_tabs as $serviceTab)
        <div class="second-block__box mb-8 xl:mb-0">
          <div class="flex w-full flex-col xl:flex-row {{ $loop->even ? 'xl:flex-row-reverse' : '' }}">
            <img class="h-auto xl:h-[460px] rounded-xl" src="{{ $serviceTab['service_image'] }}" alt="">
            <div class="flex flex-col justify-center text-white pt-8 xl:pt-0 {{ $loop->even ? 'xl:mr-[110px]' : 'xl:ml-[110px]' }}">
              <h3 class="text-4xl font-normal">{{ $serviceTab['title'] }}</h3>
              <p class="font-light text-[18px] w-full xl:w-[55%]">{{ $serviceTab['subtitle'] }}</p>
              <a class="uppercase text-white text-center w-full xl:w-1/3 mt-8 bg-transparent hover:bg-[#4277F0] border-white border transition-all font-normal rounded-[25px] py-3 px-4 second-block__button" href="{{ $serviceTab['link'] }}">Learn More</a>
            </div>
          </div>
        </div>
      @endforeach
      <div class="fingerprinting-near-me text-white xl:mt-48 w-full xl:w-1/2 z-10">
        <h2 class="text-[30px] xl:text-[53px] font-light leading-[65px] mb-8">{{ _e('Fingerprinting Near Me', 'printscan') }}</h2>
        <p class="text-lg font-light">
          {{ _e('Whether you visit one of our many locations or schedule a technician to come to your business or location, PrintScan makes it easy for you to get your fingerprinting and background checks completed and submitted.', 'printscan') }}
        </p>
      </div>
    </div>
  </div>

  {{-- Fingerprinting Near Me - Section --}}
  <div class="w-full near-me-section relative top-[-75px]">
    <div class="near-me-section__content flex xl:gap-6 flex-col xl:flex-row">
      <div class="w-full xl:w-3/5 map-search-section flex flex-col">
        <div class="search-section z-10 border-[0.5px] bg-white rounded-[15px] border-[#2C58BD] px-9 py-8">
          <div class="texts flex text-[#54555B] font-medium text-lg pl-2 mb-2">
            <p class="grow">Where</p>
            <p class="relative xl:left-[-160px]">Search Radius</p>
          </div>
          <div class="search flex flex-col xl:flex-row gap-4 xl:gap-0">
            <div class="grow flex relative flex-col xl:flex-row gap-4 xl:gap-0">
              <input class="outline-none grow border-[5px] border-[#6E94EC] rounded-[25px] px-4 placeholder:font-light placeholder:text-[#54555B] py-1.5" type="text" name="location" id="location" placeholder="Enter Your Location">
              <select class="px-4 py-1.5 text-[#54555B] rounded-[25px] w-full xl:w-[156px] right-0 top-[1px] xl:absolute cursor-pointer border-[5px] border-[#6E94EC] font-light outline-none appearance-none" name="miles" id="miles">
                <option value="5">5 Miles</option>
                <option value="10">10 Miles</option>
                <option value="15">15 Miles</option>
                <option value="20">20 Miles</option>
                <option value="25">25 Miles</option>
                <option value="30">30 Miles</option>
                <option value="35">35 Miles</option>
                <option value="40">40 Miles</option>
                <option value="45">45 Miles</option>
                <option value="50" selected>50 Miles</option>
              </select>
            </div>
            <button type="button" class="near-search-button bg-[#40AE49] py-3 px-6 xl:ml-4 w-full xl:w-auto uppercase text-base font-normal rounded-[25px] text-white transition-all hover:bg-[#40ae49de]">Search</button>
          </div>
        </div>
        <div class="map-section z-10 mt-6">
          <iframe class="rounded-[15px]" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24174.2840317632!2d-74.0478384!3d40.7667422!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25782f1042d95%3A0xba005c0f7421780!2sUnion%20City%2C%20NJ%2007087%2C%20USA!5e0!3m2!1sen!2sar!4v1668355405177!5m2!1sen!2sar" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="w-full xl:w-2/5 locations-section z-10 bg-white pl-9 pr-5 pt-8 pb-6 rounded-[15px] max-h-[600px] border-[0.5px] border-[#2C58BD]">
        <div class="boxes overflow-y-auto xl:h-full flex flex-col gap-10 h-[375px]">
          <div class="location-box leading-7 pb-8 border-b-[0.5px] border-[#2C58BD] mr-10">
            <span class="text-[28px] leading-9 text-[#091F40] font-normal">Location</span>
            <p class="font-light">1234 Street Name</p>
            <p class="font-light">City, State 56789</p>
            <p class="font-light">0.0 Miles | Directions</p>
          </div>
          <div class="location-box leading-7 pb-8 border-b-[0.5px] border-[#2C58BD] mr-10">
            <span class="text-[28px] leading-9 text-[#091F40] font-normal">Location</span>
            <p class="font-light">1234 Street Name</p>
            <p class="font-light">City, State 56789</p>
            <p class="font-light">0.0 Miles | Directions</p>
          </div>
          <div class="location-box leading-7 pb-8 border-b-[0.5px] border-[#2C58BD] mr-10">
            <span class="text-[28px] leading-9 text-[#091F40] font-normal">Location</span>
            <p class="font-light">1234 Street Name</p>
            <p class="font-light">City, State 56789</p>
            <p class="font-light">0.0 Miles | Directions</p>
          </div>
          <div class="location-box leading-7 pb-8 border-b-[0.5px] border-[#2C58BD] mr-10">
            <span class="text-[28px] leading-9 text-[#091F40] font-normal">Location</span>
            <p class="font-light">1234 Street Name</p>
            <p class="font-light">City, State 56789</p>
            <p class="font-light">0.0 Miles | Directions</p>
          </div>
          <div class="location-box leading-7 pb-8 mr-10">
            <span class="text-[28px] leading-9 text-[#091F40] font-normal">Location</span>
            <p class="font-light">1234 Street Name</p>
            <p class="font-light">City, State 56789</p>
            <p class="font-light">0.0 Miles | Directions</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Biometric Capabilities --}}
  <div class="biometric-capabilities w-full xl:mt-[90px] mb-9">
    <h2 class="font-light text-[53px] text-[#091F40] leading-[65px] mb-6 w-full xl:w-[35%]">Biometric Capabilities for Your Business</h2>
    <p class="text-[#54555B] font-light text-lg w-full xl:w-[70%]">PrintScan provides advanced fingerprinting and biometric systems to businesses, organizations, and
      governments worldwide. Whether you are looking to offer fingerprinting services as a new or existing
      organization or add fingerprinting capabilities into your workflow, PrintScan has the solution.</p>
  </div>

  {{-- Biometric Capabilities Cards --}}
  <div class="biometric-cards grid grid-cols-1 xl:grid-cols-3 gap-[30px] text-white mb-[100px]">
    <a class="biometric-cards-link" href="#">
      <div class="card rounded-tr-[15px] rounded-bl-[15px] pb-[25px] pt-[48px] pl-10 pr-8">
        <p class="card-top-title font-bold text-xl mb-[84px]">PRINTSCAN FINGERPRINTING KIOSK</p>
        <p class="card-middle-title font-normal text-[27px] mb-[28px] leading-9">Increase revenue with a fingerprinting kiosk at your location.</p>
        <span class="card-cta font-bold text-base bg-[#40AE49] py-[25px] pl-[37px] pr-[13px] flex relative bottom-[-25px] left-[-40px] rounded-bl-[15px] w-[calc(100%+4.5rem)]">Learn More</span>
      </div>
    </a>
    
    <a class="biometric-cards-link mb-[30px] xl:mb-0" href="#">
      <div class="card rounded-tr-[15px] rounded-bl-[15px] pb-[25px] pt-[48px] pl-10 pr-8">
        <p class="card-top-title font-bold text-xl mb-[84px]">VAULT ID™ FINGERPRINT ARCHIVE</p>
        <p class="card-middle-title font-normal text-[27px] mb-[28px] leading-9">Safeguard and transfer your fingerprints effortlessly.</p>
        <span class="card-cta top-[61px] font-bold text-base bg-[#0B2142] py-[25px] pl-[37px] pr-[13px] flex relative bottom-[-25px] left-[-40px] rounded-bl-[15px] w-[calc(100%+4.5rem)]">Learn More</span>
      </div>
    </a>

    <a class="biometric-cards-link" href="#">
      <div class="card rounded-tr-[15px] rounded-bl-[15px] pb-[25px] pt-[48px] pl-10 pr-8">
        <p class="card-top-title font-bold text-xl mb-[84px]">PRINTSCAN SCHEDULER</p>
        <p class="card-middle-title font-normal text-[27px] mb-[28px] leading-9">Schedule fingerprinting with one click directly from your system.</p>
        <span class="card-cta font-bold top-[61px] text-base bg-[#2B89DF] py-[25px] pl-[37px] pr-[13px] flex relative bottom-[-25px] left-[-40px] rounded-bl-[15px] w-[calc(100%+4.5rem)]">Learn More</span>
      </div>
    </a>
  </div>

  {{-- Schedule Card --}}
  <div class="schedule-card w-full mb-[104px] flex flex-col xl:flex-row xl:pl-[130px] xl:py-[70px] rounded-[15px] items-center xl:pr-[170px] p-4">
    <h2 class="schedule-title text-[40px] text-center xl:text-left xl:text-[53px] xl:leading-[65px] font-light text-white w-full xl:w-2/5">Ready to Get Fingerprinted</h2>
    <div class="subtitle-button flex flex-col w-full xl:w-1/2 items-end">
      <p class="schedule-subtitle text-white font-light text-[22px] leading-9 w-full xl:w-1/2">Make an appointment to get started.</p>
      <button class="schedule-button uppercase text-white text-center w-full xl:w-1/2 mt-8 bg-transparent hover:bg-[#4277F0] border-white border transition-all font-normal rounded-[25px] py-3 px-4">Schedule Appointment</button>
    </div>
  </div>
</div>
