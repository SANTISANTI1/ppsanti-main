<?php

include('template/header.php');
include('template/navbar.php');
// include('template/sidebar.php');

?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Metode Pembelajaran Melalui Video</h1>
        </div>
        <!-- <div class="col-12 ">
            <article class="article article-style-c">
            <center><img alt="image" src="../assets/img/bg-siswa.png" width="500px" style="margin-bottom:10px;"></center>
        </div> -->

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <center>
                <a href="dashboard.php" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                <h1>Back to Dashboard</h1>
                </center>
                </div>
                <div class="card-body">

                <div class="tab-content tab-bordered" id="myTabContent6">
                        <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home-tab6">

                        <div class="row">
                            <form action="" method="POST">
                                
                            <?php
                                $no = 1;
                                $noo = 1;
                                $kuis = mysqli_query($koneksi, "SELECT * from tb_kuis order by id_kuis desc");
                                $total_soal = mysqli_num_rows($kuis);
                                while ($data = mysqli_fetch_array($kuis)) {
                                    
                            ?>
                            
                            
                            <div class="container mt-5">
                                            <div class="d-flex justify-content-center row">
                                                <div class="col-md-10 col-lg-10">
                                                    <div class="border">
                                                        <div class="question bg-white p-3 border-bottom">
                                                            <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                                                <h4>Quiz</h4><span>(<?= $noo++ . " of " . $total_soal; ?>)</span>
                                                            </div>

                                                        </div>
                                                        <div class="question bg-white p-3 border-bottom">
                                                            <div class="d-flex flex-row align-items-center question-title">
                                                                <h3 class="text-danger"><?= $no++; ?></h3>
                                                                <h5 class="mt-1 ml-2"><?= $data['soal_kuis']; ?></h5><br>
                                                            </div>
                                                            <div class="ans ml-2">
                                                                <input type="radio" value="a" name="jawaban['$data['id_kuis']']"> <span>
                                                                    <td><?= $data['jawab_a'] ?>
                                                                </span>
                                                            </div>
                                                            <div class="ans ml-2">
                                                                <input type="radio" value="b" name="jawaban['$data['id_kuis']']"> <span>
                                                                    <td><?= $data['jawab_b'] ?></span>
                                                            </div>
                                                            <div class="ans ml-2">
                                                                <input type="radio" value="c" name="jawaban['$data['id_kuis']']"> <span>
                                                                    <td><?= $data['jawab_c'] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <button class="btn btn-primary" type="submit" name="nilai">Score</button>
                                                    </div>
                                                        </form>
                                                        <?php
                                                        if (isset($_POST['nilai'])) {  
                                                            $jawaban = $_POST['jawaban'];
                                                            $benar   = 0;
                                                            // echo "<script>alert('Anda menjawab');window.location='dashboard.php'</script>";
                                                            if (count($jawaban) < 1) {
                                                                echo "<script>alert('Anda belum menjawab');window.location='dashboard.php'</script>";
                                                            } else {
                                                                foreach ($jawaban as $no => $nilai) {
                                                                    $data_soal = mysqli_query($koneksi, "SELECT * FROM soal_kuis WHERE no=$no");
                                                                    $data_jawab = mysqli_fetch_array($data_soal);
                                                                    if ($data_jawab['jawaban'] == $nilai) {
                                                                        $benar = $benar + 1;
                                                                    }
                                                                }
                                                                echo $benar;
                                                                $jumlah_soal = mysqli_query($koneksi, "SELECT count (*) FROM soal_kuis");
                                                                $jum_soal = mysqli_fetch_array($jumlah_soal, 0);
                                                                $nilai_per_soal = 100 / $jum_soal;
                                                                $jawaban_salah = $jum_soal - $benar;
                                                                $presentase_benar = round($benar / $jum_soal * 100, 2) . "%";
                                                                $presentase_salah = round($jawaban_salah / $jum_soal * 100, 2) . "%";
                                                                echo "<h1>HASIL JAWABAN ANDA : </h1>";
                                                                echo "<br>PRESENTASE JAWABAN SALAH : " . $presentase_salah;
                                                                echo "<h2>Nilai :" . $nilai_per_soal * $benar . "</h2";
                                                            }
                                                        }

                                                        
                                                        ?>
                                                </div>

                        </div>
                        </div>
        </div>
</div>

    <div class="section-body">
    </div>
    </section>
</div>

<?php

include('template/footer.php');

?>
                            