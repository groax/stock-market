'use strict';

angular.module('app.site')
    .config(['$stateProvider', function ($stateProvider) {
        $stateProvider
            .state('about', {
                parent: 'site',
                url: '/about',
                data: {
                    roles: []
                },
                views: {
                    'content': {
                        templateUrl: 'app/site/about/about.html',
                        controller: 'SiteAboutController as about'
                    }
                }
            });
    }]);
