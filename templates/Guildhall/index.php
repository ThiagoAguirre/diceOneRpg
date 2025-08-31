<?php
// Incluir CSS
echo $this->Html->css('magnific-popup.css');

// Incluir jQuery primeiro e depois o Magnific Popup
echo $this->Html->script('jquerry-3.7.1.min.js');
echo $this->Html->script('jquery.magnific-popup.js');
echo $this->Html->script('jquery.magnific-popup.min.js');

// Botão para abrir o pop-up
echo '<button id="open-popup">Abrir Pop-up</button>';

// Estrutura do pop-up (Magnific Popup)
echo '<div id="popup-content" class="mfp-hide" style="max-width:400px; padding:20px; background:#fff;">';
echo '<h2>Bem-vindo ao Guildhall!</h2>';
echo '<p>Este é um pop-up usando Magnific Popup.</p>';
echo '</div>';

// Inicializar o Magnific Popup
?>
<script>
$(document).ready(function() {
  $("#open-popup").magnificPopup({
    items: {
      src: "#popup-content",
      type: "inline"
    }
  });
});
</script>
