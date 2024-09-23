document.querySelectorAll('.progres_kelas').forEach(function(progressContainer) {
    let progressBar = progressContainer.querySelector(".persen");
    let valueContainer = progressContainer.querySelector(".value-percentage");

    let sessionDone = parseInt(progressContainer.getAttribute('data-session-done'));
    let totalSession = parseInt(progressContainer.getAttribute('data-session'));
    let progressEndValue = (sessionDone / totalSession) * 100;
    
    let progressValue = 0;
    let speed = 20;

    let progress = setInterval(() => {
        progressValue++;

        valueContainer.textContent = `${Math.min(progressValue, Math.round(progressEndValue))}%`;
        progressBar.style.background = `conic-gradient(#FF885E ${Math.min(progressValue, Math.round(progressEndValue)) * 3.6}deg, #D9D9D9 0deg)`;

        if (progressValue >= progressEndValue) {
            clearInterval(progress);
        }

    }, speed);
});
