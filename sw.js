var CACHE_NAME = 'cache_hiitpng';
var CACHED_URLS = [
  './',
     "images/entreno1.jpg",
  "manifest.json",
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
  "sw.js",
     "percepcion.php",
     "header.php",
        "haciendoheader.php",
        
        
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
    fetch(event.request).catch(function() {
      return caches.match(event.request).then(function(response) {
        return response || caches.match('haciendoheader.php');
      });
    })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.open(CACHE_NAME).then(function(cache) {
      return cache.match(event.request).then(function(cachedResponse) {
        var fetchPromise = fetch(event.request).then(function(networkResponse) {
          cache.put(event.request, networkResponse.clone());
          return networkResponse;
        })
        return cachedResponse || fetchPromise;
      })
    })
  );
});
