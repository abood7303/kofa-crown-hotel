import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            "colors": {
                    "on-background": "#e2e2e6",
                    "surface": "#090a0c",
                    "surface-container-lowest": "#050607",
                    "on-primary-fixed": "#2d1612",
                    "error": "#ffb4ab",
                    "inverse-primary": "#8d4f45",
                    "on-tertiary-fixed": "#001f25",
                    "surface-container-highest": "#222428",
                    "primary-container": "#4D332D",
                    "primary": "#d7c0bb",
                    "inverse-surface": "#e2e2e6",
                    "on-tertiary-fixed-variant": "#004e5b",
                    "surface-container": "#111316",
                    "primary-fixed": "#f9dad4",
                    "error-container": "#93000a",
                    "surface-container-low": "#0c0e11",
                    "surface-variant": "#222428",
                    "outline": "#a08d8a",
                    "on-surface-variant": "#d8c2be",
                    "surface-container-high": "#1a1c1f",
                    "on-secondary-fixed": "#2d1612",
                    "on-error": "#690005",
                    "surface-dim": "#090a0c",
                    "tertiary-fixed": "#aeedfc",
                    "on-tertiary-container": "#86c4d3",
                    "tertiary-container": "#00525f",
                    "tertiary": "#92d0df",
                    "background": "#050607",
                    "outline-variant": "#534341",
                    "on-secondary-container": "#f9dad4",
                    "secondary": "#d7c0bb",
                    "on-tertiary": "#00363f",
                    "on-secondary-fixed-variant": "#5d3f3a",
                    "secondary-container": "#5d3f3a",
                    "on-surface": "#e2e2e6",
                    "on-error-container": "#ffdad6",
                    "inverse-on-surface": "#2f3034",
                    "surface-bright": "#2c2e32",
                    "secondary-fixed-dim": "#d7c0bb",
                    "on-primary": "#442a26",
                    "primary-fixed-dim": "#d7c0bb",
                    "secondary-fixed": "#f9dad4",
                    "tertiary-fixed-dim": "#92d0df",
                    "on-primary-fixed-variant": "#634540",
                    "on-primary-container": "#f9dad4",
                    "surface-tint": "#d7c0bb",
                    "on-secondary": "#442a26"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Amiri", "serif"],
                    "body": ["IBM Plex Sans Arabic", "sans-serif"],
                    "label": ["IBM Plex Sans Arabic", "sans-serif"],
                    "serif-ar": ["Noto Serif Arabic", "serif"]
            }
        },
    },
    plugins: [],
};
