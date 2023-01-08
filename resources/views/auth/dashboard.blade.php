@extends('auth.layout')

@section('sidecontent')

<div class="pt-4 container">
    <div class="card border-0 p-5 shadow-sm">
        <div class="card-body">
            <div class="card-title h2 mb-4">Dashboard Statistik</div>
            <div class="row">
                <div class="col-3">
                    <div style="min-height: 200px " class="card border border-light p-4 d-flex align-items-center justify-content-center bg-primary">
                        <span class="fs-2 text-white">{{$total_proyek}}</span>
                        <p class="text-center mt-4 text-white">Total Proyek</p>
                    </div>
                </div>
                <div class="col-3">
                    <div style="min-height: 200px" class="card border border-light p-4 d-flex align-items-center justify-content-center bg-success">
                        <span class="fs-2 text-white">{{$proyek_pendek}}</span>
                        <p class="text-center mt-4 text-white">Proyek Jangka Pendek</p>
                    </div>
                </div>
                <div class="col-3">
                    <div style="min-height: 200px" class="card border border-light p-4 d-flex align-items-center justify-content-center bg-warning">
                        <span class="fs-2 text-white">{{$proyek_panjang}}</span>
                        <p class="text-center mt-4 text-white">Proyek Jangka Panjang</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-secondary mt-5"><span style="color:gray;font-weight:bold;">Earned value management</span> adalah sebuah sistem yang diterapkan untuk mengevaluasi 
            kinerja keseluruhan project management. Sistem ini dianggap sebagai strategi yang paling efektif 
            untuk mengevaluasi kualitas proyek karena memberikan konsep penilaian yang cukup lengkap. Earned value 
            management adalah sebuah sistem yang dibentuk berdasarkan tiga prinsip penting, yakni planned value, earned 
            value, dan actual cost. Prinsip-prinsip ini sifatnya saling berkaitan, maka dari itu, proses kerja EVM adalah 
            untuk menilai semua aspek secara bersamaan, bukan terpisah. Selain itu metode ini dapat mengintegrasikan waktu 
            dan biaya sehingga bisa mengetahui kemajuan suatu proyek lebih cepat atau lebih lambat dari jadwal proyek yang 
            seharusnya dan untuk mengetahui lebih besar atau lebih kecil dari anggaran yang seharusnya.</p>
    </div>
</div>

@yield('content')
@endsection