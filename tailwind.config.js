/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                "fade-in": {
                    "0%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
                "fade-in-up": {
                    "0%": { opacity: "0", transform: "translateY(10px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                "slide-in-top": {
                    "0%": { opacity: "0", transform: "translateY(-20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                "slide-in-bottom": {
                    "0%": { opacity: "0", transform: "translateY(20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                "bounce-in": {
                    "0%": { opacity: "0", transform: "scale(0.9)" },
                    "60%": { opacity: "1", transform: "scale(1.1)" },
                    "100%": { transform: "scale(1)" },
                },
            },
            animation: {
                "fade-in": "fade-in 0.5s ease-out",
                "fade-in-up": "fade-in-up 0.6s ease-out",
                "slide-in-top": "slide-in-top 0.5s ease-out",
                "slide-in-bottom": "slide-in-bottom 0.5s ease-out",
                "bounce-in": "bounce-in 0.8s ease-out",
            },
        },
    },
    variants: {},
    plugins: [],
};
