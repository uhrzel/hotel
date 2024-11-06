<div class="conatainer" style="
    max-width: 618px;
    margin: auto;
">
    <p>
        <center>
            <a href="month.php?month_sale" class="btn btn-primary">Reset</a>
        </center>
    </p>

    <table class="table table-striped table-bordered table-responsive text-center" width="100%">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Card No.</th>
                <th>Room No</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Bookin Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $book_query = "SELECT * FROM booking bk LEFT JOIN customer ct ON bk.customer_id=ct.customer_id LEFT JOIN room rm ON bk.room_id=rm.room_id WHERE bk.payment_status = '1' AND YEAR(bk.booking_date) = '$selectedYear'";

            $books_result = mysqli_query($connection, $book_query);
            if (mysqli_num_rows($books_result) > 0) {
                while ($booksList = mysqli_fetch_assoc($books_result)) {

                    $dateformat = date('Y-m-d', strtotime($booksList['booking_date']));

                    echo "
                            <tr>
                                <td>$booksList[customer_name]</td>
                                <td>$booksList[id_card_no]</td>
                                <td>$booksList[room_no]</td>
                                <td>$booksList[check_in]</td>
                                <td>$booksList[check_out]</td>
                                <td>$dateformat</td>
                            </tr>
                        ";
                }
            }
            ?>
        </tbody>
    </table>
</div>