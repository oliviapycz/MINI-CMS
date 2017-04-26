<nav class="nav">
  <ul>
    <?php
        $reponse = $bdd->query('SELECT * FROM article ORDER BY year DESC LIMIT 0, 8');
        foreach ($reponse as $donnees): ?>
    <div class=""><li><?= "<a href='view.php?country=" .strtoupper($donnees['country']). "' >".strtoupper($donnees['country']) . "|" . $donnees['year']."</a>" ?></li>
      <?php endforeach ?>
      <li>VOIR PLUS</li>
    </div>
  </ul>
</nav>
