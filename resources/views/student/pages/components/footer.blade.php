<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
        &copy; <span id="copy-year"></span> PPDB - {{ $siswa->sekolah->nama_sekolah }}
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>
