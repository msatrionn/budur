
  <!-- Full Page Intro -->
  <a href="<?= base_url('admin/edit/'.$post->id_profil ?? "Silahkan insert manual melalui db") ?>" class="btn btn-warning my-4 ml-4"> Edit Profil</a>
  <div class="view" style="background-image: url('<?= base_url('assets/file/profil/'.$post->gambar ?? "Belum ada gambar") ?>'); background-repeat: no-repeat; background-size: cover;width:100%;min-height: 300px;background-position-y: center;">

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
						<?= $post->profil_candi ?? "Belum ada" ?>
			</p>
      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->
