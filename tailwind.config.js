/** @type {import('tailwindcss').Config} config */
const config = {
    content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
        extend: {
            colors: {
                primary: {
                    100: '#E6F4EA',
                    200: '#C3E6CB',
                    300: '#65C37B',
                    500: '#2E8543',
                    DEFAULT: '#2E8543',
                },
                primary2: {
                    100: '#DEF2FF',
                    500: '#03A9F4',
                    DEFAULT: '#03A9F4',
                },
                secondary: {
                    700: '#374151',
                    DEFAULT: '#6F6F71',
                },
                primary3: {
                    50: '#FFFBEA',
                    100: '#FFF2C5',
                    300: '#ffd146',
                    500: '#ffcd38',
                    DEFAULT: '#ffd146',
                },
                orange: {
                    DEFAULT: '#FF9800',
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
