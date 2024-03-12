<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Check #</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>

        <!-- Add your transaction data here -->
        <?php foreach ($transactions as $transaction) : ?>

            <tr>
                <td><?= $transaction['date']; ?></td>
                <td><?= $transaction['checkNumber']; ?></td>
                <td><?= $transaction['description']; ?></td>
                <td><?= formatCurrencyAmount($transaction['amount']); ?></td>
            </tr>

        <?php endforeach; ?>

    </tbody>
    <tfoot>
        <tr>
            <th colspan="3">Total Income:</th>
            <td><?= formatCurrencyAmount($totals["totalIncome"]); ?></td>
        </tr>
        <tr>
            <th colspan="3">Total Expense:</th>
            <td><?= formatCurrencyAmount($totals["totalExpense"]); ?></td>
        </tr>
        <tr>
            <th colspan="3">Net total:</th>
            <td><?= formatCurrencyAmount($totals["netTotal"]); ?></td>
        </tr>
    </tfoot>
</table>