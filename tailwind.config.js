/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                rubik: ["Rubik", "sans-serif"],
            },
            colors: {
                primary: {
                    50: "#FFE5E4", // Sangat terang
                    100: "#FFC7C5", // Terang
                    200: "#FF9F9C", // Lebih terang
                    300: "#FF7773", // Cerah
                    400: "#F5524E", // Mendekati utama
                    500: "#CD1C18", // Warna utama (DEFAULT)
                    600: "#A81614", // Sedikit lebih gelap
                    700: "#82110F", // Gelap
                    800: "#5C0C0A", // Lebih gelap
                    900: "#360706", // Sangat gelap
                },
            },
        },
    },
    plugins: [],
};
