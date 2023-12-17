const input = document.querySelector("input[type='number']");

    input.addEventListener("input", (event) => {
        const value = event.target.value;

        if (value.length > 3) {
            input.value = value.substring(0, 3);
        }
    });

