<?php
if (!isset($_SESSION['login'])) {
  $LoginFirst = '
            <script src="../user/asset/dist/sweetalert2.all.min.js"></script>
            <script>
                function loginAlert() {
                    Swal.fire({
                        title: "Anda Belum Login!",
                        text: "Harap login terlebih dahulu!",
                        icon: "error",
                    }).then(function() {
                        document.location.href="../layanan-instalasi";
                    });
                };
            </script>';

  echo $LoginFirst;
  echo '<h6 class="text-center"></h6>';
  echo '<script>loginAlert();</script>';
}
