  <h1>Albuns</h1>

  <ul>
      <?php
          foreach ($albuns as $album){
      ?>
            <li><a href="<?= BASE_URL ?>galeria/abrir/<?= $album['slug']; ?>"><?= $album['titulo']; ?></a></li>
      <?php
          }
      ?>
  </ul>