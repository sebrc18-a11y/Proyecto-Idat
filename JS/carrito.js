let carrito = [];
let total = 0;

function agregar(nombre, precio) {
  let productoExistente = carrito.find(
    (producto) => producto.nombre === nombre,
  );

  if (productoExistente) {
    productoExistente.cantidad++;
  } else {
    carrito.push({ nombre: nombre, precio: precio, cantidad: 1 });
  }

  total += precio;

  mostrarCarrito();
}

function mostrarCarrito() {
  let lista = document.getElementById("lista");
  lista.innerHTML = "";

  carrito.forEach((producto) => {
    let li = document.createElement("li");

    let subtotalProducto = producto.precio * producto.cantidad;

    li.textContent =
      producto.cantidad +
      "x " +
      producto.nombre +
      " - S/ " +
      subtotalProducto.toFixed(2);

    lista.appendChild(li);
  });

  document.getElementById("total").textContent = total.toFixed(2);
}
