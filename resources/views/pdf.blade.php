<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">

        <tr>
            <td>{{$user->product_type}}</td>
            <td>
                {{$user->productname}}
            </td>
            <td>
              {{$user->product_description}}
            </td>
          </tr>
          <tr>
            <td>
              {{$user->product_quantity}}
            </td>
            <td>
              {{$user->product_color}}
            </td>
            <td>
              {{$user->product_price}}
            </td>
          </tr>
    </table>
  </body>
</html>
