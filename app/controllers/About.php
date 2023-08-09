<?php
class About {
  public function index($nama = 'Awang', $pekerjaan = 'gamer') {
    echo "Halo, nama saya {$nama}. Saya adalah seorang {$pekerjaan}.";
  }

  public function page() {
    echo 'About/Page';
  }
}
