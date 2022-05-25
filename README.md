1. Create your Laravel project
2. Connect your database
3. Make migrations

    php artisan migrate

4. Installing UI

    composer require laravel/ui

5. Installing UI

    php artisan ui:auth

6. Installing Bootstrap

    php artisan ui bootstrap

7. Installing Vue

    php artisan ui vue

8. npm i

9. npm run dev
and again
10. npm run dev

if you got
    [webpack-cli] Error: Cannot find module 'webpack/lib/rules/DescriptionDataMatcherRulePlugin'
    Require stack:

npm i vue-loader
//then again//
npm run dev

if you got
1 WARNING in child compilations (Use 'stats.children: true' resp. '--stats-children' for more details)

add these lines to webpack.mix.js

mix.webpackConfig({
stats: {
children: true,
},
});

if you got
(2423:3) autoprefixer: Replace color-adjust to print-color-adjust. The color-adjust shorthand is currently deprecated.(2423:3) autoprefixer: Replace color-adjust to print-color-adjust. The color-adjust shorthand is currently deprecated.

npm install autoprefixer@10.4.5

11. If you got sa

npm uninstall --save-dev sass-loader
npm install --save-dev sass-loader@latest

13. php artisan serve

to check site working

14. 

