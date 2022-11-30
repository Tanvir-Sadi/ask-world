<div class="p-3">
    <div class="flex justify-between items-center bg-white shadow-sm rounded p-3">
        <h1 class="text-2xl">
            Order History
        </h1>
    </div>

    <section class="mt-2 bg-white shadow-sm rounded">

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Package name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Ends at
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Amounts
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Price
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($histories?->data ?:[] as $history):?>
                <tr>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                        <?= $history->items->data[0]->plan->nickname?>
                    </th>
                    <td class="py-4 px-6">
                        <?= date("d M, y",$history->current_period_end)?>
                    </td>
                    <td class="py-4 px-6">
                        <?= $history->items->data[0]->plan->metadata->amount?>
                    </td>
                    <td class="py-4 px-6">
                        $<?=$history->items->data[0]->plan->amount/100?>
                    </td>
                    <td class="py-4 px-6">
                        <span class="mr-1 text-xs text-center border rounded p-1 <?= ($history->status=="active")? 'bg-green-100':'' ?>"><?= $history->status?></span>
                    </td>
                </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </section>
</div>