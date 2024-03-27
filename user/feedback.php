<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
    .rate {
        display: inline-block;
    }

    .rate input {
        display: none;
    }

    .rate label {
        cursor: pointer;
        width: 32px;
        height: 32px;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://example.com/path/to/empty_star.png');
        background-size: cover;
    }

    .rate input:checked ~ label {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://example.com/path/to/star.png');
    }
    </style>
</head>
<body>
    <section>
        <h1>Give Feedback</h1>
        <form action="" method="post"> 
            <label for="komentar">Comment:</label> 
            <input type="text" id="komentar" name="komentar">
            <hr>
            <label for="rating">Rating:</label>
            <fieldset name="rating" class="rate">
                <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
                <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
                <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
                <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
                <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
            </fieldset>
            <hr>
            <button type="submit">Submit</button>
    </section>
</body>
</html>