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
  // for($i = 0; $i <= 20; $i++) {
  //   echo "\n" . $i;
  // };

  $produtos = [
    [
      'nome' => 'Camiseta Branca',
      'preco' => 'R$ 59'
    ],
    [
      'nome' => 'Bermuda Preta',
      'preco' => 'R$ 79'
    ]
  ];

  // foreach($produtos as $produto) {
  //   echo '<h2>' . $produto['nome'] . '</h2>';
  //   echo '<p>' . $produto['preco'] . '</p>';
  // }
  ?>
    <!-- <?php foreach($produtos as $produto) : ?>
      <h2> <?= $produto['nome']; ?></h2>
      <p> <?= $produto['preco']; ?></p>
    <?php endforeach; ?> -->
  
    <!-- <?php foreach($produtos as $produto) { ?>
    <h2> <?= $produto['nome']; ?></h2>
    <p> <?= $produto['preco']; ?></p>
  <?php } ?> -->

  <?php foreach($produtos as $key => $produto) { ?>
    <?php foreach($produto as $key => $value) { ?>
      <h1><?= $key . ' ' . $value; ?></h1>
    <?php } ?>
  <?php } ?>

  <?php
    $vitalicio = true;
    if($vitalicio) {
      echo 'Liberar';
    }
  ?>

<br><br>

<?php
  $categorias;
  
  if(empty($categorias)) {
    echo 'Está vazio!';
  }
?>
<br><br>
<?php
  $categorias = ['Bermuda'];
  
  if(!empty($categorias)) {
    echo 'Não está vazio!';
  }
?>

  <br><br>
  <?php
    $preco = 150;

    $mensagem = $preco > 100 ? 'Caro' : 'Barato';

    echo $mensagem;
  ?>
</body>
</html>
