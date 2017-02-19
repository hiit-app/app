var CACHE_NAME = 'cache_hiitpng2';
var CACHED_URLS = [
'./',
     "index.php",
     "images/entreno1.jpg",
     "images/entreno2.jpg",
     "images/entreno3.jpg",
     "images/hiit.144.png",
     "images/hiit.196.png",
     "images/hiit.36.png",
     "images/hiit.48.png",
     "images/hiit.72.png",
     "images/hiit.96.png",
     "modalpopup.php",
     "percepcion.css",
     "percepcion.js",
     "sw_app.js",
     "percepcion.php",
     "header.php",
        
        "manifest.json",
        "bootstrap-3.3.7-dist/js/bootstrap.min.js",
        "bootstrap-3.3.7-dist/js/bootstrap.js",
        "bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.eot",
        "bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.svg",
        "bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.ttf",
        "bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.woff",
        "bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.woff2",
        "bootstrap-3.3.7-dist/css/bootstrap.min.css",
        "bootstrap-3.3.7-dist/css/bootstrap.css",
        "bootstrap-3.3.7-dist/css/bootstrap-theme.css",
        "Audiowide.ttf",
     "https://fonts.googleapis.com/css?family=Audiowide|Barrio",
  'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
  
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function(cache) {
      return cache.addAll(CACHED_URLS);
    })
  );

});


self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return response
        if (response) {
          return response;
        }

        // IMPORTANT: Clone the request. A request is a stream and
        // can only be consumed once. Since we are consuming this
        // once by cache and once by the browser for fetch, we need
        // to clone the response.
        var fetchRequest = event.request.clone();

        return fetch(fetchRequest).then(
          function(response) {
            // Check if we received a valid response
            if(!response || response.status !== 200 || response.type !== 'basic') {
              return response;
            }

            // IMPORTANT: Clone the response. A response is a stream
            // and because we want the browser to consume the response
            // as well as the cache consuming the response, we need
            // to clone it so we have two streams.
            var responseToCache = response.clone();

            caches.open(CACHE_NAME)
              .then(function(cache) {
                cache.put(event.request, responseToCache);
              });

            return response;
          }
        );
      })
    );
});
