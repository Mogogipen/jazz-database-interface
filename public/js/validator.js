var items = document.querySelectorAll("input[type='number']");
console.log(items);
for (i = 0; i < items.length; i++) {
    items[i].addEventListener("keypress", function (evt) {
        if (evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
        }
    });
}