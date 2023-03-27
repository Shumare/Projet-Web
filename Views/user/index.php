<!-- <form action="/login/connexion" method="POST">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="submit" value="submit">
</form> -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="cyan" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.json">
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
    <link rel="apple-touch-icon" href="/example.png">
    <div class="container my-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h1 class="text-center mb-4">Connexion</h1>
            <?php if (isset($error)): ?>
              <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <form action="/user/login" method="post">
              <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Connection</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    
        
    
</body>

</html>

