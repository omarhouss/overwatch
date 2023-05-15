<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <form action="{{ route('create-payment') }}" method="post">
        @csrf
        <label for="amount">Amount:</label>
        <input type="number" name="amount"id="amount" required>
        <button type="submit">Pay with Selix</button>
    </form>

</body>
</html>
