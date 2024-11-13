@extends('admin.layouts.default')

@section('template_title')
    Audiencias
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Audiencias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('audiencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Descricao</th>
									<th >Data</th>
									<th >Hora</th>
									<th >Id Processo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($audiencias as $audiencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $audiencia->descricao }}</td>
										<td >{{ $audiencia->data }}</td>
										<td >{{ $audiencia->hora }}</td>
										<td >{{ $audiencia->id_processo }}</td>

                                            <td>
                                                <form action="{{ route('audiencias.destroy', $audiencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('audiencias.show', $audiencia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('audiencias.edit', $audiencia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $audiencias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
