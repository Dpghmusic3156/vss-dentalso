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
                    400: '#4CAF50',
                    500: '#2E8543',
                    600: '#1B5E20',
                    700: '#1B5E20',
                    800: '#1B5E20',
                    900: '#1B5E20',
                    DEFAULT: '#2E8543',
                },
                primary2: {
                    100: '#DEF2FF',
                    200: '#81D4FA',
                    300: '#4FC3F7',
                    400: '#29B6F6',
                    500: '#03A9F4',
                    600: '#039BE5',
                    DEFAULT: '#03A9F4',
                },
                secondary: {
                    700: '#374151',
                    DEFAULT: '#6F6F71',
                },
                primary3: {
                    50: '#FFFBEA',
                    100: '#FFF2C5',
                    200: '#FFE082',
                    300: '#ffd146',
                    500: '#ffcd38',
                    DEFAULT: '#ffd146',
                },
                orange: {
                    100: '#FFE0B2',
                    400: '#FFA726',
                    DEFAULT: '#FF9800',
                    600: '#F57C00',
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
