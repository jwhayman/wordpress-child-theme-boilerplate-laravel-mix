# Intro
This is a WordPress child theme, designed to work alongside most themes, while giving developers the flexibility to write SCSS and ES6 JS without relying too heavily on the parent theme's way of adding custom styling/scripts.

## Assets structure
The theme uses laravel-mix to compile the assets. The structure of the assets directory is based on my own personal experience, separating each template out into its own stylesheet.

## How to use
1. Install the dependencies using npm/yarn.
1. Make sure you update the "Template" option in the `style.css` file, so that it matches your parent theme.
1. Update the wp_enqueue_script/wp_enqueue_style dependences in the `lib/utilities.php` file including your parent theme's files as dependencies.
1. Edit the `webpack.mix.js` file to update the hostname.
 1. Run `yarn run dev` or `yarn run watch` to get started. The full list of commands is in `package.json`
