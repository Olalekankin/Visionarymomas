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
                blak: "#151515",
                vgrey: "#A0A0A0",
                lightgrey: "#D9DBE1",
                vorange: "#FFAA5C",
                tgrey: "#242424",
            },
            fontFamily: {
                noto: ["Noto Sans Display"],
                tvsan: ["TV 2 Sans Display"],
                sacra: ["Sacramento"],
            },
            gradientColorStops: {
                grad: {
                    "0%": "rgba(247, 247, 255, 0)",
                    "100%": "rgba(51, 115, 102, 0.17)",
                },
            },
            backgroundImage: {
                pattern: "url('/asset/pattern.png')",
            },
        },
    },
    plugins: [],
};

