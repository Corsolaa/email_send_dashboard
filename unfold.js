const folders = document.querySelectorAll(".email")

folders.forEach( unfold => {
    unfold.querySelector(".topper").addEventListener("click", () => {
        unfold.classList.toggle("active");
    });
});