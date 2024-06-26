<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" type="text/javascript" defer></script>
    <title>Hotels</title>

</head>

<body>
    <header>
        <div class="container  d-flex justify-content-between mb-5 mt-2">
            <h1>
                Hotels
            </h1>
<!-- ********************* FORM ************************ -->
            <form class="d-flex align-items-center w-50" action="index.php" method="GET">
              <!-- select to parking  -->
            <h5 class="me-2">Parking</h5>
                <select class="form-control me-2" name="parking">
                    <option value="all">All</option>
                    <option value="0">without parking</option>
                    <option value="1">With parking </option>
                </select>

                <!-- select to vote -->
                <h5 class="me-2">Vote</h5>
                <select class="form-control me-2" name="vote">
                    <option value="all">All</option>
                    <option value="1">&#9733;</option>
                    <option value="2">&#9733;&#9733;</option>
                    <option value="3">&#9733;&#9733;&#9733;</option>
                    <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>
                <button type="submit" class="btn btn-outline-secondary">Search</button>
            </form>
        </div>

    </header>