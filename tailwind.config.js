/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
      backgroundImage: {
        'hero-image': "url('/wp-content/themes/printscan/public/images/print-scan-hero.png')",
      },
      screens : {
        '3xl': '1680px',
      }
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '3.5rem'
      },
    },
  },
  plugins: [],
}
