
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('<?= base_url('assets/file/profil/'.$profil->gambar) ?>'); background-repeat: no-repeat; background-size: cover;height:300px;background-position-y: center;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" >
      <!-- Content -->
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn" id="profil">

      <h2 class="text-center py-4 my-4">Tentang Borobudur</h2>
            <!-- Main heading -->
            <h3 class="h3 mb-3">Candi Borobudur</h3>
            <p style="text-align:justify;margin-bottom: 50px;">
							<?= $profil->profil_candi ?>
						</p>
      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->
