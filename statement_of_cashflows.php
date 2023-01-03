<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statements.css">
    <title>Get Statements</title>
</head>

<body>
    <div class="statements">
        <a href="businessForm.html">Enter financial details</a>
        <a href="downloadForms.php">Back</a>
        <a href="logout.php">Logout</a>
    </div>
    <main>
        <section>
            <h1>
                <!-- Can't put flex on the <h1> or some screen readers won't announce both strings. -->
                <span class="flex">
                    <!-- This seems like a more natural order for screen readers and we can use flex to reverse them in the layout -->
                    <span>freeCodeCamp</span> <span>Balance Sheet</span>
                </span>
            </h1>
            <!-- Hide these dates from assistive tech since they will be in each table -->
            <div id="years" aria-hidden="true">
                <span>2019</span>
                <span>2020</span>
                <span>2021</span>
            </div>
            <div class="table-wrap">
                <table>
                    <caption>Assets</caption>
                    <thead>
                        <tr>
                            <td></td>
                            <!-- Putting sr-only class on <th> breaks table navigation for some screen readers so we must put it on the value instead. -->
                            <th><span class="sr-only">2019</span></th>
                            <th><span class="sr-only">2020</span></th>
                            <th class="current"><span class="sr-only">2021</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="data">
                            <th>Cash <span class="description">This is the cash we currently have on hand.</span></th>
                            <td>$25</td>
                            <td>$30</td>
                            <td class="current">$28</td>
                        </tr>
                        <tr class="data">
                            <th>Checking <span class="description">Our primary transactional account.</span></th>
                            <td>$54</td>
                            <td>$56</td>
                            <td class="current">$53</td>
                        </tr>
                        <tr class="data">
                            <th>Savings <span class="description">Funds set aside for emergencies.</span></th>
                            <td>$500</td>
                            <td>$650</td>
                            <td class="current">$728</td>
                        </tr>
                        <tr class="total">
                            <th>Total <span class="sr-only">Assets</span></th>
                            <td>$579</td>
                            <td>$736</td>
                            <td class="current">$809</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <caption>Liabilities</caption>
                    <thead>
                        <tr>
                            <td></td>
                            <th><span class="sr-only">2019</span></th>
                            <th><span class="sr-only">2020</span></th>
                            <th><span class="sr-only">2021</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="data">
                            <th>Loans <span class="description">The outstanding balance on our startup loan.</span></th>
                            <td>$500</td>
                            <td>$250</td>
                            <td class="current">$0</td>
                        </tr>
                        <tr class="data">
                            <th>Expenses <span class="description">Annual anticipated expenses, such as payroll.</span></th>
                            <td>$200</td>
                            <td>$300</td>
                            <td class="current">$400</td>
                        </tr>
                        <tr class="data">
                            <th>Credit <span class="description">The outstanding balance on our credit card.</span></th>
                            <td>$50</td>
                            <td>$50</td>
                            <td class="current">$75</td>
                        </tr>
                        <tr class="total">
                            <th>Total <span class="sr-only">Liabilities</span></th>
                            <td>$550</td>
                            <td>$750</td>
                            <td class="current">$500</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <caption>Net Worth</caption>
                    <thead>
                        <tr>
                            <td></td>
                            <th><span class="sr-only">2019</span></th>
                            <th><span class="sr-only">2020</span></th>
                            <th><span class="sr-only">2021</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="total">
                            <th>Total <span class="sr-only">Net Worth</span></th>
                            <td>$579</td>
                            <td>$736</td>
                            <td class="current">$809</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>