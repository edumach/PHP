<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Kalkulačka mobilních dat</title>
  <style>
    body {
      max-width: 600px;
      padding: 1em;
      margin: auto;
    }
  </style>
</head>
<body>
<h1>Kalkulačka mobilních dat</h1>

<p>Mobilní operátor <b>Vegafon</b> počítá platby za přenesená data podle následujících pravidel: Když za den přenesete méně než 10&nbsp;MB dat, zaplatíte za každý 2&nbsp;koruny, jinak zaplatíte za celý den 20&nbsp;korun.</p>

<p>Mobilní operátor <b>Zodrafon</b> počítá platby za přenesená data podle následujících pravidel: Když za den přenesete méně než 10&nbsp;MB, zaplatíte za každý 1&nbsp;korunu, jinak za každý MB nad limit připlatíte 3&nbsp;koruny.</p>        

<form>
    <p>
        <input type="number" placeholder="Přenesená data (MB)" min="1" name="data" required>
        <input type="submit" value="Porovnat">
    </p>
</form>

</body>
</html>
