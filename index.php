<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet">
    <title>PHP Таблица истинности</title>
  </head>
<body>
    <table>
        <caption>PHP Таблица истинности</caption> 
        <tr>
          <th rowspan="1">A</th>
          <th rowspan="1">B</th>
          <th rowspan="1">!A</th>
          <th rowspan="1">A || B</th>
          <th rowspan="1">A && B</th>
          <th rowspan="1">A xor B</th>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>formul1</td>
            <td>formul2</td>
            <td>formul3</td>
            <td>formul4</td>
          </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td>formul1</td>
            <td>formul2</td>
            <td>formul3</td>
            <td>formul4</td>
          </tr>
          <tr>
            <td>1</td>
            <td>0</td>
            <td>formul1</td>
            <td>formul2</td>
            <td>formul3</td>
            <td>formul4</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>formul1</td>
            <td>formul2</td>
            <td>formul3</td>
            <td>formul4</td>
          </tr>
        </table>
</body>
</html>