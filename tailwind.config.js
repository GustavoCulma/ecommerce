const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');


module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                black: colors.black,
                white: colors.white,
                slate: colors.slate,
                gray: colors.gray,
                sky: colors.sky,
                emerald: colors.emerald,
                indigo: colors.indigo,
                yellow: colors.yellow,
                orange: colors.orange,
                amber: colors.amber,
                red: colors.red,
                purple: colors.purple,
                rose: colors.rose,
                cyan:colors.cyan,
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
