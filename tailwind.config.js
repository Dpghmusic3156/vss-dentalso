/** @type {import('tailwindcss').Config} config */
const config = {
    content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
    theme: {
        extend: {
            colors: {
                primary: {
                    100: '#E6F4EA',
                    200: '#C3E6CB',
                    500: '#2E8543',
                    DEFAULT: '#2E8543',
                },
                primary2: {
                    500: '#03A9F4',
                    DEFAULT: '#03A9F4',
                },
                secondary: {
                    DEFAULT: '#6F6F71',
                },
            },
            fontFamily: {
                vss: ['"Be Vietnam Pro"', 'sans-serif'],
                charm: ['"Charm"', 'cursive'],
            },
        },
    },
    plugins: [],
};

export default config;
