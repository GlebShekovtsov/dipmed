function loader (url, loaded) {
    //Получаем элементы
    var main = document.getElementById("main"),
        loading = document.getElementById("loading");
   
    // Добавляем анимацию загрузки
    loading.classList.add("load");
   
    //Загрузка страницы
    fetch(url)
    .then(res => res.text())
    .then(txt => {
      main.innerHTML = txt;
      if (typeof loaded == "function") { loaded(); }
    })
    .finally(() => {
      loading.classList.remove("load");
    });
  }