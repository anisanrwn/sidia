<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-outline-dark {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white !important;
            color: black !important;
            border-color: #0C6434 !important;
        }
        .btn-outline-dark:hover, .btn-lg:hover {
            background-color: #095128 !important;
            color: white !important;
            border-color: #095128 !important;
        }
        .form-floating label {
            color: #0C6434 !important;
        }
        .text-center {
            margin-bottom: 5px;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    
</head>
<body>
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-11">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-12 col-md-6">
                                <img src="/images/picfront.png" alt="picfront" width="625" height="650"/>
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-lg-11 col-xl-10">
                                    <div class="card-body p-3 p-md-4 p-xl-5">
                                        <div class="text-center mb-4">
                                            <a href="#">
                                                <img src="/images/logo-pglhk.png" alt="logo" width="175" height="57"/>
                                            </a>                                                                                                                                 
                                        </div>
                                        <h4 class="text-center">PUSAT PGLHK - SIDIAAAAAAAAAAAAA</h4>
                                        <p class="text-center" style="font-weight: bold; font-size: 1 rem;">Sistem Informasi Adiwiyata</p>
                                        <p class="text-center">Pusat Pengembangan Generasi Lingkungan Hidup dan KehutananBadan Penyuluhan dan Pengembangan SDM</p>
                                        <div class="d-flex gap-3 flex-column my-4">
                                            <a href="#" class="btn btn-lg btn-outline-dark">
                                                <span class="ms-2 fs-6">Buat Akun</span>
                                            </a>
                                        </div>
                                        <p class="text-center">Atau</p>
                                        <form action="#">
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                                    <label for="username">Username</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="remember_me">
                                                <label class="form-check-label" for="remember_me">Keep me logged in</label>
                                            </div>
                                            <button type="submit" class="btn btn-lg w-100" style="background-color: #0C6434; color: white;">Masuk</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
