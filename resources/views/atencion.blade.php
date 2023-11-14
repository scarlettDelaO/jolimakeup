<link rel="stylesheet" type="text/css" href="css propios/estilo_atencion.css">
<section>
<div class="container">
  <form class="customer-service-form">
    <h2>Atención al cliente</h2>
    <p>Querido cliente para ayudarlo seleccione la opción que mejor describa el inconveniente:</p>

<div id="tags">
<label><input type="radio" name="issue" value="defective"> Producto defectuoso</label>
    <label><input type="radio" name="issue" value="not_arrived"> No ha llegado el producto</label>
    <label><input type="radio" name="issue" value="extra_charges"> Cargos de más</label>
    <label><input type="radio" name="issue" value="cancel_order"> Cancelar pedido</label>
    <label><input type="radio" name="issue" value="wrong_product"> Producto incorrecto</label>
    <div class="other-issue">
    <label><input type="radio" name="issue" value="other"> Otro inconveniente:</label>
    <input type="text" name="other_issue" disabled>
  </div>


  <div id="user" class="user-info">
  <label for="username">Usuario:</label>
  <input type="text" id="username" name="username">
</div>
    </div>

    <button id="btnEnviar" type="button" class="btn btn-secondary mt-3">
                    <img src="imagenes/boton_enviar.png">
                </button>
  </form>
</div>
</section>

<script>
// JavaScript para habilitar el campo de texto cuando se selecciona "Otro inconveniente:"
const radioButtons = document.querySelectorAll('input[type="radio"][name="issue"]');
radioButtons.forEach(radio => {
  radio.addEventListener('change', function() {
    document.querySelector('input[name="other_issue"]').disabled = this.value !== "other";
  });
});
</script>