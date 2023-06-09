@extends('template/header')

@section('content')
<div class="flex items-center mb-10">
    <div class="grow m-auto">
        <div class="prose">
            <h1>Data Invoice</h1>
        </div>
    </div>
</div>
<div class="rounded bg-accent p-4 w-full">
    <div class="flex justify-end w-full">
        <a class="btn btn-primary" href="{{url('po/barang')}}">Tambah</a>
    </div>
    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="prose"><h3 class="font-bold">Kode</h3></th>
                    <th class="prose"><h3 class="font-bold">Distributor</h3></th>
                    <th class="prose"><h3 class="font-bold">Nomor Telp</h3></th>
                    <th class="prose"><h3 class="font-bold">Grand Total (Rp)</h3></th>
                    <th class="prose"><h3 class="font-bold">Tanggal</h3></th>
                    <th class="prose"><h3 class="font-bold">Status</h3></th>
                    <th class="prose"><h3 class="font-bold">Aksi</h3></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>PO001</th>
                    <th>Calvin Adhikang</th>
                    <td>0822 5732 4548</td>
                    <td>Rp 1,000,000</td>
                    <td>02 April 2023</td>
                    <td>
                        <span class="badge badge-secondary">
                            Process
                        </span>
                    </td>
                    <td>
                        <i class="fa-solid fa-circle-info text-base hover:text-secondary"></i>
                    </td>
                </tr>
                <tr>
                    <th>PO002</th>
                    <th>Yuki</th>
                    <td>0822 5732 4548</td>
                    <td>Rp 2,500,000</td>
                    <td>02 Juni 2023</td>
                    <td>
                        <span class="badge badge-secondary">
                            Process
                        </span>
                    </td>
                    <td>
                        <i class="fa-solid fa-circle-info text-base hover:text-secondary"></i>
                    </td>
                </tr>
                <tr>
                    <th>PO003</th>
                    <th>Felita</th>
                    <td>0822 5732 4548</td>
                    <td>Rp 3,500,000</td>
                    <td>02 Juni 2023</td>
                    <td>
                        <span class="badge badge-primary">
                            Finished
                        </span>
                    </td>
                    <td>
                        <i class="fa-solid fa-circle-info text-base hover:text-secondary"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
