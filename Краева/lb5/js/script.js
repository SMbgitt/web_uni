function display(text) {
    document.getElementById("output").innerHTML = "<p><b>" + text + "</b></p>";
}

// Информация о браузере (Navigator.userAgent)
function showBrowserInfo() {
    display("Браузер: " + navigator.userAgent);
}

// Операционная система (Navigator.platform)
function showOS() {
    display("Операционная система: " + navigator.platform);
}

// Ширина и высота экрана (Screen)
function showScreenSize() {
    display("Ширина экрана: " + screen.width + " px, Высота экрана: " + screen.height + " px");
}

// Ширина и высота экрана с учётом служебных элементов (availWidth / availHeight)
function showAvailScreenSize() {
    display("Доступная ширина: " + screen.availWidth + " px, Доступная высота: " + screen.availHeight + " px");
}

// Глубина цвета (Screen.colorDepth)
function showColorDepth() {
    display("Глубина цвета: " + screen.colorDepth + " бит");
}

// Подключение к интернету (Navigator.onLine)
function showOnlineStatus() {
    let status = navigator.onLine ? "Подключено" : "Отключено";
    display("Подключение к интернету: " + status);
}

// Предпочтительный язык (Navigator.language)
function showLanguage() {
    display("Предпочтительный язык: " + navigator.language);
}

// URL текущего документа (Location.href)
function showURL() {
    display("URL документа: " + location.href);
}

// Протокол (Location.protocol)
function showProtocol() {
    display("Протокол: " + location.protocol);
}

// Хост (Location.host)
function showHost() {
    let host = location.host || "(локальный файл, хост не определён)";
    display("Хост: " + host);
}
