/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'bg': '#181818',
                'card': '#282828',
                'prompt': '#a1b56c',
                'text': '#D8D8D8',
                'link': '#7cafc2'
            },
        },
    },
    plugins: [],
}

