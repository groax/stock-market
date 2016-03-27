"use strict";

angular.module('app')
    .constant('API', (function () {
        var server = '//localhost:8000/api/';

        return {
            LOGIN: server + "login/",
            REGISTER: server + "register/",
            PROFILE: server + "profile/",
            PAGES: server + "pages/",
            STOCKS: server + "stocks/",
            MARKET: server + "market/"
        }
    })())
    .constant('APP_ROLES', {
        USER: "user",
        MODERATOR: "moderator",
        OWNER: "owner"
    })
;
