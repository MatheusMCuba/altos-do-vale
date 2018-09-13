function Main(){
    let self = this;

    self.InstafeedConfig = {
        "get": "user",
        "userId": 4622774,
        "accessToken": "4622774.7cbaeb5.ec8c5041b92b44ada03e4a4a9153bc54",
        "clientId": "ede8e58ef33d4674905392e2878b2ab3",
        "limit": 11,
        "resolution": "low_resolution",
        "template": "<div><a href=\"{{link}}\" target=\"_blank\"><img src=\"{{image}}\" /></a></div>"
    };

    self.InitInstafeed = function(){
        let feed = new Instafeed(self.InstafeedConfig);
        feed.run();
    }

    self.Init = (function(){
        self.InitInstafeed();
    })();
}

$(function(){
    window.Main = new Main();
})
