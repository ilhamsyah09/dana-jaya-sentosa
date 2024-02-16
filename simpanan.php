<?php include 'include/_head.php' ?>
<div class="wrapper">
    <?php include 'include/_header.php' ?>
    <div class="middle-content">
        <section class="inside_section_1 pg_simpanan bg-dark-green">
            <div class="img-hero-mobile d-block d-lg-none">
                <img src="assets/images/simpanan-images/img-hero-simpanan.png" class="img-fluid" alt="">
            </div>
            <div class="custom container">
                <div class="outer-content">
                    <div class="inside-content">
                        <div class="right-caption wow animate__animated animate__fadeInRight" data-wow-delay="0.7s" data-wow-offset="10">
                            <h4>SIMPANAN PASTI UNTUNG</h4>
                            <h3>Dana Jaya Sentosa menyadari
                                bahwa masyarakat kecil
                                menghadapi tuntutan kehidupan
                                yang berat sehari-harinya, oleh
                                karena itu kami menyiapkan
                                berbagai program tabungan
                                menguntungkan yang bermula
                                dengan setoran sangat kecil.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-hero wow animate__animated animate__fadeInLeft" data-wow-delay="0.5s" data-wow-offset="10">
                <img src="assets/images/simpanan-images/img-hero-simpanan.png" class="img-fluid" alt="">
            </div>
        </section>

        <section class="inside_section_2 pg_simpanan bg-dark-orange">
            <div class="custom container">
                <div class="inside-content">
                    <div class="left-title"></div>
                    <div class="inside_content_right bg-dark-orange">
                        <div class="box-caption wow animate__animated animate__fadeInUp" data-wow-delay="0.3s" data-wow-offset="10">
                            <p>Dengan "Simpanan Pasti Untung," setiap nasabah tidak hanya membangun kebiasaan menabung yang positif, tetapi juga mendapatkan keuntungan yang pasti. Tingkat bunga yang kompetitif dan kebijakan keuntungan yang transparan menjadi landasan produk ini, memberikan kepastian bagi setiap penabung mengenai pertumbuhan tabungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include 'incm/_data_simpanan.php';
        ?>

        <section class="inside_section_3 pg_simpanan">
            <div class="custom container">
                <div class="outer-content list_card_description">
                    <?php foreach ($data as $key => $val_data) { ?>
                        <div class="inside-content item" id="<?= $val_data['id'] ?>">
                            <div class="left-title wow animate__animated animate__fadeInLeft" data-wow-delay="0.5s">
                                <h3><?= $val_data['small_title'] ?></h3>
                            </div>
                            <div class="card-content bg-green wow animate__animated animate__fadeInUp" data-wow-delay="0.3s" data-wow-offset="10">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="assets/images/simpanan-images/<?= $val_data['img'] ?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-caption wow animate__animated animate__zoomIn" data-wow-delay="0.8s" data-wow-duration="0.8s" data-wow-offset="10">
                                            <div class="text-top">
                                                <h3><?= $val_data['title'] ?></h3>
                                                <p><?= substr(strip_tags($val_data['description']), 0, 200) . '...' ?></p>
                                            </div>
                                            <div class="to_block_desc d-none">
                                                <?= $val_data['description'] ?>
                                            </div>
                                            <div class="brosur-content d-none">
                                                <?= $val_data['brosur'] ?>
                                            </div>
                                            <a href="#exampleModal_Sim" data-bs-toggle="modal" data-bs-target="#exampleModal_Sim" class="nav-link d-flex align-items-center" data-mod-title="<?= $val_data['small_title'] ?>">
                                                <img src="assets/images/home-images/icon-right.png" alt="">
                                                SELENGKAPNYA
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="home6 contact-us">
            <div class="custom container">
                <div class="outer-content">
                    <div class="inside-content d-flex align-item-center">
                        <div class="description wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s" data-wow-duration="1s" data-wow-offset="10">
                            <h3>Tim konsultan keuangan kami berkomitmen untuk memberi solusi terbaik dalam mewujudkan kesuksesan atau mengelola dana usaha anda, kami hanya sejauh ketukan jari!</h3>
                        </div>
                        <div class="btn-contact wow animate__animated animate__fadeInLeft" data-wow-delay="1s" data-wow-duration="1.2s" data-wow-offset="20">
                            <a href="contact" class="nav-link d-flex align-items-center justify-content-center">
                                <img src="assets/images/home-images/icon-right-black.png" class="img-fluid" alt="">
                                HUBUNGI KAMI
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="modal" tabindex="-1" id="exampleModal_Sim" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content customs_modals">
                <div class="modal-header d-flex">
                    <div class="titles">
                        <h3>FORMULIR PEMBUKAAN SIMPANAN SUKARELA</h3>
                    </div>
                    <div class="logo">
                        <img src="assets/images/home-images/main-logo.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="block_description"></div>
                    <h3>Download dan isi form, lalu kirimkan kembali form via Whatsapp ke Customer Service di: <a class="links_wa" target="_blank" href="https://wa.me/6281388831567">081388831567</a></h3>
                    <div class="link_download d-flex align-items-center gap-3">
                        <a target="_blank" href="doc/formulir-pembukaan-simpanan.pdf" class="nav-link d-flex align-items-center">
                            <img src="assets/images/home-images/icons8-pdf-48.png" class="img-fluid" alt="">
                            Download PDF
                        </a>
                        <div class="brosur"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            // data-body-content
            $('#exampleModal_Sim').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var bodyContent = button.parent().find('.to_block_desc').html() // Extract info from data-* attributes
                var brosurContent = button.parent().find('.brosur-content').html(); // Extract info for brosur
                var modalTitle = button.data('mod-title')
                var modal = $(this)

                modal.find('.modal-body .block_description').html(bodyContent)
                modal.find('.modal-body .brosur').html(brosurContent); // Set brosur content
                modal.find('.modal-header .titles h3').html("FORMULIR PEMBUKAAN " + modalTitle)
            })
        });
    </script>
    <?php include 'include/_part_footer.php' ?>
</div>
<?php include 'include/_footer.php' ?>