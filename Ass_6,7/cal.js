
const display = document.querySelector(".appendto");
const numButtons = document.querySelectorAll(".num");
const operatorButtons = document.querySelectorAll(".operator");
const dotButton = document.querySelector(".dot");
const equalButton = document.querySelector(".eql");
const clearButton = document.querySelector(".clearDisplay");
const backButton = document.querySelector(".back");
const bracketButton = document.querySelector(".bracket");

let openBracket = true;


numButtons.forEach(button => {
    button.addEventListener("click", () => {
        display.value += button.textContent;
    });
});


operatorButtons.forEach(button => {
    button.addEventListener("click", () => {
        display.value += button.textContent;
    });
});


dotButton.addEventListener("click", () => {
    display.value += ".";
});


clearButton.addEventListener("click", () => {
    display.value = "";
});


backButton.addEventListener("click", () => {
    display.value = display.value.slice(0, -1);
});


bracketButton.addEventListener("click", () => {
    display.value += openBracket ? "(" : ")";
    openBracket = !openBracket;
});


equalButton.addEventListener("click", () => {
    try {
        let expression = display.value.replace(/%/g, "/100");
        display.value = math.evaluate(expression);
    } catch (error) {
        display.value = "Error";
    }
});

