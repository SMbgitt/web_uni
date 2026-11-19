// Упражнение 1: Alert с информацией о студенте
function show_information() {
    alert("Кутдусов Д.А. Группа ИКПИ Лабораторная № 4");
}

// Упражнение 2: Alert с вводом среднего балла
function show_information2(elem) {
    let x = parseFloat(elem.value);
    if (!isNaN(x) && 3.00 <= x && x <= 5.00) {
        alert("Ваш средний балл – " + elem.value + " балла");
    } else {
        alert("Нет данных!");
    }
}

// Упражнение 3: Анкета — рейтинг
function send(family, radio1, radio2, radio3) {
    let markProg = parseInt(radio1.value);
    let markMath = parseInt(radio2.value);
    let markPhyz = parseInt(radio3.value);
    document.write("<h2>Фамилия: " + family.value + "</h2>");
    document.write("<h2>Оценка по дисциплине «Программирование»: " + markProg + "</h2>");
    document.write("<h2>Оценка по дисциплине «Математика»: " + markMath + "</h2>");
    document.write("<h2>Оценка по дисциплине «Физика»: " + markPhyz + "</h2>");
    document.write("<h2>Рейтинг: " + ((markProg + markMath + markPhyz) / 3).toFixed(2) + "</h2>");
}

// Упражнение 4: Проверка e-mail регулярным выражением
function check_mail() {
    let email = document.getElementById("email").value;
    let reg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (reg.test(email)) {
        document.getElementById("result").innerText = "Адрес правильный";
        document.getElementById("result").style.color = "green";
    } else {
        document.getElementById("result").innerText = "Адрес неверный";
        document.getElementById("result").style.color = "red";
    }
}

// Упражнение 4: Смена фона по двойному клику
function change_color() {
    let layer = document.getElementById("layer");
    if (layer.style.backgroundColor === "yellow") {
        layer.style.backgroundColor = "";
    } else {
        layer.style.backgroundColor = "yellow";
    }
}
