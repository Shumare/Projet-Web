const PREFIX = "V2";


const CACHED_FILES = []

//S'active à l'instalation de la page 
self.addEventListener('install', (event) => {
    self.skipWaiting(); // Mettre ça pour changer de version sans devoir changer de page 
    event.waitUntil(
        (async () => {
            const cache = await caches.open(PREFIX);
            cache.add(new Request("offline.html"));

        })()
    );
    console.log(`${PREFIX} Install`);
});

//S'active au lancement de la page
self.addEventListener('activate', (event) => {
    clients.claim();//Pour que le sw prenne la main direct au chargement de la page 
    event.waitUntil((async () => {
        const keys = await caches.keys();
        console.log(keys);
        
        await Promise.all(keys.map((key) => {
            if (!key.includes(PREFIX)) {
                console.log(key.includes(PREFIX));
                return caches.delete(key)
            }
        }));
    })()
    );
    console.log(`${PREFIX} Active`);
});


self.addEventListener("fetch", (event) => {
    console.log(`${PREFIX} Fetching : ${event.request.url}, Mode : ${event.request.mode}`);
    if (event.request.mode == "navigate") {
        event.respondWith(
            (async () => {
                try {
                    const preloadResponse = await event.preloadResponse
                    if (preloadResponse) {
                        return preloadResponse
                    }
                    return await fetch(event.request);
                } catch (e) {
                    const cache = await caches.open(PREFIX);
                    return await cache.match("/offline.html");

                }
            })()

        );
    }

});