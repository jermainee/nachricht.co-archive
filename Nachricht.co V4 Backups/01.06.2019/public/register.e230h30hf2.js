if (navigator.serviceWorker.controller) {
    console.log('[ServiceWorker] active service worker found, no need to register')
} else {
    navigator.serviceWorker.register('sw.e230h30hf2.js', {
        scope: './'
    }).then(function (reg) {
        console.log('Service worker has been registered for scope:' + reg.scope);
    });
}