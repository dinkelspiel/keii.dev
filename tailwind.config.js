/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      agbalumo: ["Agbalumo", "sans-serif"],
      poppins: ["Poppins", "sans-serif"],
    },
    extend: {
      colors: {
        'bg': '#FFEBD8',
        'red': '#FFC5C5',
        'blue': '#7FBECC',
        'green': '#C7DCA7',
        'green2': '#89B9AD'
      }
    },
  },
  plugins: [],
}

