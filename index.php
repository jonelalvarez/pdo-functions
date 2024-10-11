<?php require_once 'dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siraniko Auto Care System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<?php
    // 3. FOR FETCHING ALL THE CUSTOMERS WITH fetchAll()
        // $query = "SELECT * FROM customers";
                       
        // $stmt = $pdo->prepare($query);

        //PRINTING
        // if ($stmt->execute()) {
            // <pre> TAG IN BETWEEN
            // echo"<pre>";
            // print_r($stmt->fetchAll());
            // echo "<pre>";
        // }
    
    // 4. FOR FETCHING VEHICLE WITH ID OF 12 WITH fetch()   
        // $query = "SELECT * FROM vehicles WHERE vehicleID = 12";
                        
        // $stmt = $pdo->prepare($query);

        //PRINTING
        // if ($stmt->execute()) {
            // <pre> TAG IN BETWEEN
            // echo"<pre>";
            // print_r($stmt->fetch());
            // echo "<pre>";
        // }
    
    // 5. INSERTING A DATA
        // $query = "INSERTING INTO mechanics (mechanicID, firstName, lastName, phoneNumber) VALUES (?, ?, ?, ?)";

        // $stmt = $pdo->prepare($query);

        // PARAMETERS
        // $executeQuery = $stmt->execute([
        //     101, "Jomar", "Clamor", 1234566]
        // );

        // CONFIRMATION
        // if ($executeQuery) {
        //     echo "Data inserted succesfully!";
        // }
        // else {
        //     echo "Data insertion failed";
        // }

    // 6. DELETING A DATA
        // $query = "DELETE FROM mechanic WHERE mechanicID = 101";

        // $stmt = $pdo->prepare($query);

        // CONFIRMATION
        // if ($executeQuery) {
        //     echo "Data deleted succesfully!";
        // }
        // else {
        //     echo "Deleting data failed";
        // }
    
    // 7. UPDATING A DATA
        // $query = "UPDATE mechanics SET firstName = ?, lastName = ? WHERE mechanicID = 101";

        // $stmt = $pdo->prepare($query);

        // PARAMETERS
        // $executeQuery = $stmt->execute([
        //     "Jonel", "Pogi"]
        // );

        // CONFIRMATION
        // if ($executeQuery) {
        //    echo "Data updated succesfully!";
        // }
        // else {
        //     echo "Updating data failed";
        // }


    // 8. DEMONSTRATED IN TABLE
        // $query = "SELECT requestID, serviceType,
        //             CASE 
        //                 WHEN serviceStatus = 2 THEN 'Active'
        //                 WHEN serviceStatus = 3 THEN 'Pending'
        //                 WHEN serviceStatus = 4 THEN 'Cancelled'
        //                 END AS serviceStatus
        //             FROM servicerequests
        //                 ";

        // $stmt = $pdo->prepare($query);
        // $executeQuery = $stmt->execute();

        // if ($executeQuery) {
        //     $serviceReq = $stmt->fetchAll();
        // }

        // else {
        //     echo "Generate table error";
        // }

        ?>
        
        <div class="card col-md-4 mx-auto mt-3">
                <table class="simpletable-bordered table-bordered">
            
                <tr>
                    <th>Service Type</th>
                    <th>Service Status</th>
                </tr>
                <?php foreach ($serviceReq as $row) { ?>
                <tr>
                    <td><?php echo $row['serviceType']; ?></td>
                    <td><?php echo $row['serviceStatus']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        
</body>
</html>