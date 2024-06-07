const loby = document.getElementById("loby");
const xiaomi = document.getElementById("xiaomi");
const iphone = document.getElementById("iphone");
const samsung = document.getElementById("samsung");
const poco = document.getElementById("poco");

const content = document.getElementById("content");
const galeria = document.getElementById("galeria");

loby.addEventListener("change", function () {
  const option1 = loby.value;
  if (option1 == "inicio") {
    galeria.classList.add("hidden");
    content.classList.remove("hidden");
  } else if (option1 == "galeria") {
    content.classList.add("hidden");
    galeria.classList.remove("hidden");
  }
});
xiaomi.addEventListener("change", function () {
  const option2 = xiaomi.value;
  if (option2 == "consulta1") {
    alert(option2);
  } else if (option2 == "altas1") {
    alert(option2);
  } else if (option2 == "bajas1") {
    alert(option2);
  } else if (option2 == "editar1") {
    alert(option2);
  }
});
iphone.addEventListener("change", function () {
  const option3 = iphone.value;
  if (option3 == "consulta2") {
    alert(option3);
  } else if (option3 == "altas2") {
    alert(option3);
  } else if (option3 == "bajas2") {
    alert(option3);
  } else if (option3 == "editar2") {
    alert(option3);
  }
});
samsung.addEventListener("change", function () {
  const option4 = samsung.value;
  if (option4 == "consulta3") {
    alert(option4);
  } else if (option4 == "altas3") {
    alert(option4);
  } else if (option4 == "bajas3") {
    alert(option4);
  } else if (option4 == "editar3") {
    alert(option4);
  }
});
poco.addEventListener("change", function () {
  const option5 = poco.value;
  if (option5 == "consulta4") {
    alert(option5);
  } else if (option5 == "altas4") {
    alert(option5);
  } else if (option5 == "bajas4") {
    alert(option5);
  } else if (option5 == "editar4") {
    alert(option5);
  }
});
