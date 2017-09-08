$(document).ready(function() {



      var userFeed = new Instafeed({
          get: 'user',
          userId: '2473565988',
          limit: 12,
          accessToken: '2473565988.1677ed0.b1766d9dc6c14e47a127dadb45af40b9',
          template: '<div class="col-sm-4 instagramPics"><a href="{{link}}"><img src="{{image}}"/></a></div>',
          });
          userFeed.run();




});
