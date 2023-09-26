@extends('templates.layout')

@push('style')

@endpush

@section('content')
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manajemen Produk</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))

            @endif

            @if($errors->any())

            @endif
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#produkFormModal">
            Tambah Produk
            </button>
            @if(session('success'))  
<div class="alert alert-warning alert-dismissible fade show" role="alert" id='success-alert'>
    {{ session('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            @endif

            @if($errors->any());
            <div class="alert alert-danger mt-2" role="alert" id='error-alert'>
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            <div>
                @endif
            </div>
 
        <!-- /.card-body -->
        </div>
        <!-- /.card-footer-->
        @include('produk.form')
    </div>
    <!-- /.card -->
</section>
@endsection
@push('script')
<script>
    $('#error-alert').fadeto(5000, 500).slideup(500, function(){
        $('#error-alert').slideup(500)
    })

    $('#success-alert').fadeto(10000, 500).slideup(500, function(){
        $('#success-alert').slideup(500)
    })

</script>
@endpush