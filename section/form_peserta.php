<div class="cover-header py-5">

    <div id="quiz-start" class="mt-4 animate__animated animate__fadeInDown">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body py-4">
                        <div class="header-title">
                            <h2>Siapakah nama anda?</h2>
                            <p>Silahkan masukkan nama anda sebelum memulai kuis ini!</p>
                        </div>
                        <div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="player-name" placeholder="Masukkan Nama Anda">
                            </div>
                            <button id="start-quiz-btn" class="btn btn-info text-white">Kerjakan Kuis</button>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="quiz-section" class="mt-3 hidden">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body py-4">
                        <h3 id="question">Pertanyaan</h3>
                        <p id="kategori_kuis">Kategori</p>
                        <div class="options">
                            <button class="option-btn" data-option="A">Option A</button>
                            <button class="option-btn" data-option="B">Option B</button>
                            <button class="option-btn" data-option="C">Option C</button>
                            <button class="option-btn" data-option="D">Option D</button>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button id="next-btn" class="btn btn-info text-white hidden">Next Question</button>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="result-section" class="section hidden">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card text-center">
                    <div class="card-header">
                    </div>
                    <div class="card-body py-4">
                        <h3 class="card-title">Kuis Berakhir!</h3>
                        <p class="card-text">Nama Peserta:<br><span class="fw-bold" id="final-player-name"></span></p>
                        <p class="card-text">Hasil Poin Kuis:<br><span class="fw-bold" id="final-score"></span> | <span class="fw-bold" id="total-questions"></span>
                        </p>
                        <div class="d-flex flex-column justify-content-md-center flex-md-row mt-4">
                            <button id="restart-quiz-btn" class="btn btn-info text-white w-100 mb-2 mb-md-0 me-md-2">Restart Quiz</button>
                            <a href="index.php" class="btn btn-info w-100 text-white">Kembali ke Beranda</a>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>