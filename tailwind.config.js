const defaultTheme = require('tailwindcss/defaultTheme');


module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        // extend: {
        //     fontFamily: {
        //         sans: ['Nunito', ...defaultTheme.fontFamily.sans],
        //     },
        // },
        extend: {
            colors: {
                primary: {
                    light: "#fefcbf", // For lighter primary color
                    DEFAULT: "#b7791f", // Normal primary color
                    dark: "#744210", // Used for hover, active, etc.
                },
            },
        },
    },


    plugins: [require('@tailwindcss/forms')][require("kutty")],


};
