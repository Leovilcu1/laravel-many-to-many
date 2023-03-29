@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
          @include('partials.success')
            <h1>
                AGGIUNGI tecnologia
            </h1>
            <div>
                <a href="{{ route("admin.technologies.create") }}" class="btn btn-success">Aggiungi tecnologia</a>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nome</th>
                    <th scope="col">Slug</th>
                    <th scope="col"># progetto</th>
                  </tr>
                </thead>
                @foreach ($technologies as $index => $technology)
                <tbody>
                  <tr>
                    <th scope="row">{{ $technology->id }}</th>
                    <td>{{ $technology->title }}</td>
                    <td>{{ $technology->slug }}</td> 
                    <td>{{ $technology->posts()->count() }}</td> 
                    <td>
                        <a href="{{ route("admin.technologies.show",$technology->id) }}" class="btn btn-primary" >Detagli</a>
                        <a href="{{ route("admin.technologies.edit",$technology->id) }}" class="btn btn-warning" >Aggiorna</a>

                        <form class="d-inline-block" action="{{ route('admin.technologies.destroy',$technology->id) }}" method="POST" onsubmit="return confirm('sei sicuro di voler eliminare questo categoria')">
                          @csrf
                          @method("DELETE")
                          <button class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>

    
</div>
@endsection