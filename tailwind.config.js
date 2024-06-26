/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            'heading': '#36443B',
            'black': '#000000',
            'white': '#FFFFFF'
        },
        fontFamily: {
            'heading': ['Satisfy', 'cursive', 'sans-serif']
        }
    },
  plugins: [],
}

