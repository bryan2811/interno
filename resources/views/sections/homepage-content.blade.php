<div class="container w-full main-content">
  {{-- First Block --}}
  <div class="flex py-[83px] first-block">
    <div class="w-1/4 mt-3.5">
      <h2 class="text-[#40AE49] font-light text-2xl">{{ _e( 'Advanced Fingerprinting and Biometrics', 'printscan' ) }}</h2>
      <span class="border-b border-[#2C58BD] block w-1/2 h-[70px]"></span>
    </div>
    <div class="w-3/4">
      <p class="text-[#091F40] font-light text-[52px] leading-[75px] mb-14">{{ _e( 'PrintScan is the leader in fingerprinting and biometric innovation with services around the world and convenient locations across the United States.', 'printscan' ) }}</p>
      <a class="uppercase text-white bg-[#40AE49] hover:bg-green-700 transition-all font-normal rounded-[25px] py-3 px-4" href="#">{{ _e( 'Schedule Appointment', 'printscan' ) }}</a>
    </div>
  </div>

  {{-- Second Block --}}
  <div class="h-screen second-block">
    <div class="second-block__content py-[135px] container">
      <h2 class="text-[53px] font-light text-white">{{ _e( 'Secure Identity', 'printscan' ) }}</h2>
      <h2 class="text-[53px] font-light text-white">{{ _e( 'Services and Solutions', 'printscan' ) }}</h2>
      <div class="second-block__box">
        <div class="flex w-full">
          <img class="h-[460px]" src="@asset('/images/first.png');" alt="">
          <div class="ml-[110px] flex flex-col justify-center text-white">
            <h3 class="text-4xl font-normal">{{ _e( 'For Consumers', 'printscan' ) }}</h3>
            <p class="font-light text-[18px] w-[55%]">{{ _e( 'Fingerprinting services for people complying with background checks and regulations.', 'printscan' ) }}</p>
            <a class="uppercase text-white w-1/2 mt-8 bg-transparent hover:bg-green-700 border-white border transition-all font-normal rounded-[25px] py-3 px-4" href="#">Learn More</a>
          </div>
        </div>
        <div class="w-1/2"></div>
      </div>
    </div>
  </div>
</div>