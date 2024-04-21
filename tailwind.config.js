/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    safelist: [
        'w-1/2',
        'w-2/3',
        'w-4/5',
        'text-left',
        'text-center',
        'text-right',
        'bg-tbeige',
        'bg-tpurple',
        'bg-zinc-300',
        'bg-red-700',
        'bg-amber-700',
        'bg-lime-700',
        'bg-indigo-800',
        'text-tbeige',
        'text-tblack',
        'text-tpurple',
        'border-tbeige',
        'border-tblack',
        'border-tpurple',
        'border-tgray',
        'rounded-md',
        'rounded-xl',
        'rounded-full',
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
        },
    },
    plugins: [],
}

