<?php
 
class About {
    public function index($nama= 'Marchelino', $pekerjaan = 'Siswa')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

        public function page()
        {
            echo 'About/page';
        }
    }