const valInput = document.getElementById("sale_value");

valInput.addEventListener("input", function (event) {
    const cursorPosition = valInput.selectionStart;

    let inputValue = event.target.value.replace(/[^0-9.]/g, "").replace(/(\..*)\./g, "$1");

    if (inputValue.includes(".")) {
        const [integerPart, decimalPart] = inputValue.split(".");
        inputValue = `${integerPart.slice(0, 6)}.${decimalPart ? decimalPart.slice(0, 2) : ""}`;
    } else {
        inputValue = inputValue.slice(0, 6);
    }

    inputValue = Math.min(parseFloat(inputValue) || 0, 999999.99).toFixed(2);

    event.target.value = inputValue;

    valInput.setSelectionRange(cursorPosition, cursorPosition);
});
