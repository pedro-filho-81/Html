<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores Aritiméticos</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h1>Operadores Aritiméticos</h1>

   <p>Os operadores aritméticos PHP são usados com valores numéricos para executar operações aritméticas comuns, tais como adição, subtração, multiplicação etc.</p>

   <p>Dados os valores $x = 10 $y = 6 calcule:</p>

   <!-- tabela dos operadores aritiméticos -->
   <table>
      <caption>RESUmO OPERADORES ARITImÉTICOS</caption>
      <tr>
         <th>Operator</th>
         <th>Name</th>
         <th>Example</th>
         <th>Print</th>
         <th>Result</th>
      </tr>
      <tr>
         <td class="opera">  +  </td>
         <td>Addition</td>
         <td>$x + $y</td>
         <td>Sum of $x and $y</td>
         <td class="opera">16</td>
      </tr>
      <tr>
         <td class="opera">  -  </td>
         <td>Subtraction</td>
         <td>$x - $y</td>
         <td>Difference of $x and $y</td>
         <td class="opera">4</td>
      </tr>
      <tr>
         <td class="opera">  *  </td>
         <td>Multiplication</td>
         <td>$x * $y</td>
         <td>Product of $x and $y</td>
         <td class="opera">60</td>
      </tr>
      <tr>
         <td class="opera">  /  </td>
         <td>Division</td>
         <td>$x / $y</td>
         <td>Quotient of $x and $y</td>
         <td class="opera">1,666667</td>
      </tr>
      <tr>
         <td class="opera">  %  </td>
         <td>Modulus</td>
         <td>$x % $y</td>
         <td>Remainder of $x and $y</td>
         <td class="opera">4</td>
      </tr>
      <tr>
         <td class="opera">  **  </td>
         <td>Exponentiation</td>
         <td>$x ** $y</td>
         <td>Result of raising $x to the $y'th power</td>
         <td class="opera">1.000.000</td>
      </tr>
   </table>
   
   <!-- aqui código PHP -->

   <p>Para adicionar uma borda na tabela, use a propriedade CSS <mark>border</mark>;</p>
   <pre>
   table, th, td {
      <strong><mark>border</mark>: 1px solid black;</strong>
   } </pre>

   <p>Para evitar bordas duplas, defina a propriedade CSS: <strong><mark>border-collapse</mark>: como <mark>collapse</mark></strong></p>
   <pre>
   table, th, td {
      <strong><mark>border</mark> 1px solid black;</strong>
      <strong><mark>border-collapse</mark> collapse;</strong>
   }</pre>

   <p>Se você definir uma cor de plano de fundo de cada célula, e dê à borda uma cor branca, você tem a impressão de uma borda invisível:</p>
   <pre>
   table, th, td {
      <strong><mark>border</mark> 1px solid white;</strong>
      <strong><mark>border-collapse</mark> collapse;</strong>
   }
   th, td {
      <strong><mark>background-color</mark> # 96D4D4;</strong>
   }</pre>

   <p>Com a propriedade CSS <mark>border-radius</mark>, as bordas ficam arredondadas pelos cantos:</p>
   <pre>
   table, th, td {
      <strong><mark>border</mark> 1px solid black;</strong>
      <strong><mark>border-radius</mark> 10px;</strong>
   } </pre>

   
</body>
</html>