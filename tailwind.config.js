/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",],
  theme: {
    screens:{'xxs': {'max': '620px'},
             'lg': {'min':'1024px'},
             'sm': {'min':'640px'},
             'md': {'min' :'768px'},
             'xl': {'min':'1280px'},
             '2xl': {'min' :'1536px'}},
    extend: {},
  },
  plugins: [],
}

