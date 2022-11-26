<?php

include('template/header.php');
include('template/navbar.php');
// include('template/sidebar.php');

?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Siswa</h1>
        </div>
        <div class="col-12 ">
            <article class="article article-style-c">
            <center><img alt="image" src="../assets/img/bg-siswa.png" width="500px" style="margin-bottom:10px;"></center>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Pilih Metode Belajar</h4>
                </div>
                <div class="card-body">
                
                    <ul class="nav nav-tabs justify-content-center" id="myTab6" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-center" id="home-tab6" data-toggle="tab" href="#home6" role="tab" aria-controls="home" aria-selected="true">
                                <span><i class="fas fa-film"></i></span> Video Pembelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" id="profile-tab6" data-toggle="tab" href="#profile6" role="tab" aria-controls="profile" aria-selected="false">
                                <span><i class="fas fa-music"></i></span> Lagu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" id="contact-tab6" data-toggle="tab" href="#contact6" role="tab" aria-controls="contact" aria-selected="false">
                                <span><i class="fas fa-edit"></i></span> Kuis</a>
                        </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTabContent6">
                        <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home-tab6">

                            <div class="row">
                                <?php
                                $video = mysqli_query($koneksi, "SELECT * from tb_video order by id_video desc");
                                while ($data = mysqli_fetch_array($video)) {
                                ?>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <article class="article article-style-c">
                                            <div class="article-header">
                                            <iframe class="article-image"  src="<?= $data['link_video']; ?>" title="BELAJAR BAHASA INGGRIS ANAK | Game anak-anak" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                                    <iframe class="article-image"  src="<?= $data['link_video']; ?>" title="Belajar Membaca Angka 1 sampai 10 dalam Bahasa Inggris | Bunbun Learning Numbers" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_video']; ?>" title="Learning About Animals at The Zoo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_video']; ?>" title="Mengenal ABC Dalam Bhs. INGGRIS ● Anak Mudah Menirukan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_video']; ?>" title="Belajar Bahasa Inggris Cara Memperkenalkan Diri (How to introduce yourself for kids)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                                        </div>         
                                            <div class="article-details">
                                                <div class="article-category"><a href="#">News</a>
                                                    <div class="bullet"></div> <a href="#"><?= $data['tanggal']; ?></a>
                                                </div>
                                                <div class="article-title">
                                                    <h2><a href="#"><?= $data['judul_video']; ?></a></h2>
                                                </div>
                                                <p>Dalam Video Belajar ini anak-anak dapat belajar sambil bermain dengan kosa kata Bahasa Inggris </p>
                                            </div>
                                        </article>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab6">
                        <div class="row">
                                <?php
                                $lagu = mysqli_query($koneksi, "SELECT * from tb_lagu order by id_lagu desc");
                                while ($data = mysqli_fetch_array($lagu)) {
                                ?>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <article class="article article-style-c">
                                            <div class="article-header">
                                            <iframe class="article-image" src="<?= $data['link_lagu']; ?>" title="Head Shoulders Knees and Toes | Lagu Anak Eza dan Adi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                                    <iframe class="article-image"  src="<?= $data['link_lagu']; ?>" title="Lagu ABC Bahasa Inggris" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_lagu']; ?>" title="Lagu Belajar Bahasa Inggris | Buah-Buahan (Fruits) | Lagu Anak 2019 Terbaru | Bibitsku" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_lagu']; ?>" title="Mengenal ABC Dalam Bhs. INGGRIS ● Anak Mudah Menirukan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe class="article-image" src="<?= $data['link_lagu']; ?>" title="Belajar Bahasa Inggris Cara Memperkenalkan Diri (How to introduce yourself for kids)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                                        </div>         
                                            <div class="article-details">
                                                <div class="article-category"><a href="#">News</a>
                                                    <div class="bullet"></div> <a href="#"><?= $data['tanggal']; ?></a>
                                                </div>
                                                <div class="article-title">
                                                    <h2><a href="#"><?= $data['judul_lagu']; ?></a></h2>
                                                </div>
                                                <p>Dalam Video Belajar ini anak-anak dapat belajar sambil bermain dengan kosa kata Bahasa Inggris </p>
                                            </div>
                                        </article>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact6" role="tabpanel" aria-labelledby="contact-tab6">
                        <body>
                                    <div class="container mt-5">
                                        <div class="d-flex justify-content-center row">
                                            <div class="col-md-10 col-lg-10">
                                                <div class="border">
                                                    <div class="question bg-white p-3 border-bottom">
                                                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                                            <h4>MCQ Quiz</h4><span>(5 of 20)</span></div>
                                                    </div>
                                                    <div class="question bg-white p-3 border-bottom">
                                                        <div class="d-flex flex-row align-items-center question-title">
                                                            <h3 class="text-danger">Q.</h3>
                                                            <h5 class="mt-1 ml-2">Which of the following country has largest population?</h5>
                                                        </div><div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="brazil" value="brazil"> <span>Brazil</span>
                                </label>    
                                </div><div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="Germany" value="Germany"> <span>Germany</span>
                                </label>    
                                </div><div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="Indonesia" value="Indonesia"> <span>Indonesia</span>
                                </label>    
                                </div><div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="Russia" value="Russia"> <span>Russia</span>
                                </label>    
                                </div></div>
                                
                    <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
                </div>
            </div>
        </div>
    </div>
                                    </body>
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