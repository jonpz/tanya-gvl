/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    safelist: [
        'md:w-1/2',
        'md:w-2/3',
        'md:w-4/5',
        'text-left',
        'text-center',
        'text-right',
        'bg-tbeige',
        'bg-tpurple',
        'bg-twhite',
        'bg-tgray',
        'bg-tblack',
        'bg-zinc-300',
        'bg-tbeige/90',
        'bg-tpurple/90',
        'bg-twhite/90',
        'bg-tgray/90',
        'bg-tblack/90',
        'bg-zinc-300/90',
        'bg-tbeige/80',
        'bg-tpurple/80',
        'bg-twhite/80',
        'bg-tgray/80',
        'bg-tblack/80',
        'bg-zinc-300/80',
        'bg-tbeige/70',
        'bg-tpurple/70',
        'bg-twhite/70',
        'bg-tgray/70',
        'bg-tblack/70',
        'bg-zinc-300/70',
        'bg-tbeige/60',
        'bg-tpurple/60',
        'bg-twhite/60',
        'bg-tgray/60',
        'bg-tblack/60',
        'bg-zinc-300/60',
        'bg-tbeige/50',
        'bg-tpurple/50',
        'bg-twhite/50',
        'bg-tgray/50',
        'bg-tblack/50',
        'bg-zinc-300/50',
        'bg-tbeige/40',
        'bg-tpurple/40',
        'bg-twhite/40',
        'bg-tgray/40',
        'bg-tblack/40',
        'bg-zinc-300/40',
        'bg-tbeige/30',
        'bg-tpurple/30',
        'bg-twhite/30',
        'bg-tgray/30',
        'bg-tblack/30',
        'bg-zinc-300/30',
        'bg-tbeige/20',
        'bg-tpurple/20',
        'bg-twhite/20',
        'bg-tgray/20',
        'bg-tblack/20',
        'bg-zinc-300/20',
        'bg-tbeige/10',
        'bg-tpurple/10',
        'bg-twhite/10',
        'bg-tgray/10',
        'bg-tblack/10',
        'bg-zinc-300/10',
        'bg-red-700',
        'bg-amber-700',
        'bg-lime-700',
        'bg-indigo-800',
        'text-tbeige',
        'text-tblack',
        'text-tpurple',
        'text-zinc-300',
        'border-tbeige',
        'border-tblack',
        'border-tpurple',
        'border-tgray',
        'rounded-md',
        'rounded-xl',
        'rounded-full',
        'h-128',
        'h-96',
        'h-80',
        'h-72',
        'md:h-128',
        'md:h-96',
        'md:h-80',
        'md:h-72',
        'h-64',
        'h-60',
        'h-52',
        'h-48',
        'h-40',
        'h-32',
        'w-128',
        'w-96',
        'w-80',
        'w-72',
        'w-64',
        'w-60',
        'w-52',
        'w-48',
        'w-40',
        'w-32',
        'rounded-3xl',
        'font-nightingale',
        'font-poppins',
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

