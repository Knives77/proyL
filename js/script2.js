const loby = document.getElementById("loby");
const cerrar = document.getElementById("cerrar");
const xiaomi = document.getElementById("xiaomi");
const iphone = document.getElementById("iphone");
const samsung = document.getElementById("samsung");
const poco = document.getElementById("poco");

let exit = false;

loby.addEventListener("change", function () {
  const option1 = loby.value;
  if (option1 == "inicio") {
    location.href = "../../index.html";
  } else if (option1 == "galeria") {
    location.href = "../../index.html";
  }
});

cerrar.addEventListener("click", function () {
  console.log(exit);
  if (exit) {
    exit = false;
    loby.classList.add("hidden");
    xiaomi.classList.add("hidden");
    iphone.classList.add("hidden");
    samsung.classList.add("hidden");
    poco.classList.add("hidden");
  } else {
    exit = true;
    loby.classList.remove("hidden");
    xiaomi.classList.remove("hidden");
    iphone.classList.remove("hidden");
    samsung.classList.remove("hidden");
    poco.classList.remove("hidden");
  }
});

xiaomi.addEventListener("change", function () {
  const option2 = xiaomi.value;
  if (option2 == "consulta1") {
    location.href = "../xiaomi/consulta.php";
  } else if (option2 == "altas1") {
    location.href = "../xiaomi/alta.php";
  } else if (option2 == "bajas1") {
    location.href = "../xiaomi/baja.php";
  } else if (option2 == "editar1") {
    location.href = "../xiaomi/editar.php";
  }
});
iphone.addEventListener("change", function () {
  const option3 = iphone.value;
  if (option3 == "consulta2") {
    location.href = "../iphone/consulta.php";
  } else if (option3 == "altas2") {
    location.href = "../iphone/alta.php";
  } else if (option3 == "bajas2") {
    location.href = "../iphone/baja.php";
  } else if (option3 == "editar2") {
    location.href = "../iphone/editar.php";
  }
});
samsung.addEventListener("change", function () {
  const option4 = samsung.value;
  if (option4 == "consulta3") {
    location.href = "../samsung/consulta.php";
  } else if (option4 == "altas3") {
    location.href = "../samsung/alta.php";
  } else if (option4 == "bajas3") {
    location.href = "../samsung/baja.php";
  } else if (option4 == "editar3") {
    location.href = "../samsung/editar.php";
  }
});
poco.addEventListener("change", function () {
  const option5 = poco.value;
  if (option5 == "consulta4") {
    location.href = "../poco/consulta.php";
  } else if (option5 == "altas4") {
    location.href = "../poco/alta.php";
  } else if (option5 == "bajas4") {
    location.href = "../poco/baja.php";
  } else if (option5 == "editar4") {
    location.href = "../poco/editar.php";
  }
});
