const $ = window.jQuery;

class App {

    static home() {
        console.log('home');
    }
}

class Router {

    constructor() {
        // Call App methods based on the body tag class attributes
        $('body').attr('class').split(' ').forEach(function (className) {
            var functionName = className.split('-').join('_');
            if (typeof App[functionName] === 'function') {
                App[functionName]();
            }
        });
    }
}

$(document).ready(new Router());