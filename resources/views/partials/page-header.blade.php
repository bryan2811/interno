<div class="w-full h-screen bg-[center_top_-2rem] bg-no-repeat bg-cover print-scan-hero bg-hero-image">
  <div class="container w-full mx-auto hero-content pt-14 flex items-center space-x-[126px]">
    <a class="grow" href="/">
      <img src={{ $printscan_logo }} alt="PrintScan Logo">
    </a>
    <x-navigation menuName="Header Menu" themeLocation="primary_navigation" menuClass="text-white font-light space-x-14 flex" />
    <div class="flex space-x-4 header-buttons">
      <a class="button-one rounded-[20px] border-solid border border-white py-[9px] px-4 text-white" href="#">{{ _e( 'Find My Appointment', 'printscan' ) }}</a>
      <a class="button-two rounded-[20px] border-solid border border-white py-[9px] px-4 text-white" href="#">{{ _e( 'Contact', 'printscan' ) }}</a>
    </div>
  </div>
</div>