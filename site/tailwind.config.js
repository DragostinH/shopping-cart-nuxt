/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js",
  ],
  theme: {
    extend: {
      backgroundImage: {
        // custom background image
        "header-bg":
          'url("https://via.placeholder.com/1920x1080.png?text=Header+Background")',
      },
      gridColumn: {
        twoFr: "repeat(2, 1fr)",
      },
      gridTemplateRows: {
        main: "repeat(2,1fr)",
      },
      // gridColumnStart: {
      //   13: "13",
      //   14: "14",
      // },
      // gridColumnEnd: {
      //   13: "13",
      //   14: "14",
      // },
    },
    fontFamily: {
      display: ["Open Sans", "sans-serif"],
      body: ["Open Sans", "sans-serif"],
    },
    colors: {
      primary: {
        50: "#ffffff",
        red: "#d42929",
        border: "#2e2c2c33",
        liActive: "#c59d5f",
      },
      secondary: {
        50: "#f8fafc",
        100: "#f1f5f9",
        200: "#e2e8f0",
        300: "#cbd5e1",
        400: "#94a3b8",
        500: "#64748b",
        600: "#475569",
        700: "#334155",
        800: "#1e293b",
        900: "#0f172a",
      },
    },
  },
};
