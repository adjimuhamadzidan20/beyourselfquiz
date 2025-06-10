<?php

$sql = "SELECT * FROM kategori";
$hasil = mysqli_query($connect, $sql);

?>

<div class="cover-header py-5">
    <div class="header-title mt-3">
        <h2 class="text-uppercase">Pilih Kategori Quiz</h2>
    </div>
    <form action="get_question.php" method="post">
        <div class="pilih-kategori mt-4 mb-2">
            <select class="form-select" aria-label="Default select example" name="kategori" required>
                <option value="" selected>-- Pilih Kategori --</option>
                <?php
                while ($data = mysqli_fetch_assoc($hasil)) :
                ?>
                    <option value="<?= $data['id_kategori']; ?>"><?= $data['kategori']; ?></option>
                <?php
                endwhile;
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Next</button>
    </form>
</div>