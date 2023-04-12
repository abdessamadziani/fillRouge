 const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",

    ],

    theme: {
        screens: {
            sm: '280px',
            md: '768px',
            lg: '976px',
            xl: '1440px',

          },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                backgroundImage: {
                    'hero-pattern': "url(assets('img/))",
                    'footer-texture': "url('/img/footer-texture.png')",
                  }
            },
        },
    },

     plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
