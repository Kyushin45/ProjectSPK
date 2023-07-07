<<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Form</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="{{ url('SBAdmin/vendor/fontawesome-free/css/all.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ url('SBAdmin/css/sb-admin-2.min.css') }}">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h1 class="text-center">Form Edit</h1>
                        <h2 class="text-center">Ubah Data</h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <!-- <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar</h1>
                            </div> -->
                            <form class="user" action="{{ route('beranda.update', $calon->id) }}" method="POST">
                        
                            @csrf

                                <input type="hidden" name="_method" value="PUT">
                                 <!-- <input type="hidden" value="{{$calon->id}}" name="id"> -->
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user " id="exampleFirstName"
                                            placeholder="Nama" name="nama" value="{{ $calon->nama }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="alamat" name="alamat" value="{{ $calon->alamat }}">
                                </div>
                                <div class="form-group">
                                        <input type="date" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ $calon->tanggal_lahir }}">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Nomor Handphone" name="nomor_hp" value="{{ $calon->nomor_hp }}">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Email" name="email" value="{{ $calon->email }}">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Linkedin" name="linkedin" value="{{ $calon->linkedin }}">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="IPK" name="ipk" value="{{ $calon->ipk }}">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Lama Pengalaman Kerja" name="pengalaman_kerja" value="{{ $calon->pengalaman_kerja }}">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Jumlah Bahasa Yang Dikuasai" name="jumlah_bahasa" value="{{ $calon->jumlah_bahasa }}">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Banyak Sertifikat Kompetensi" name="jumlah_sertifikat" value="{{ $calon->jumlah_sertifikat }}">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Jumlah Project Yang Telah Selesai" name="jumlah_project" value="{{ $calon->jumlah_project }}">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a> -->
                                <!-- <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            </form>
                            <!-- <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="{{ url('SBAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script> -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="{{ url('SBAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ url('SBAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <script src="{{ url('SBAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <!-- <script src="js/sb-admin-2.min.js"></script> -->
    <script src="{{ url('SBAdmin/js/sb-admin-2.min.js') }}"></script>


</body>

</html>