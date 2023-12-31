<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="container">

            <div class="py-4 my-5 text-center">
                <h1>Implement Builder Pattern in Laravel</h1>
                <p>This is a very basic example of Builder Pattern in Laravel</p>
            </div>
          

            <form action="/" method="GET">
                <div class="mb-3">
                  <label for="amount" class="form-label">Order Amount:</label>
                  <input type="number" step="any" min="0" name="amount" class="form-control" id="amount" value="{{ request()->amount }}">
                </div>

                <div class="mb-3">
                  <label for="tax" class="form-label">Add Vat/Tax(%):</label>
                  <input type="number" step="any" min="0" name="tax" class="form-control" id="tax" value="{{ request()->tax }}">
                </div>

                <div class="mb-3">
                  <label for="discount" class="form-label">Apply Discount(%):</label>
                  <input type="number" step="any" min="0" name="discount" class="form-control" id="discount" value="{{ request()->discount }}">
                </div>

                <div class="mb-3">
                  Grand Total: {{ $grandTotal }}
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </body>
</html>
