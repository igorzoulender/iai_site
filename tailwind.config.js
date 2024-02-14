/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/welcome.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
      ],
  theme: {
    extend: {
        aspectRatio: {
            '4/3': '4 / 3',
        },
    },
  },

  plugins: [
      require('@tailwindcss/line-clamp'),
      require('tailwind-scrollbar'),
      require('@tailwindcss/aspect-ratio'),
      require('@tailwindcss/line-clamp'),
      require('preline/plugin'),
  ],

    variants: {
        scrollbar: ['rounded']
    }

}
