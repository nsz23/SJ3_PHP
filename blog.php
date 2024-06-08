<?php include 'partials/header.php'; ?>

<!-- tabulka -->
<div>
    <h3 id="h2tabulka">Tabuľka vyhľadávaných špecialít
    </h3>
</div>

  <table class="table table-hover" id="tab">
    <thead>
      <tr>
        <th scope="col">P.č.</th>
        <th scope="col">Menu</th>
        <th scope="col">Cena</th>
        <th scope="col">Alergény</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Korejská studená polievka</td>
        <td>6,50 EUR</td>
        <td>2,3</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Pečené chobotničky s fermentovanou zeleninou</td>
        <td>8,70 EUR</td>
        <td>4,5</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td >Ryžové cestoviny s morskými plodmi</td>
        <td>9,80 EUR</td>
        <td>1,2,3</td>
    </tr>
        <th scope="row">4</th>
        <td>Korejská studená polievka</td>
        <td>6,50 EUR</td>
        <td>2,3</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Pečené chobotničky s fermentovanou zeleninou</td>
        <td>8,70 EUR</td>
        <td>4,5</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td >Ryžové cestoviny s morskými plodmi</td>
        <td>9,80 EUR</td>
        <td>1,2,3</td>
      </tr>

    </tbody>
  </table>


  <!-- Zoznam -->
  <h4> Navštív: </h4>
  <div class="zoznam">
    <ul>
      <li><div class="button-link"> <!-- Button : odkaz na inú stránku -->
        <a href="https://www.rokkiu.com/" target="_blank" id="button-link">
          <button>Rokkiu Japanese Cuisine</button></a>
      </div></li>
      <li><div class="button-link">
        <a href="https://www.wabisabi.sk/" target="_blank" id="button-link">
          <button>WABI SABI Japanese Restaurant</button></a>
      </div></li>
    </ul>
  </div>


  <!-- Button : odkaz na inú stránku 
  <div class="button-link">
    <a href="https://www.rokkiu.com/" target="_blank" id="button-link">
      <button>Navštív Rokkiu Japanese Cuisine</button></a>
  </div> -->

<?php include 'partials/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>