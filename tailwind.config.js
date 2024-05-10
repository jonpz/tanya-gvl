/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    safelist: [
        {
            pattern: /^w-(1\/2|1\/3|1\/4|1\/5|1\/6|2\/3|4\/5|32|40|48|52|60|64|72|80|96|128)$/,
            variants: ['md', 'lg', 'xl'],
        },
        {
            pattern: /^h-(32|40|48|52|60|64|72|80|96|128)$/,
            variants: ['md'],
        },
        {
            pattern: /^text-(left|center|right|tbeige|tblack|tpurple|zinc-300)$/,
        },
        {
            pattern: /^bg-(tbeige|tpurple|twhite|tgray|tblack|zinc-300)(\/[1-9]0)?$/,
        },
        {
            pattern: /^bg-(red-7|amber-7|lime-7|indigo-8)00$/,
        },
        {
            pattern: /^border-(tbeige|tblack|tpurple|tgray)$/,
        },
        {
            pattern: /^rounded-(md|xl|3xl|full)$/,
        },
        {
            pattern: /^font-(nightingale|poppins)$/,
        },
    ],
    theme: {
        extend: {
            colors: {
                twhite: '#eeebea',
                tblack: '#000000',
                tgray: '#1b1c26',
                tpurple: '#8d6472',
                tbeige: '#d6c3ba',
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                nightingale: ['DT Nightingale', 'serif'],
            },
            spacing: {
                '128': '32rem',
            },
        },
    },
    plugins: [],
}

