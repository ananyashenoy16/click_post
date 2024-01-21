const form = document.querySelector("form"),
    continueBtn = form.querySelector(".button"),
    errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/login.php", true);

    xhr.onerror = () => {
        console.error("Network error occurred");
    };

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log("Server Response:", data);

                if (data.trim() === "success") {
                    window.location.href = "main.php";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            } else {
                console.error("Request failed with status:", xhr.status);
            }
        }
    };

    let formData = new FormData(form);
    xhr.send(formData);
};
