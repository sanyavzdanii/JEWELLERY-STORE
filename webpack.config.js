const path = require('path');
const miniCss = require('mini-css-extract-plugin');

module.exports = {
    mode: 'development',
    entry: './wp-content/themes/jewstore/src/index.js',
    output: {
        path: path.resolve(__dirname, './wp-content/themes/jewstore/assets'),
        filename: 'scripts.js'
    },
    module: {
        rules: [
            {
                test: /\.(scss|css)$/,
                use: [
                    miniCss.loader,
                    {
                        loader : 'css-loader',
                        options: { url : false }
                    },
                    'sass-loader'
                ],
            },
        ],
    },
    plugins: [
        new miniCss({
            filename: '../style.css',
        }),
    ]
};