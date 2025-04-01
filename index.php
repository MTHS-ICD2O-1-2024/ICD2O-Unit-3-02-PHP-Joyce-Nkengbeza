<!DOCTYPE html>
<!-- ICS2O-Unit3-01-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of Pyramid PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Joyce Nkengbeza" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-iconnew.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32new.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16new.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Volume of Pyramid PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of Pyramid PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/pyramid.png" alt="Volume of Pyramid" />
      </div>
      <h3>Formula</h3>
      <div class="page-content-php">
        <h2>A = (L x H x W)/3</h2>
      </div>
      <div class="page-content-php">Please enter integers for dimensions</div>
      <br />
      <div class="page-content-php">
        <form action="answer.php" method="GET">
          <p>Length</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="length-m">
            <label class="mdl-textfield__label" for="length-m">Length...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <p>Width</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="width-m">
            <label class="mdl-textfield__label" for="width-m">Width...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <p>Height</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-m">
            <label class="mdl-textfield__label" for="height-m">Height...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Calculate
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>