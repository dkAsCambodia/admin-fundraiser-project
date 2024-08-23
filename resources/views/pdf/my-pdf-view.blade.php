<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <p>{{ $campaign }}</p>
    <p>{{ $email }}</p>
    <hr>
    <h1>{{ $title }}</h1>
    <hr>
    <b>Name :</b>
    <b></b> {{ $name }} <br><br>

    <b>Donation Amount :</b>
    <b></b> {{ $donation_amount }} <br><br>

    <b>Designation :</b>
    <b></b> {{ $designation }} <br><br>

    <b>Donation Date :</b>
    <b></b> {{ $donation_date }} <br><br>

    <b>Receipt Number :</b>
    <b></b> {{ $receipt_number }} <br><br>

    <b>Date Issued :</b>
    <b></b> {{ $date_issued }} <br><br>

    <hr>

    <p>Please print this receipt for tax purposes. As required by the IRS regulations, we provide the following information:
Zakat is a 501(c)(3) not for profit organization. Our federal tax identification number is <TAX IDENTIFICATION
NUMBER>. As no goods or services have been provided in connection with this gift, the full amount is deductible to
the fullest extent provided by law.</p>

</body>
</html>
