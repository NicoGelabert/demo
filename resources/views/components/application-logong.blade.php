<a href="#">
    <h3 id="ng">ng</h3>
    <h3 id="nicolas-gelabert" class="show">nicolas gelabert</h3>
</a>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Obtener referencias a los elementos h3
  const ngHeading = document.getElementById("ng");
  const nicolasGelabertHeading = document.getElementById("nicolas-gelabert");

  // Función para manejar el evento de desplazamiento
  function handleScroll() {
    if (window.scrollY === 0) {
      // Si la ventana del navegador está en la parte superior, muestra 'nicolas gelabert'
      nicolasGelabertHeading.classList.add("show");
      ngHeading.classList.remove("show");
    } else {
      // De lo contrario, muestra 'ng'
      ngHeading.classList.add("show");
      nicolasGelabertHeading.classList.remove("show");
    }
  }

  // Agregar un listener para el evento de desplazamiento
  window.addEventListener("scroll", handleScroll);
});
</script>