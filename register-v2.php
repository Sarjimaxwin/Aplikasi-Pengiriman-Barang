<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AdminLTE 4 | Register Page v2</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Register Page v2">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="adminlte.css"><!--end::Required Plugin(AdminLTE)-->
</head> <!--end::Head--> <!--begin::Body-->

<body class="register-page bg-body-secondary">
    <div class="register-box"> <!-- /.register-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header"> <a href="../index2.html" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h1 class="mb-0"> <b>Admin</b>LTE
                    </h1>
                </a> </div>
            <div class="card-body register-card-body">
                <p class="register-box-msg">Register a new membership</p>
                <form action="tambah_data.php" method="post">
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="registerFullName" type="text" class="form-control" name="fullname" placeholder=""> <label for="registerFullName">Full Name</label> </div>
                        <div class="input-group-text"> <span class="bi bi-person"></span> </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="registerEmail" type="email" class="form-control" name="email" placeholder=""> <label for="registerEmail">Email</label> </div>
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="registerPassword" type="password" class="form-control" name="password"placeholder=""> <label for="registerPassword">Password</label> </div>
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="registerHP" type="b" class="form-control" name="no_HP" placeholder=""> <label for="registerHP">Nomor HP</label> </div>
                        <div class="input-group-text"> <span class="bi bi-phone"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="registerAlamat" type="text" class="form-control" name="alamat" placeholder=""> <label for="registerAlamat">Alamat</label> </div>
                        <div class="input-group-text"> <span class="bi bi-house"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="registerHobby" type="text" class="form-control" name="hobby" placeholder=""> <label for="registerHobby">Hobby</label> </div>
                        <div class="input-group-text"> <span class="bi bi-controller"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="registerTanggalLahir" type="date" class="form-control" name="tanggallahir" placeholder=""> <label for="registerTanggalLahir">Tanggal Lahir</label> </div>
                        <div class="input-group-text"> <span class="bi bi-calendar"></span> </div>
                    </div> <!--begin::Row-->



                    <div class="row">
                        <div class="col-8 d-inline-flex align-items-center">
                            
                        </div> <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">DAFTAR</button> </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
               
                <p class="mb-0"> <a href="index.php" class="link-primary text-center">
                        I already have a membership
                    </a> </p>
            </div> <!-- /.register-card-body -->
        </div>
    </div> <!-- /.register-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../../dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Registration Successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your registration was successful! <a href="index.php">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Check if the modal should be shown
        <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
            var myModal = new bootstrap.Modal(document.getElementById('successModal'), {
                keyboard: false
            });
            myModal.show();
        <?php endif; ?>
    </script>
    <script>
    function validateForm() {
        var nama_lengkap = document.getElementById('registerFullName').value.trim();
        var email = document.getElementById('registerEmail').value.trim();
        var password = document.getElementById('registerPassword').value.trim();
        var no_hp = document.getElementById('registerHP').value.trim();
        var alamat = document.getElementById('registerAlamat').value.trim();
        var hobby = document.getElementById('registerHobby').value.trim();
        var tanggal_lahir = document.getElementById('registerTanggalLahir').value.trim();

        if (nama_lengkap === '' || email === '' || password === '' || no_hp === '' || alamat === '' || hobby === '' || tanggal_lahir === '') {
            alert('Mohon lengkapi semua bidang yang diperlukan');
            return false;
        }
        return true;
    }

    // Event listener untuk form submission
    document.querySelector('form').addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault(); // Menghentikan pengiriman formulir jika tidak valid
        }
    });
</script>
</body><!--end::Body-->

</html>