/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ], theme: {
        extend: {
            colors: {
                twhite: '#eeebea',
                tblack: '#080008',
                tgray: '#1b1c26',
                tpurple: '#8d6472',
                tbeige: '#d6c3ba',
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                nightingale: ['DT Nightingale', 'serif'],
            }
        },
    },
    plugins: [],
}

