<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="mt-5">
        <form class="d-flex">
            <div class="position-absolute top-50 start-50 translate-middle w-25">
                <div class="card p-4 border-2 text-black rounded-4">
                <h4 class="mb-3">LOGIN</h4>
                <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" v-model="username" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" v-model="password" class="form-control" required />
            </div>
            <div class="mt-3">
                <a class="btn btn-success rounded-4 fw-bold w-100" href="dashboard">Login</a>
            </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>