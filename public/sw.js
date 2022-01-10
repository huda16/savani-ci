// import CacheHelper from "./js/cache-helper";
// dari sini
// const CONFIG = {
//   BASE_URL: "https://savani.masuk.web.id/",
//   BASE_IMAGE_URL: "https://savani.masuk.web.id/img",
//   DEFAULT_LANGUAGE: "en-us",
//   CACHE_NAME: "savani",
//   DATABASE_NAME: "savani-catalogue-database",
//   DATABASE_VERSION: 1,
//   OBJECT_STORE_NAME: "savani",
// };

// const CacheHelper = {
//   async cachingAppShell(requests) {
//     const cache = await this._openCache();
//     cache.addAll(requests);
//   },

//   async deleteOldCache() {
//     const cacheNames = await caches.keys();
//     cacheNames
//       .filter((name) => name !== CONFIG.CACHE_NAME)
//       .map((filteredName) => caches.delete(filteredName));
//   },

//   async revalidateCache(request) {
//     const response = await caches.match(request);

//     if (response) {
//       return response;
//     }
//     return this._fetchRequest(request);
//   },

//   async _openCache() {
//     return caches.open(CONFIG.CACHE_NAME);
//   },

//   async _fetchRequest(request) {
//     const response = await fetch(request);

//     if (!response || response.status !== 200) {
//       return response;
//     }

//     await this._addCache(request);
//     return response;
//   },

//   async _addCache(request) {
//     const cache = await this._openCache();
//     cache.add(request);
//   },
// };

// const assets = ["/", "/index.php", "/sw.js", "/manifest.json"];

// self.addEventListener("install", (event) => {
//   event.waitUntil(CacheHelper.cachingAppShell(assets));
// });

// self.addEventListener("activate", (event) => {
//   event.waitUntil(CacheHelper.deleteOldCache());
// });

// self.addEventListener("fetch", (event) => {
//   event.respondWith(CacheHelper.revalidateCache(event.request));
// });

// sampai sini

// var cacheName = "hello-pwa";
// var filesToCache = ["/", "/index.php", "/sw.js", "/manifest.json"];

// /* Start the service worker and cache all of the app's content */
// self.addEventListener("install", function (e) {
//   e.waitUntil(
//     caches.open(cacheName).then(function (cache) {
//       return cache.addAll(filesToCache);
//     })
//   );
// });

// /* Serve cached content when offline */
// self.addEventListener("fetch", function (e) {
//   e.respondWith(
//     caches.match(e.request).then(function (response) {
//       return response || fetch(e.request);
//     })
//   );
// });

// const CACHE_NAME = "savani";
// const urlsToCache = [
//   "/",
//   "/js/index.js",
//   "/js/sw.js",
//   "/manifest.json",
//   "/index.php",
//   "/bootstrap/*",
//   "/css/*",
//   "/js/*",
//   "/img/*",
// ];

// importScripts(
//   "https://storage.googleapis.com/workbox-cdn/releases/3.6.3/workbox-sw.js"
// );

// if (workbox) {
//   console.log(`Workbox berhasil dimuat`);
// } else {
//   console.log(`Workbox gagal dimuat`);
// }

// workbox.precaching.precacheAndRoute(
//   [
//     { url: "/", revision: "1" },
//     { url: "/js/index.js", revision: "1" },
//     { url: "/js/sw.js", revision: "1" },
//     { url: "/manifest.json", revision: "1" },
//     { url: "/index.php", revision: "1" },
//     { url: "/bootstrap/*", revision: "1" },
//     { url: "/css/*", revision: "1" },
//     { url: "/img/*", revision: "1" },
//   ],
//   {
//     // Ignore all URL parameters.
//     ignoreUrlParametersMatching: [/.*/],
//   }
// );

// workbox.routing.registerRoute(
//   /\.(?:png|gif|jpg|jpeg|svg)$/,
//   workbox.strategies.cacheFirst({
//     cacheName: "images",
//     plugins: [
//       new workbox.expiration.Plugin({
//         maxEntries: 200,
//         maxAgeSeconds: 7 * 24 * 60 * 60, // 7 hari
//       }),
//     ],
//   })
// );
