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
                secondary: {
                    50: "#FFFBE5", // Sangat terang
                    100: "#FFF3C7", // Terang
                    200: "#FFE79F", // Lebih terang
                    300: "#FFD777", // Cerah
                    400: "#FFB952", // Mendekati utama
                    500: "#FACA15", // Warna utama (DEFAULT)
                    600: "#E3B308", // Sedikit lebih gelap
                    700: "#B2801A", // Gelap
                    800: "#8E6416", // Lebih gelap
                    900: "#723B12", // Sangat gelap
                },
                light: {
                    50: "#FFFFFF", // Putih murni
                    100: "#F9FAFB", // Sangat terang
                    200: "#F3F4F6", // Lebih terang
                    300: "#E5E7EB", // Cerah
                    400: "#D1D5DB", // Mendekati utama
                    500: "#9CA3AF", // Warna utama (DEFAULT)
                    600: "#6B7280", // Sedikit lebih gelap
                    700: "#4B5563", // Gelap
                    800: "#374151", // Lebih gelap
                    900: "#1F2937", // Sangat gelap
                },
                dark: {
                    50: "#F3F4F6", // Sangat terang
                    100: "#E5E7EB", // Terang
                    200: "#D1D5DB", // Lebih terang
                    300: "#9CA3AF", // Cerah
                    400: "#6B7280", // Mendekati utama
                    500: "#374151", // Warna utama (DEFAULT)
                    600: "#1F2937", // Sedikit lebih gelap
                    700: "#111827", // Gelap
                    800: "#0C0E12", // Lebih gelap
                    900: "#000000", // Hitam murni
                },
            },
        },
    },
    plugins: [],
};
