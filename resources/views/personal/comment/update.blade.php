@extends('personal.layouts.main')

@section('content')
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Коментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('personal.main.index')}}">Главная</a></li>
              {{-- <li class="breadcrumb-item active">Категории</li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-7">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th colspan="2" class="text-center">Действия</th>
                   </tr>
                  </thead>
                  <tbody>
                    @foreach ($comments as $comment)
                      <tr>
                      <td>{{ $comment->id}}</td>
                      <td>{{ $comment->message}}</td>

                      <td class="text-center"><a href="{{ route('admin.post.edit', $comment->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>

                      <td class="text-center">
                        <form action="{{ route('personal.liked.delete', $comment->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="border-0 bg-transparent">
                            <i class="fas fa-trash-alt text-danger" role="button"></i>
                          </button>
                        </form>

                      </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection