// memulai JS DOM
document.addEventListener('DOMContentLoaded', () => {
    // menangkap id elemen bagian form pemain
    const quizStartSection = document.getElementById('quiz-start');

    // menangkap id elemen input nama pemain
    const playerNameInput = document.getElementById('player-name');

    // menangkap id elemen btn start quiz
    const startQuizBtn = document.getElementById('start-quiz-btn');

    // menangkap id elemen bagian quiz
    const quizSection = document.getElementById('quiz-section');

    // menangkap id elemen text soal quiz
    const questionElement = document.getElementById('question');

    // menangkap id elemen text kategori quiz
    const kategoriElement = document.getElementById('kategori_kuis');

    // menangkap id elemen opsi jawaban / PG
    const optionButtons = document.querySelectorAll('.option-btn');

    // menangkap id elemen btn next quiz
    const nextBtn = document.getElementById('next-btn');

    // menangkap id elemen bagian hasil quiz / score
    const resultSection = document.getElementById('result-section');

    // menangkap id elemen text nama pemain
    const finalPlayerName = document.getElementById('final-player-name');

    // menangkap id elemen nilai score kuis pemain
    const finalScoreElement = document.getElementById('final-score');

    // menangkap id elemen total score kuis
    const totalQuestionsElement = document.getElementById('total-questions');

    // menangkap id elemen btn restart kuis
    const restartQuizBtn = document.getElementById('restart-quiz-btn');

    let questions = [];
    let currentQuestionIndex = 0;
    let score = 0;
    let selectedOption = null;
    let playerName = '';
    let nomer = 1;

    // mengambil data soal kuis dari database (php) / server
    async function fetchQuestions() {
        try {
            const response = await fetch('data_pertanyaan.php');
            questions = await response.json();
            if (questions.length === 0) {
                alert('No questions available. Please add some questions in the admin panel.');
                quizStartSection.classList.add('hidden');
                return;
            } else {
                displayQuestion();
                quizSection.classList.remove('hidden');
            }
        } catch (error) {
            console.error('Error fetching questions:', error);
            alert('Failed to load quiz questions. Please try again later.');
        }
    }

    // memulai kuis
    startQuizBtn.addEventListener('click', () => {
        playerName = playerNameInput.value.trim();
        if (playerName) {
            quizStartSection.classList.add('hidden');
            fetchQuestions();
        } else {
            alert('Masukkan nama anda sebelum memulai kuis!');
        }
    });

    // menampilkan soal kuis
    function displayQuestion() {
        // reset kuis
        resetQuizState();

        if (currentQuestionIndex < questions.length) {
            const currentQuestion = questions[currentQuestionIndex];

            // menangkap data kuis sesuai kolom table database
            questionElement.textContent = nomer + '. ' + currentQuestion.pertanyaan;
            kategoriElement.textContent = currentQuestion.kategori;
            optionButtons[0].textContent = currentQuestion.opsi_1;
            optionButtons[1].textContent = currentQuestion.opsi_2;
            optionButtons[2].textContent = currentQuestion.opsi_3;
            optionButtons[3].textContent = currentQuestion.opsi_4;
        } else {
            // menampilkan score
            showResult();
        }
    }

    // option button untuk list jawaban
    optionButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            if (selectedOption === null) { // Allow selection only once per question
                selectedOption = e.target.dataset.option;
                optionButtons.forEach(btn => btn.classList.remove('selected'));

                e.target.classList.add('selected');
                checkAnswer(e.target, selectedOption);
                nextBtn.classList.remove('hidden');
            }
        });
    });

    // memeriksa jawaban dari opsi yang dipilih
    function checkAnswer(selectedButton, option) {
        // menangkap data kuis sesuai kolom table database
        const currentQuestion = questions[currentQuestionIndex];
        const correctAnswer = currentQuestion.jawaban;

        optionButtons.forEach(button => {
            button.disabled = true; // Disable all options after selection
            if (button.dataset.option === correctAnswer) {
                button.classList.add('correct');
            }
        });

        if (option === correctAnswer) {
            score++;
        } else {
            selectedButton.classList.add('incorrect');
        }
    }

    // btn next jawaban selanjutnya
    nextBtn.addEventListener('click', () => {
        currentQuestionIndex++;
        nomer++;
        displayQuestion();
    });

    // menampilkan hasil quiz / score
    async function showResult() {
        quizSection.classList.add('hidden');
        resultSection.classList.remove('hidden');
        finalPlayerName.textContent = playerName;
        finalScoreElement.textContent = score;
        totalQuestionsElement.textContent = questions.length;

        // Submit score to the database
        await submitScore(playerName, score);
    }

    // mengirimkan hasil quiz ke dalam database
    async function submitScore(name, finalScore) {
        try {
            const response = await fetch('hasil_kuis.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    nama_peserta: name,
                    hasil_kuis: finalScore
                }),
            });

            const data = await response.json();
            if (data.success) {
                console.log('Hasil kuis berhasil terkirim!');
            } else {
                console.error('Hasil kuis gagal terkirim!:', data.message);
            }
        } catch (error) {
            console.error('Hasil kuis gagal terkirim!:', error);
        }
    }

    // btn reset quiz kembali ke awal
    function resetQuizState() {
        nextBtn.classList.add('hidden');
        selectedOption = null;
        optionButtons.forEach(button => {
            button.classList.remove('selected', 'correct', 'incorrect');
            button.disabled = false;
        });
    }

    // Event listener for restart quiz button
    restartQuizBtn.addEventListener('click', () => {
        currentQuestionIndex = 0;
        score = 0;
        playerNameInput.value = '';
        quizStartSection.classList.remove('hidden');
        resultSection.classList.add('hidden');
    });
});