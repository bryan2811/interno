<footer class="print-scan-footer w-full container">
  <div class="footer-content border-t-[0.5px] border-[#4277F0] pb-[77px] flex flex-col xl:flex-row pr-[104px] pt-[77px]">
    <div class="w-1/3 flex flex-col">
      <a href="/">
        <img class="w-1/2" src=@asset('images/footer-logo.svg') alt="PrintScan Footer Logo">
      </a>
      <p class="copyright text-[#091F40] font-light text-sm mb-3.5 mt-9">&copy; {{ now()->year }} PrintScan</p>
      <div class="privacy-terms-links flex">
        <a class="text-[#091F40] font-light text-sm hover:text-[#40AE49] transition-all hover:underline" href="#">Privacy</a>
        <span class="mx-2">|</span>
        <a class="text-[#091F40] font-light text-sm hover:text-[#40AE49] transition-all hover:underline" href="#">Terms</a>
      </div>
    </div>
    <div class="w-4-6 grow">
      <x-navigation menuName="Footer Menu" themeLocation="primary_navigation" menuClass="grid grid-cols-1 xl:grid-cols-3 text-[#091F40] text-sm gap-[130px]" />
    </div>
  </div>
</footer>
