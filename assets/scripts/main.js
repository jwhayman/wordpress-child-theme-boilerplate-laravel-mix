const $ = window.jQuery;

class App {

    static common() {

    }

    static home() {
        console.log('home');
    }

    static final() {

    }
}

class Router {

    constructor() {
        App.common();
        // Call App methods based on the body tag class attributes
        $('body').attr('class').split(' ').forEach(function (className) {
            var functionName = className.split('-').join('_');
            if (typeof App[functionName] === 'function') {
                App[functionName]();
            }
        });
        App.final();
    }
}

$(document).ready(new Router());