/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
      backgroundImage: {
        'hero-image': "url('/wp-content/themes/printscan/public/images/print-scan-hero.png')",
      }
    },
  },
  plugins: [],
}
