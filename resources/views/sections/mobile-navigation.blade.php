<nav class="relative px-4 py-4 flex justify-between items-center bg-white lg:hidden">
  <a class="text-3xl font-bold leading-none" href="/">
    <img src=@asset('images/footer-logo.svg') alt="PrintScan Logo">
  </a>
  <div class="lg:hidden">
    <button class="navbar-burger flex items-center text-[#40AE49] p-3">
      <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Mobile menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </button>
  </div>
  <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Home</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-[#40AE49] font-bold" href="#">About Us</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Services</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Pricing</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Contact</a></li>
  </ul>
</nav>

<div class="navbar-menu relative z-50 hidden">
  <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
  <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
    <div class="flex items-center mb-8">
      <a class="mr-auto text-3xl font-bold leading-none" href="#">
        <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.0925 32.0217C10.4829 32.0217 6.87339 30.6676 4.12404 27.9595C-1.37468 22.5433 -1.37468 13.734 4.12404 8.31781L11.4677 1.08431C12.0063 0.553772 12.8786 0.553772 13.4132 1.08431C13.9518 1.61484 13.9518 2.47399 13.4132 3.00057L6.06949 10.2341C1.64399 14.5932 1.64399 21.6802 6.06949 26.0393C10.491 30.3944 17.6899 30.3944 22.1154 26.0393L28.4382 19.8114C28.8883 19.368 28.8924 18.6514 28.4502 18.2L28.4341 18.1881C27.996 17.7566 27.2283 17.7566 26.7902 18.1881L20.3911 24.4912C16.882 27.9476 11.1703 27.9476 7.66122 24.4912C5.96096 22.8165 5.02441 20.5914 5.02441 18.2238C5.02441 15.8562 5.96096 13.6311 7.66122 11.9563L13.8312 5.87893C18.6265 1.15161 23.7916 -0.649832 30.0821 0.205361C30.8338 0.3083 31.3604 0.993246 31.2599 1.73362C31.1554 2.47795 30.46 2.99661 29.7083 2.89367C24.2699 2.1533 19.9771 3.66572 15.7807 7.79915L9.61069 13.8766C7.17486 16.2758 7.17486 20.1796 9.61069 22.5789C12.0465 24.9782 16.0098 24.9782 18.4456 22.5789L24.8447 16.2758C25.5843 15.5473 26.5691 15.1435 27.6142 15.1435C28.6592 15.1435 29.6199 15.5355 30.3555 16.2442L30.3876 16.2758C31.9151 17.7803 31.9151 20.2271 30.3876 21.7317L24.0649 27.9595C21.3156 30.6676 17.706 32.0217 14.0965 32.0217H14.0925Z" fill="#40AE49"/>
          <path d="M14.6916 37.0301C13.743 37.0301 12.7703 36.9627 11.7654 36.8242C11.0137 36.7212 10.4872 36.0363 10.5877 35.2959C10.6922 34.5555 11.3916 34.0369 12.1392 34.1359C17.5776 34.8723 21.8705 33.3599 26.0669 29.2304L32.2368 23.153C33.4186 21.989 34.0657 20.4449 34.0657 18.8018C34.0657 17.1587 33.4146 15.6146 32.2368 14.4506C31.0551 13.2866 29.4875 12.6492 27.8194 12.6492C26.1513 12.6492 24.5837 13.2906 23.4019 14.4506L17.0028 20.7537C15.4754 22.2582 12.9913 22.2582 11.4639 20.7537C10.7203 20.0212 10.3143 19.0552 10.3143 18.0218C10.3143 16.9885 10.7203 16.0224 11.4639 15.2939L17.7866 9.06607C23.2853 3.64985 32.2288 3.64985 37.7275 9.06607C43.2262 14.4823 43.2262 23.2916 37.7275 28.7078L30.3838 35.9413C29.8452 36.4718 28.973 36.4718 28.4384 35.9413C27.8998 35.4107 27.8998 34.5516 28.4384 34.025L35.7821 26.7915C40.2076 22.4324 40.2076 15.3454 35.7821 10.9863C31.3566 6.63115 24.1616 6.63115 19.7361 10.9863L13.4134 17.2141C13.1923 17.4319 13.0717 17.717 13.0717 18.0258C13.0717 18.3346 13.1923 18.6197 13.4134 18.8374C13.8716 19.2888 14.6072 19.2848 15.0614 18.8374L21.4605 12.5343C23.1607 10.8596 25.4197 9.9371 27.8234 9.9371C30.2271 9.9371 32.486 10.8596 34.1863 12.5343C35.8866 14.2091 36.8231 16.4342 36.8231 18.8018C36.8231 21.1694 35.8866 23.3945 34.1863 25.0692L28.0163 31.1466C23.9847 35.1177 19.6919 37.0261 14.6916 37.0261V37.0301Z" fill="#40AE49"/>
          </svg>          
      </a>
      <button class="navbar-close">
        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div>
      <ul>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#40AE49] rounded" href="#">Fingerprinting Services</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#40AE49] rounded" href="#">Live Scan Solutions</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#40AE49] rounded" href="#">Locations</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#40AE49] rounded" href="#">Company</a>
        </li>
      </ul>
    </div>
    <div class="mt-auto">
      <p class="my-4 text-sm text-center text-gray-400">
        <span>Copyright &copy; {{ now()->year }}</span>
      </p>
    </div>
  </nav>
</div>
