@extends('layouts.admin.master')
@section('title','Laporan')
@section('page-title','Laporan')
@section('breadcrumb','laporan')
@php $total = 0 @endphp
@section('content')

  <section class="content">
      <div class="container-fluid">
        <div class="mb-3">
          <div class="">
            <a href="{{ route('laporan.pdf') }}" class="btn btn-info"><i class="fas fa-trash"></i>Export PDF</a>
        </div>

        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h3 class="text-center">Laporan Keuangan Laundry</h3>
                <h6 class="text-center text-muted">Jl. Pagaden Subang Jawa Barat Indonesia</h6>
                <table class="table table-striped">
                  <thead>
                    <th class="text-center align-middle">No</th>
                    <th class="text-center align-middle">Tanggal</th>
                    <th class="text-center align-middle">Invoice</th>
                    <th class="text-center align-middle">Pemasukan</th>
                  </thead>
                  <tbody class="text-center">
                      @forelse($datas as $data)
                      @php $total = $total + $data->total @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->updated_at }}</td>
                        <td>{{ $data->kode_invoice }}</td> 
                        <td>{{ $data->total }}</td>
                    </tr>
                      @empty
                    <tr>
                      <td class="text-center" colspan="4">tidak ada data</td>
                    </tr>
                      @endforelse
                    <tr>
                      <td colspan="3" class="font-weight-bold">Total</td>
                      <td>{{ $total }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
