/**
 * @typedef {import('@roots/bud').Bud} Bud
 *
 * @param {Bud} app
 */
export default async (app) => {
    /**
     * Application entrypoints using app.path() for robust path resolution
     */
    app
        .entry('app', [
            app.path('resources/scripts/app.js'),
            app.path('resources/styles/app.scss')
        ])
        .assets(['images']);

    /**
     * URI of the `public` directory
     */
    app.setPublicPath('/wp-content/themes/vss-dentalso/public/');
};
