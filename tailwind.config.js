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
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans], 
            },
            colors: {
                primary: '#ED8A38',       // Warna primer oranye
                'primary-light': '#C6EECC', // Warna primer kedua
                secondary: '#FDE703',     // Warna sekunder kuning
                'dark-teal': '#29585B',   // Warna sekunder teal gelap
                'light-teal': '#8FD8DE',  // Warna sekunder teal terang
            },
        },
    },
    plugins: [],
}