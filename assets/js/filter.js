const btns = document.querySelectorAll(".project-btn");
const storeData = document.querySelectorAll(".project-box");

btns.forEach((btn) => {
    btn.addEventListener("click", (e) =>{
        e.preventDefault();
        btns.forEach((item)=>item.classList.remove('active'));
        btn.classList.add("active");
        const filter = e.target.dataset.filter;


        storeData.forEach((item) => {
            if (filter === "all" || item.classList.contains(filter)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });

    })
})
