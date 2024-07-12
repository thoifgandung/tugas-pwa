const CACHE_NAME = 'pwa-cache';
const urlsToCache = [
  '/',
  '/path/to/icon-192x192.png',
  '/path/to/icon-512x512.png',
  // Tambahkan file lain yang ingin di-cache
];

// Install Service Worker
self.addEventListener('install', event => {
  console.log('SuperPWA service worker installation');
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      console.log('SuperPWA service worker caching dependencies');
      return cache.addAll(urlsToCache).catch(error => {
        console.error('Failed to cache', error);
      });
    })
  );
});

// Activate Service Worker
self.addEventListener('activate', event => {
  console.log('SuperPWA service worker activation');
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheName !== CACHE_NAME) {
            console.log('SuperPWA old cache removed', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Fetch Requests
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    }).catch(error => {
      console.error('Fetch failed', error);
    })
  );
});
