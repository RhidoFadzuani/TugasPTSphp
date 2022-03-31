<!doctype html>
<html lang="en">

<head>

    <title>Sistem Administrasi Unsub</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(233, 233, 233);
        }

        .card {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);

            box-shadow:
                0 1px 2.2px rgba(0, 0, 0, 0.011),
                0 2.4px 5.3px rgba(0, 0, 0, 0.016),
                0 4.5px 10px rgba(0, 0, 0, 0.02),
                0 8px 17.9px rgba(0, 0, 0, 0.024),
                0 15px 33.4px rgba(0, 0, 0, 0.029),
                0 36px 80px rgba(0, 0, 0, 0.04);
        }

        .card-body {
            width: 100%;
            height: 20%;
        }

        .btn {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .logounsub{
            width: 100px;
            height: 100px;
            margin-top: 20px;
            margin-bottom: 5px;
            margin-left: 35%;
            left: 50%;
        }

        .card-title{
           text-align: center;
        }

    </style>
</head>

<body>
    <div class="card border-light" style="width: 20rem;">

        <div class="card-title">
            <div class="logounsub">
            <img src="{{asset("image/logounsub.png")}}" class="img-fluid" alt="logounsub">
              </div>
            <h5> Sistem Administrasi<br> Mahasiswa</h5>
            
        </div>
       
        <div class="card-body">
            <form action="{{route('actionlogin')}}" method="POST">
                @csrf
                @if(Session::has('pesan'))
                <div class="alert alert-danger">
                    {{Session::get('pesan')}}
                </div>
                @endif
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username">
                    <label for="floatingInput">username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name="password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"
                    type="submit">Sign
                    in</button>
            </form>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
