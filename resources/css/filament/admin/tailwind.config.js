import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    server: {
        host: 'package-tracking-system.test',
        hmr: {
            host: 'package-tracking-system.test',
        },
    },
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/infolists/**/*.blade.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],

    plugins: [require("daisyui")],

}
