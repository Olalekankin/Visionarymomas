/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#6247F1",
                secondary: "#0D014F",
                navgrey: "#7D7A8D",
                vblue: "#6DEAFC",
                purpbg: "#E4E1F2",
                white: "#FFFFFF",
                vred: "#FF5C5C",
                coffee: "#F5F3FE",
                dede: "#DEDEDE",
            },
            fontFamily: {
                noto: ["Noto Sans Display", "sans-serif"],
                tvsan: ["TV2SansDisplay-Regular", "sans-serif"],
            },
            gradientColorStops: {
                grad: {
                    "0%": "rgba(247, 247, 255, 0)",
                    "100%": "rgba(51, 115, 102, 0.17)",
                },
            },
            backgroundImage: {
                "pattern": "url('/asset/pattern.png')",
            },
        },
    },
    plugins: [],
};
