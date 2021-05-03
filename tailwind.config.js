module.exports = {
  purge: [
  	'./resources/**/*.blade.php',
  	'./resources/**/*.js',
  	'./resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    backgroundColor: theme => ({
      ...theme('colors'),
      'primary': '#3490dc',
      'secondary': '#ffed4a',
      'danger': '#e3342f',
     }),
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
