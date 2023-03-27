<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="cyan" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="/manifest.json">
    <title>Document</title>
    <script>
       window.addEventListener("load", () => {
            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register("/sw.js")
            }
        });
    </script> 

    
</head>
<body>
    <h1>Service serviceWorker</h1>
</body>