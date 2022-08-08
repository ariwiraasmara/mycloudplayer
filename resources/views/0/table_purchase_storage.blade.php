<table class="table is-mobile text-is-black" id="table_purchase_levelup">
    <thead>
        <th class="bold center">Level</th>
        <th class="bold center">Memory</th>
        <th class="bold center">Monthly</th>
        <th class="bold center">Yearly</th>
        <th class="bold center">Lifetime</th>
    </thead>

    <tbody>
        @foreach ($data as $d)
            <tr>
                <td class="center">{{ $d['level'] }}</td>
                <td class="right">{{ $d['memory'].' GB' }}</td>
                <td class="right">{{ '$'.$d['monthly_pay_usd'].' USD' }} </td>
                <td class="right">{{ '$'.$d['yearly_pay_usd'].' USD' }}</td>
                <td class="right">{{ '$'.$d['lifetime_pay_usd'].' USD' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
