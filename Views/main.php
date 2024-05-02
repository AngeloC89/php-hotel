<?php
$template = "";
foreach ($hotels as $key) {
    $template .= "<tr> <td>{$key['name']}</td> <td>{$key['description']}</td> <td>{$key['parking']}</td> <td>{$key['vote']}</td> <td>{$key['distance_to_center']}</td> </tr>";
};
?>


<main>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $template ?>
        </tbody>
    </table>
</main>