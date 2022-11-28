/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/View/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/line-clamp'),
  ],
}
