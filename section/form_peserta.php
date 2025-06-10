<div class="cover-header py-5">

    <div id="quiz-start" class="mt-3">
        <div class="header-title">
            <h2>Siapakah nama anda?</h2>
            <p>Silahkan masukkan nama anda sebelum memulai kuis ini!</p>
        </div>
        <div>
            <div class="mb-3">
                <input type="text" class="form-control" id="player-name" placeholder="Masukkan Nama Anda">
            </div>
            <button id="start-quiz-btn" class="btn btn-primary">Kerjakan Kuis</button>
        </div>
    </div>

    <div id="quiz-section" class="mt-3 hidden">
        <h2 id="question">Pertanyaan</h2>
        <p id="kategori_kuis">Kategori</p>
        <div class="options">
            <button class="option-btn" data-option="A">Option A</button>
            <button class="option-btn" data-option="B">Option B</button>
            <button class="option-btn" data-option="C">Option C</button>
            <button class="option-btn" data-option="D">Option D</button>
        </div>
        <button id="next-btn" class="btn btn-primary mt-3 hidden">Next Question</button>
    </div>

    <div id="result-section" class="section hidden">
        <h2>Kuis Berakhir!</h2>
        <p>Nama Peserta: <span id="final-player-name"></span></p>
        <p>
            Hasil Skor Kuis: <span id="final-score"></span> |
            <span id="total-questions"></span>
        </p>
        <button id="restart-quiz-btn" class="btn btn-primary">Restart Quiz</button>
        <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
    </div>

</div>