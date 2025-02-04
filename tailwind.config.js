import defaultTheme from 'tailwindcss/defaultTheme';

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
<<<<<<< HEAD
                'primary': '#3B82F6',
                'secondary': '#F59E0B',

=======
                primary: '#13A570',
                secondary: '#F5F5F5',
>>>>>>> 25fbcf1ae0bd6903cc15e3747d6e962a83156786
                hijau: {
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    200: '#bbf7d0',
                    300: '#86efac',
                    400: '#4ade80',
                    500: '#22c55e',
                    600: '#16a34a',
                    700: '#15803d',
                    800: '#166534',
                    900: '#14532d',
                }
            }
<<<<<<< HEAD

=======
>>>>>>> 25fbcf1ae0bd6903cc15e3747d6e962a83156786
        },
    },
    plugins: [],
}