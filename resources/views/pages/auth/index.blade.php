<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>AdminLTE 3 | Log in</title>

        <!-- Google Font: Source Sans Pro -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="{{
                asset('assets/plugins/fontawesome-free/css/all.min.css')
            }}"
        />
        <!-- icheck bootstrap -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'
                )
            }}"
        />
        <!-- Theme style -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/adminlte.min.css') }}"
        />
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href=""><b>Tata</b>Tertib</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Masuk untuk ke halaman beranda.</p>

                    <form action="{{ route('login.post') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email"
                                name="email"
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                        <p class="">{{ $message }}</p>
                        @enderror
                        <div class="input-group mb-3">
                            <input
                                type="password"
                                class="form-control"
                                placeholder="Password"
                                name="password"
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-4">
                                <button
                                    type="submit"
                                    class="btn btn-primary btn-block"
                                >
                                    Sign In
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{
                asset('assets/plugins/jquery/jquery.min.js')
            }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{
                asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')
            }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
    </body>
</html>
