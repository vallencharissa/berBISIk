document.querySelectorAll('.progress').forEach(function(progressContainer) {
    let progressBar = progressContainer.querySelector(".progress_bar");
    let valueContainer = progressContainer.querySelector(".value-percentage");

    let sessionDone = parseInt(progressContainer.getAttribute('data-session-done'));
    let totalSession = parseInt(progressContainer.getAttribute('data-session'));
    let progressEndValue = (sessionDone / totalSession) * 100;
    
    let progressValue = 0;
    let speed = 20;

    let progress = setInterval(() => {
        progressValue++;

        valueContainer.textContent = `${Math.min(progressValue, Math.round(progressEndValue))}%`;
        progressBar.style.width = `${Math.min(progressValue, Math.round(progressEndValue))}%`;
        
        if(progressEndValue > 0) {
            progressBar.style.justifyContent = 'center';
        }

        if (progressValue >= progressEndValue) {
            clearInterval(progress);
        }

    }, speed);
});
