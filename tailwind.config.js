/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}", "./resources/views/**/*.blade.php"],
  safelist: [
    "bg-[url('https://picsum.photos/1920/1080')]",
    "bg-[url('/wp-content/uploads/2023/01/interno-scaled.jpg')]",
    "bg-[url('http://interno.sagedevelopment.tech/wp-content/uploads/2023/01/interno-scaled.jpg')]",
    "bg-[url('https://interno.sagedevelopment.tech/wp-content/uploads/2023/01/interno-scaled.jpg')]"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#CDA274',
        secondary: '#292F36',
        tertiary: '#F4F0EC',
      },
      screens : {
        '3xl': '1536px',
      }
    },
    fontFamily: {
      'jost': ['Jost', 'sans-serif'],
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        'xl': '3.5rem',
      },
    },
  },
  plugins: [],
}
