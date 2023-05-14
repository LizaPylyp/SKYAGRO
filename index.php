<form action="check.php" method="post" class="forma">
        <h4 class="forma__tutor">
            Реєстрація для замовлення
        </h4>
        <label  class="conect">Назва господарства</label>
            <input class="forma__hp12" type="text" name="name" id="name">
            <a class="forma__person" href="#"></a>
        <label class="conect">Локація</label>
            <input  class="forma__len" type="text" id="location" name="location">
            <a class="forma__telefon" href="#"></a>
        <label  class="conect">Об'єм га</label>
          <input class="forma__macb" type="number" id="volume" name="volume">
          <a class="forma__poshta" href="#"></a>
        <label class="conect">Номер телефону</label>
          <input class="forma__blb" type="tel" id="telefon" placeholder="+380" name="telefon"  ></input>
          <div class="button-forma">
        <button action="check.php" method="post" class="button-modal" type="submit">Надіслати</button>
          </div>
      </form>