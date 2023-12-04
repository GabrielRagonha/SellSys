import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "primary-blue": {
                    600: "#0249ad",
                    700: "#002C6A",
                    800: "#001634",
                },
                "secondary-blue": {
                    600: "#43A0D6",
                },
                "table-head": "#D8D8D8",
                "table-row": "#F1F1F1",
            },
        },
    },

    plugins: [forms],
};
