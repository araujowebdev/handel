<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handel</title>
</head>
<body>
  <?php
    // $nome = get_bloginfo('version');
    // echo $nome;

    // function somar($a, $b) {
    //   return $a + $b;
    // }
    // echo somar(5, 17);
    
    // function somar($a, $b) {
    //   echo $a + $b;
    // }
    // somar(5, 17);
  ?>
  
  <!-- <?php function formulario_contato() { ?>
    <form action="">
      <input type="text">
      <input type="button" value="Enviar">
    </form>
  <?php } ?>

  <?php formulario_contato(); ?> -->

  <!-- <?php get_search_form(); ?> -->

  <?php $teste = get_search_form(['echo' => false, 'aria_label' => 'MEU FORMULÁRIO']); ?>
  <?php echo $teste; ?>
</body>
</html>
